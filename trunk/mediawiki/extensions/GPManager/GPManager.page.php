<?php
 
/**
* Class definition for the special page
*/
 
class Grouppermissions extends SpecialPage {
        var $target = '';
        var $oldrev = '';
        var $permissionslist = array();
        var $groupslist = array();
        var $listsmade = false;
        var $otherrights = array();
 
        /**
        * Constructor
        */
        function Grouppermissions() {
                SpecialPage::SpecialPage( 'Grouppermissions', 'grouppermissions' );
        }
 
        /**
        * Main execution function
        */
        function execute( $par ) {
                global $wgRequest, $wgOut, $wgUser, $wgGPManagerEnableLogging;
 
                if( !$wgUser->isAllowed( 'grouppermissions' ) ) {
                        $wgOut->permissionRequired( 'grouppermissions' );
                        return;
                }
 
                $this->setHeaders();
                $wgOut->addWikiText( wfMsg( 'grouppermissions-header' ) );
 
                //display the search form and define an array of the usergroups and an array of all current permissions
                global $wgGroupPermissions;
                $this->target = $par ? $par : $wgRequest->getText( 'groupsearch', '');
 
                if(!$this->listsmade) {
                        //only make the lists of permissions, etc. once to reduce load times
                        foreach($wgGroupPermissions as $group => $permissions) {
                                $this->groupslist[] = $group;
                                foreach($permissions as $right => $value) {
                                        if(!in_array($right, $this->permissionslist)) {
                                                $this->permissionslist[] = $right;
                                        }
                                }
                        }
                        //sort the array in alphabetical order for ease of finding things
                        sort(&$this->permissionslist);
                        $this->listsmade = true;
                }
                $wgOut->addHtml( $this->makeSearchForm() );
 
                //test if we have a valid target to act upon
                if( $this->target != '') {
                        //ok, we do. Now, what action was just being performed?
                        if( $wgRequest->getCheck( 'dosearch' ) || !$wgRequest->wasPosted() ) {
                                //it was a search, check the group
                                if(in_array($this->target, $this->groupslist)) {
                                        //group exists, so we can change it, can't delete it if it's one of the four automatic groups, though
                                        if($this->target == '*' || $this->target == 'user' || $this->target == 'autoconfirmed' || $this->target == 'emailconfirmed') {
                                                //cannot delete group, show just show the change form
                                                $wgOut->addHtml( $this->makeChangeForm() );
                                        } else {
                                                //can delete group, so show that form as well
                                                $wgOut->addHtml( $this->makeDeleteForm() );
                                                $wgOut->addHtml( $this->makeChangeForm() );
                                        }
                                } else {
                                        //group doesn't exist, let's make it and assign some rights
                                        $wgOut->addHtml( $this->makeAddForm() );
                                }
                        } elseif( $wgRequest->wasPosted() && $wgRequest->getVal('doadd') == '1' ) {
                                //we just added a new group!
                                $success = $this->writeFile('add');
                                if($success) {
                                        if($wgGPManagerEnableLogging)
                                                $this->addLogItem( 'added', trim( $wgRequest->getText( 'addcomment' ) ) );
                                        $wgOut->addWikiText( wfMsg( 'grouppermissions-addsuccess', $this->target ) );
                                        $this->listsmade = false;
                                }
                        } elseif( $wgRequest->wasPosted() && $wgRequest->getVal('dodelete') == '1' ) {
                                //we just deleted a user group. don't remove users from the group just in case we want to make it again
                                $success = $this->writeFile('delete');
                                if($success) {
                                        if($wgGPManagerEnableLogging)
                                                $this->addLogItem( 'deleted', trim( $wgRequest->getText( 'deletecomment' ) ) );
                                        $wgOut->addWikiText( wfMsg( 'grouppermissions-deletesuccess', $this->target ) );
                                        $this->listsmade = false;
                                }
                        } elseif( $wgRequest->wasPosted() && $wgRequest->getVal('dochange') == '1' ) {
                                //we modified the permissions of an existing group
                                $success = $this->writeFile('change');
                                if($success) {
                                        if($wgGPManagerEnableLogging)
                                                $this->addLogItem( 'changed', trim( $wgRequest->getText( 'comment' ) ) );
                                        $wgOut->addWikiText( wfMsg( 'grouppermissions-changesuccess', $this->target ) );
                                        $this->listsmade = false;
                                }
                        }
                }
        }
 
