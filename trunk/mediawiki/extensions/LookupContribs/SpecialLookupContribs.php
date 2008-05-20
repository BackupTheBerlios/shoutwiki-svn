<?php
/**
 * Special:LookupContribs, show user contributions from all defined databases ($wgLocalDatabases)
 * @author Jack Phoenix <wikia.jack@gmail.com>
 * @copyright © 2008 Jack Phoenix
 */
//Sanity check
if ( !defined( 'MEDIAWIKI' ) ) {
    die( "This is an extension to the MediaWiki package and cannot be run standalone\n" );
}

//Extension credits
$wgExtensionCredits['specialpage'][] = array(
	'name' => 'Lookup Contribs',
	'version' => '0.2',
	'description' => 'Displays user contributions on multiple wikis',
	'author' => 'Jack Phoenix',
	'url' => 'http://www.shoutwiki.com'
);

//Allow staff and lookupcontribs to access this special page
$wgGroupPermissions['staff']['lookupcontribs'] = true;
$wgGroupPermissions['lookupcontribs']['lookupcontribs'] = true;

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['LookupContribs'] = $dir . 'LookupContribs.i18n.php';
$wgAutoloadClasses['LookupContribsPage'] = $dir . 'LookupContribs_body.php';
$wgSpecialPages['LookupContribs'] = 'LookupContribsPage';