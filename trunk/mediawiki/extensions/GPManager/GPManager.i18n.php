<?php
 
/**
* Internationalisation file for the GroupPermissions Manager extension
* See http://www.mediawiki.org/wiki/Extension:GroupPermissions_Manager for more info
* If you are good at translating messages, please contact me :)
*/
 
function efGPManagerMessages() {
        $messages = array(
 
                /* English (Ryan Schmidt) */
                'en' => array(
                        'grouppermissions' => 'Manage Group Permissions',
                        'grouppermissions-header' => "You may use this page to change the underlying permissions of the various usergroups",
                        'grouppermissions-search' => 'Group:',
                        'grouppermissions-dologin' => 'Login',
                        'grouppermissions-dosearch' => 'Go',
                        'grouppermissions-error' => 'An unknown error has occurred, please hit the back button on your browser and try again',
                        'grouppermissions-change' => 'Change group permissions',
                        'grouppermissions-add' => 'Add group',
                        'grouppermissions-delete' => 'Delete group',
                        'grouppermissions-comment' => 'Comment:',
                        'grouppermissions-addsuccess' => '$1 has been successfully added',
                        'grouppermissions-deletesuccess' => '$1 has been successfully deleted',
                        'grouppermissions-changesuccess' => 'Permissions for $1 have successfully been changed',
                        'grouppermissions-true' => 'true',
                        'grouppermissions-false' => 'false',
                        'grouppermissions-inherit' => 'inherit',
                        'grouppermissions-nooldrev' => 'Error encountered when attempting to archive the current config file. No archive will be made',
                        'grouppermissions-cannotwritelog' => 'Error encountered when writing log entry. No log entry will be written',
                )
 
        );
 
        return $messages;
}