        /**
        * Produce a form to search for a group
        */
        function makeSearchForm() {
                $thisTitle = Title::makeTitle( NS_SPECIAL, $this->getName() );
                $form = wfOpenElement( 'form', array( 'method' => 'post', 'action' => $thisTitle->getLocalUrl() ) );
                $form .= wfElement( 'label', array( 'for' => 'groupsearch' ), wfMsg( 'grouppermissions-search' ) ) . ' ';
                $form .= wfElement( 'input', array( 'type' => 'text', 'name' => 'groupsearch', 'id' => 'groupsearch', 'value' => $this->target ) ) . ' ';
                $form .= wfElement( 'input', array( 'type' => 'submit', 'name' => 'dosearch', 'value' => wfMsg( 'grouppermissions-dosearch' ) ) );
                $form .= wfElement( 'input', array( 'type' => 'hidden', 'name' => 'issearch', 'value' => '1' ) );
                $form .= wfCloseElement( 'form' );
                return $form;
        }
 
        /**
        * Produce forms to allow changing of group permissions, adding new groups, and deleting groups.
        */
        function makeChangeForm() {
                //Returns the checkbox toggles for the given group. Permissions that cannot be modified are greyed out.
                $thisTitle = Title::makeTitle( NS_SPECIAL, $this->getName() );
                $form = wfElement( 'br' );
                $form .= wfOpenElement( 'form', array( 'method' => 'post', 'action' => $thisTitle->getLocalUrl() ) );
                #get the rows of checkboxes, specify that we should get values for them as well
                $form .= wfOpenElement( 'table' );
                $form .= $this->createCheckboxes( $form, true );
                $form .= wfCloseElement( 'table' ) . wfElement( 'br' );
                global $wgGPManagerEnableLogging;
                if($wgGPManagerEnableLogging){
                        $form .= wfElement( 'label', array( 'for' => 'comment' ), wfMsg( 'grouppermissions-comment' ) ) . ' ';
                        $form .= wfElement( 'input', array( 'type' => 'text', 'name' => 'comment', 'id' => 'comment', 'size' => 45 ) ) . ' ';
                }
                $form .= wfElement( 'input', array( 'type' => 'submit', 'name' => 'change', 'value' => wfMsg( 'grouppermissions-change' ) ) );
                $form .= wfElement( 'input', array( 'type' => 'hidden', 'name' => 'dochange', 'value' => '1' ) );
                $form .= wfElement( 'input', array( 'type' => 'hidden', 'name' => 'groupsearch', 'value' => $this->target ) );
                $form .= wfCloseElement( 'form' );
                return $form;
        }
 
 
        function makeDeleteForm() {
                //sanity check, make sure that we aren't showing this for the four automatic groups
                if($this->target == '*' || $this->target == 'user' || $this->target == 'autoconfirmed' || $this->target == 'emailconfirmed' ) {
                        return;
                }
                $thisTitle = Title::makeTitle( NS_SPECIAL, $this->getName() );
                $form .= wfElement( 'br' );
                $form .= wfOpenElement( 'form', array( 'method' => 'post', 'action' => $thisTitle->getLocalUrl() ) );
                global $wgGPManagerEnableLogging;
                if($wgGPManagerEnableLogging){
                        $form .= wfElement( 'label', array( 'for' => 'deletecomment'), wfMsg( 'grouppermissions-comment' ) ) . ' ';
                        $form .= wfElement( 'input', array( 'type' => 'text', 'name' => 'deletecomment', 'id' => 'deletecomment' ) ) . ' ';
                }
                $form .= wfElement( 'input', array( 'type' => 'submit', 'name' => 'delete', 'value' => wfMsg( 'grouppermissions-delete' ) ) );
                $form .= wfElement( 'input', array( 'type' => 'hidden', 'name' => 'dodelete', 'value' => '1' ) );
                $form .= wfElement( 'input', array( 'type' => 'hidden', 'name' => 'groupsearch', 'value' => $this->target ) );
                $form .= wfCloseElement( 'form' );
                return $form;
        }
 
