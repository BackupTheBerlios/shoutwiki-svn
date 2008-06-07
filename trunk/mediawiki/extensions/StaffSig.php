<?php
/**
 * StaffSig extension for identifying the staff members
 *
 * @author Jack Phoenix <jack@shoutwiki.com>
 * @copyright © 2007-2008 Jack Phoenix
 */

if ( defined( 'MW_SUPPORTS_PARSERFIRSTCALLINIT' ) ) {
	$wgHooks['ParserFirstCallInit'][] = 'wfStaffSig';
} else {
	$wgExtensionFunctions[] = 'wfStaffSig';
}

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
	return true;
}

function renderStaffSig() {
    $output  = '<a href="http://www.shoutwiki.com/wiki/ShoutWiki_Staff"><img src="http://staff.shoutwiki.com/i/images/thumb/a/ac/Staffsig.png/60px-Staffsig.png" alt="ShoutWiki Staff"/></a>';

    return $output;
}