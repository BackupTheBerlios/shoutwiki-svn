<?php
/**
* GroupPermissions Manager extension by Ryan Schmidt
* Allows privelaged users to modify group permissions via a special page
* See http://www.mediawiki.org/wiki/Extension:GroupPermissions_Manager for more info
*/
 
if(!defined('MEDIAWIKI')) {
        echo("This file is an extension to the MediaWiki software and is not a valid access point");
        die(1);
}
 
$wgExtensionCredits['specialpage'][] = array(
'name' => 'GroupPermissions Manager',
'author' => 'Ryan Schmidt',
'url' => 'http://www.mediawiki.org/wiki/Extension:GroupPermissions_Manager',
'version' => '2.0',
'description' => 'Manage group permissions via a special page',
);
$wgAutoloadClasses['Grouppermissions'] = dirname(__FILE__) . '/GPManager.page.php';
$wgSpecialPages['Grouppermissions'] = 'Grouppermissions';
$wgAvailableRights[] = 'grouppermissions';
 
$wgExtensionFunctions[] = 'efGPManager';
 
##Whether or not to enable logging, default is true
##true = everything is logged, false = nothing logged, some integer = logged is only kept to past integer entries
##Please note that this log is NOT a wiki log (via Special:Log), but is a file in the filesystem
##This also controls the revisioning system
$wgGPManagerEnableLogging = true;
 
##Permission required to use the special page
##By default all bureaucrats can
$wgGroupPermissions['bureaucrat']['grouppermissions'] = true;
##Uncomment this if you want to make a separate group that can access the page as well
#$wgGroupPermissions['grouppermissions']['grouppermissions'] = true;
 
##Load the config file, if it exists.
if(file_exists(dirname(__FILE__) . "/config/GroupPermissions.php") ) {
        require_once(dirname(__FILE__) . "/config/GroupPermissions.php");
}
 
/**
* Populate the message cache and register the special page
*/
function efGPManager() {
        global $wgMessageCache, $wgGPManagerEnableLogging;
        require_once( dirname( __FILE__ ) . '/GPManager.i18n.php' );
        foreach( efGPManagerMessages() as $lang => $messages )
                $wgMessageCache->addMessages( $messages, $lang );
}