        function makeAddForm() {
                //make a new group and display checkboxes, those that cannot be assigned are greyed out
                $thisTitle = Title::makeTitle( NS_SPECIAL, $this->getName() );
                $form = wfElement( 'br' );
                $form .= wfOpenElement( 'form', array( 'method' => 'post', 'action' => $thisTitle->getLocalUrl() ) );
                #get the rows of checkboxes, specify that we should get values for them as well
                $form .= wfOpenElement( 'table' );
                $form .= $this->createCheckboxes( $form, false );
                $form .= wfCloseElement( 'table' ) . wfElement( 'br' );
                global $wgGPManagerEnableLogging;
                if($wgGPManagerEnableLogging){
                        $form .= wfElement( 'label', array( 'for' => 'addcomment' ), wfMsg( 'grouppermissions-comment' ) ) . ' ';
                        $form .= wfElement( 'input', array( 'type' => 'text', 'name' => 'addcomment', 'id' => 'addcomment', 'size' => 45 ) ) . ' ';
                }
                $form .= wfElement( 'input', array( 'type' => 'submit', 'name' => 'add', 'value' => wfMsg( 'grouppermissions-add' ) ) );
                $form .= wfElement( 'input', array( 'type' => 'hidden', 'name' => 'doadd', 'value' => '1' ) );
                $form .= wfElement( 'input', array( 'type' => 'hidden', 'name' => 'groupsearch', 'value' => $this->target ) );
                $form .= wfCloseElement( 'form' );
                return $form;
        }
 
        /**
        * Add logging entries for the specified action if logging is enabled
        * If it's an integer, then we may need to trim out entries as well.
        */
        function addLogItem( $type, $comment = '' ) {
                global $wgGPManagerEnableLogging, $wgUser, $wgOut;
                if($wgGPManagerEnableLogging == false)
                        return;
                if(file_exists(dirname(__FILE__) . '/config/GroupPermissionsLog.log')) {
                        $current = file_get_contents(dirname(__FILE__) . '/config/GroupPermissionsLog.log');
                } else {
                        $current = "";
                }
                if(is_int($wgGPManagerEnableLogging)) {
                        $entries = explode("\n", $current);
                        if(count($entries) >= $wgGPManagerEnableLogging) {
                                $old = array_shift($entries);
                                preg_match("UNIQ--(.*?)--QINU", $old, $matches);
                                if(file_exists(dirname(__FILE__) . '/config/GroupPermissionsRevision.' . $matches[1] . '.php')) {
                                        unlink(dirname(__FILE__) . '/config/GroupPermissionsRevision.' . $matches[1] . '.php');
                                }
                                $current = implode("\n", $entries);
                        }
                }
                if($current !== "")
                        $current .= "\n";
                $current .= "UNIQ--{$this->oldrev}--QINU || {$wgUser->getName()} -> {$type} group {$this->target}";
                if($comment) 
                        $current .= " :: {$comment}";
                $f = fopen(dirname(__FILE__) . '/config/GroupPermissionsLog.log', 'wt');
                if(fwrite($f, $current)) {
                        fclose($f);
                        return true;
                } else {
                        $wgOut->addWikiText(wfMsg('grouppermissions-cannotwritelog'));
                        return false;
                }
        }
 
