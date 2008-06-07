<?php
/**
 * WikiFarmer extension - allows managing a wiki farm
 *
 * @author Misza <misza@shoutwiki.com>
 * @copyright © 2008 Misza
 */
if ( !defined( 'MEDIAWIKI' ) ) {
	echo "WikiFarmer extension\n";
	exit( 1 ) ;
}

$wgExtensionCredits['other'][] = array(
	'author' => 'Misza',
	'name' => 'WikiFarmer',
	'description' => 'An extension for managing a wiki farm',
	'url' => 'http://www.mediawiki.org/wiki/Extension:WikiFarmer'
);

$dir = dirname( __FILE__ );

$wgWikiFarmerHost = 'localhost';
$wgWikiFarmerUser = 'farmer';
$wgWikiFarmerPass = 'farmers_secret';
$wgWikiFarmerDB = 'farmer_db';

$wgGroupPermissions['staff']['wikifarmer'] = true;

$wgExtensionMessagesFiles['WikiFarmer'] = "$dir/SpecialWikiFarmer.i18n.php";

$wgSpecialPages['WikiFarmer'] = 'WikiFarmerPage';
$wgAutoloadClasses['WikiFarmerPage'] = "$dir/SpecialWikiFarmer_body.php";
$wgAutoloadClasses['WikiFarmerForm'] = "$dir/SpecialWikiFarmer_body.php";