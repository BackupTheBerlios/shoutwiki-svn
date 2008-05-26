<?php
# Not a valid entry point, skip unless MEDIAWIKI is defined
if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );
/**
 * A special page extension to offer an PJIRC java-applet to visitors
 *
 * @ingroup Extensions
 *
 * @author Jan M. Simons <jamasi at piratenpartei.de>
 * @author Jack Phoenix <jack@shoutwiki.com>
 * @copyright Copyright © 2007, Jan M. Simons
 * @copyright Copyright © 2008 Jack Phoenix
 * inspired by http://www.mediawiki.org/wiki/Extension:IRC_Chat from Quentin Sheets
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$wgExtensionCredits['specialpage'][] = array(
    'name' => 'PJIRC',
    'author' => array('Jan M. Simons', 'Jack Phoenix'),
    'version' => '0.9.3',
    'description' => 'Allows users to engage in an IRC chat, using PJIRC through the MediaWiki interface.',
    'url' => 'http://www.mediawiki.org/wiki/Extension:PJIRC',
);
$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['IRC'] = $dir .'SpecialIRC.i18n.php';
$wgAutoloadClasses['IRC'] = $dir .'/SpecialIRC_body.php';
$wgSpecialPages['IRC'] = 'IRC';