        /**
        * Make the big table of radio buttons and permissions
        * @param form the form that it is adding the radio buttons to.
        * @param getcurrentvalues is used for determining if it should set the radio buttons at the current permissions
        */
        function createCheckboxes( &$form, $getcurrentvalues ) {
                global $wgGroupPermissions;
                if($getcurrentvalues) {
                        //let's extract the appropriate array of values from GroupPermissions once so we don't have to put it in the foreach
                        foreach($wgGroupPermissions as $group => $permissions) {
                                if($group == $this->target) {
                                        $evGroupPermissions = $permissions;
                                        break;
                                }
                        }
                }
 
                foreach($this->permissionslist as $right) {
                        if($getcurrentvalues) {
                                foreach($evGroupPermissions as $permission => $value) {
                                        $bool = in_array($right, array_keys($evGroupPermissions));
                                        if($right == $permission || !$bool) {
                                                $form .= wfOpenElement( 'tr' ) . wfOpenElement( 'td' ) . "{$right}: " . wfCloseElement( 'td' );
                                                $form .= wfOpenElement( 'td' ) . wfElement( 'label', array( 'for' => "{$right}-true" ), wfMsg( 'grouppermissions-true' ) ) . ' ';
                                                if($value == 1 && $bool) {
                                                        //right is set to true
                                                        $form .= $this->makeRadio( $right, 'true', true ) . wfCloseElement( 'td' );
                                                } else {
                                                        $form .= $this->makeRadio( $right, 'true' ) . wfCloseElement( 'td' );
                                                }
                                                $form .= wfOpenElement( 'td' ) . wfElement( 'label', array( 'for' => "{$right}-false" ), wfMsg( 'grouppermissions-false' ) ) . ' ';
                                                if($value == 0 && $bool) {
                                                        //right is set to false
                                                        $form .= $this->makeRadio( $right, 'false', true ) . wfCloseElement( 'td' );
                                                } else {
                                                        $form .= $this->makeRadio( $right, 'false' ) . wfCloseElement( 'td' );
                                                }
                                                $form .= wfOpenElement( 'td' ) . wfElement( 'label', array( 'for' => "{$right}-inherit" ), wfMsg( 'grouppermissions-inherit' ) ) . ' ';
                                                if(!$bool) {
                                                        //right isn't set, which means that it is inherited from other groups
                                                        $form .= $this->makeRadio( $right, 'inherit', true ) . wfCloseElement( 'td' );
                                                } else {
                                                        $form .= $this->makeRadio( $right, 'inherit' ) . wfCloseElement( 'td' );
                                                }
                                                $form .= wfCloseElement( 'tr' );
                                                break;
                                        }
                                }
                        } else {
                                //just set it at inherit
                                $form .= wfOpenElement( 'tr' ) . wfOpenElement( 'td' ) . "{$right}: " . wfCloseElement( 'td' );
                                $form .= wfOpenElement( 'td' ) . wfElement( 'label', array( 'for' => "{$right}-true" ), wfMsg( 'grouppermissions-true' ) ) . ' ';
                                $form .= $this->makeRadio($right, 'true') . wfCloseElement( 'td' );
                                $form .= wfOpenElement( 'td' ) . wfElement( 'label', array( 'for' => "{$right}-false" ), wfMsg( 'grouppermissions-false' ) ) . ' ';
                                $form .= $this->makeRadio($right, 'false') . wfCloseElement( 'td' );
                                $form .= wfOpenElement( 'td' ) . wfElement( 'label', array( 'for' => "{$right}-inherit" ), wfMsg( 'grouppermissions-inherit' ) ) . ' ';
                                $form .= $this->makeRadio($right, 'inherit', true);
                                $form .= wfCloseElement( 'td' ) . wfCloseElement ( 'tr' );
                        }
                }
        }
 
