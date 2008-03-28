<?php
/**
  * Special:Loldongs, a special page to spread the loldongs
 * @author Misza13 <misza1313@gmail.com>
 * @copyright © 2007-2008 Misza13
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	echo "Loldongs extension\n";
	exit( 1 ) ;
}

$wgExtensionCredits['specialpage'][] = array(
	'author' => 'Misza',
	'name' => 'Loldongs',
	'description' => 'loldongs'
);

$wgAvailableRights[] = 'loldongs';
$wgGroupPermissions['loldongs']['loldongs'] = true;

# Register special page
$dir = dirname(__FILE__) . '/';
$wgSpecialPages['Loldongs'] = 'MakeLoldongsPage';
$wgAutoloadClasses['MakeLoldongsPage'] = $dir . 'SpecialLoldongs_body.php';
$wgExtensionMessagesFiles['Loldongs'] = $dir . 'SpecialLoldongs.i18n.php';