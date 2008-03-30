<?php

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
$wgWikiFarmerDB = 'farmer_db';
$wgWikiFarmerUser = 'farmer';
$wgWikiFarmerPass = 'farmers_secret';

$wgGroupPermissions['staff']['wikifarmer'] = true;

$wgExtensionMessagesFiles['WikiFarmer'] = "$dir/SpecialWikiFarmer.i18n.php";

$wgSpecialPages['WikiFarmer'] = 'WikiFarmerPage';
$wgAutoloadClasses['WikiFarmerPage'] = "$dir/SpecialWikiFarmer_body.php";
$wgAutoloadClasses['WikiFarmerForm'] = "$dir/SpecialWikiFarmer_body.php";