        /**
        * Write the php file
        */
        function writeFile( $type ) {
                global $wgGPManagerEnableLogging;
                //can we write the file?
                if(!is_writable( dirname(__FILE__) . "/config" )) {
                        echo( "<h2>Cannot write config file, aborting</h2>
 
                        <p>In order to use this extension, you need to make the /config subdirectory of this extension
                        writable by the webserver (eg, if you have this extension installed in /extensions/GPManager,
                        you need to make /extensions/GPManager/config writable by the webserver.</p>
 
                        <p>Make the necessary changes, then refresh this page to try again</p>" );
                        die( 1 );
                }
                $this->oldrev = gmdate(dmYHis);
                if(file_exists(dirname(__FILE__) . '/config/GroupPermissions.php') && $wgGPManagerEnableLogging) {
                        $r = rename(dirname(__FILE__) . '/config/GroupPermissions.php', dirname(__FILE__) . '/config/GroupPermissions.' . $this->oldrev . '.php');
                        if(!$r) {
                                global $wgOut;
                                $wgOut->addWikiText(wfMsg('grouppermissions-nooldrev'));
                        }
                }
                $grouppermissions = '<?php
##### This file was automatically generated by Special:Grouppermissions. When changing group
##### permissions, please do so HERE instead of LocalSettings.php or anywhere else. If you
##### set permissions elsewhere, changing them here may not produce the desired results.';
                global $wgGroupPermissions, $wgRequest;
                //run through the current permissions first and change those if need be
                foreach($wgGroupPermissions as $group => $permissions) {
                        foreach($permissions as $right => $value) {
                                if($wgRequest->getVal($right) == 'true' && $group == $this->target && $type == 'change' ) {
                                        //group matches target group and we're changing the permissions and the checkbox for the right is true
                                        $grouppermissions .= "
\$wgGroupPermissions['{$group}']['{$right}'] = true;";
                                } elseif($wgRequest->getVal($right) == 'false' && $group == $this->target && $type == 'change') {
                                        //group matches target group and we're changing the permissions and the checkbox for the right is false
                                        $grouppermissions .= "
\$wgGroupPermissions['{$group}']['{$right}'] = false;";
                                } elseif( $group !== $this->target && $value == 1 ) {
                                        //group doesn't match target group and the current value is true
                                        $grouppermissions .= "
\$wgGroupPermissions['{$group}']['{$right}'] = true;";
                                } elseif( $group !== $this->target && $value == 0 ) {
                                        //group doesn't match target group and the current value is false
                                        $grouppermissions .= "
\$wgGroupPermissions['{$group}']['{$right}'] = false;";
                                }
                        }
                }
 
                if($type == 'add') {
                        //add the new group and its permissions
                        foreach($this->permissionslist as $right) {
                                if($wgRequest->getVal($right) == 'true') {
                                        $grouppermissions .= "
\$wgGroupPermissions['{$this->target}']['{$right}'] = true;";
                                } elseif($wgRequest->getVal($right) == 'false') {
                                        $grouppermissions .= "
\$wgGroupPermissions['{$this->target}']['{$right}'] = false;";
                                }
                                //if it's inherit then we don't add anything
                        }
                }
 
                if($type == 'change') {
                        //check to see if we defined any of the previously-inherited groups (aka stuff that wasn't in the inital $wgGroupPermissions array)
                        foreach($this->permissionslist as $right) {
                                if(!isset($wgGroupPermissions[$this->target][$right]) && $wgRequest->getVal($right) == 'true') {
                                        $grouppermissions .= "
\$wgGroupPermissions['{$this->target}']['{$right}'] = true;";
                                } elseif(!isset($wgGroupPermissions[$this->target][$right]) && $wgRequest->getVal($right) == 'false') {
                                        $grouppermissions .= "
\$wgGroupPermissions['{$this->target}']['{$right}'] = false;";
                                }
                        }
                }
 
                $grouppermissions = str_replace( "\r\n", "\n", $grouppermissions );
                chdir( dirname(__FILE__) . "/config" );
                $f = fopen( "GroupPermissions.php", 'wt' );
                if(fwrite( $f, $grouppermissions ) ) {
                        fclose( $f );
                        print "\n";
                        return true;
                } else {
                        fclose( $f );
                        echo("<p class='error'>An error occured while writing the config/GroupPermissions.php file. Check user rights and disk space then try again.</p>");
                        return false;
                }
        }
 
        function makeRadio( $right = '', $value = '', $checked = false ) {
                if($checked) {
                        return "<input type=\"radio\" name=\"{$right}\" id=\"{$right}-{$value}\" class=\"{$value}\" value=\"{$value}\" checked=\"checked\" />";
                }
                return "<input type=\"radio\" name=\"{$right}\" id=\"{$right}-{$value}\" class=\"{$value}\" value=\"{$value}\" />";
        }
}

