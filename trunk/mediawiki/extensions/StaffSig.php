<?php
/**
 * StaffSig extension for identifying the staff members
 * @author Jack Phoenix <wikia.jack@gmail.com>
 * @copyright © 2007-2008 Jack Phoenix
 */
$wgExtensionFunctions[] = 'wfStaffSig';

$wgExtensionCredits['parserhook'][] = array(
	'name' => 'StaffSig',
	'author' => 'Jack Phoenix',
	'version' => '0.3',
	'url' => 'http://www.shoutwiki.com',
	'description' => 'Adds <tt>&lt;staff/&gt;</tt> tag to identify staff members.'
);

function wfStaffSig() {
    global $wgParser;

    $wgParser->setHook('staff', 'renderStaffSig');
}

function renderStaffSig() {
    $output  = '<a href="http://www.shoutwiki.com/wiki/ShoutWiki_Staff"><img src="http://staff.shoutwiki.com/i/images/thumb/a/ac/Staffsig.png/60px-Staffsig.png" alt="ShoutWiki Staff"/></a>';

    return $output;
}