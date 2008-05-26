<?php
/**
 * AjaxLogin extension - allows users to log in or out using AJAX
 *
 * @author Misza <misza@shoutwiki.com>
 * @copyright Copyright © Misza -- http://www.misza.net/
 */
if (!defined('MEDIAWIKI'))
	exit;

$wgExtensionCredits['other'][] = array(
	'name' => 'AjaxLogin',
	'svn-date' => '$LastChangedDate$',
	'svn-revision' => '$LastChangedRevision$',
	'description' => 'Login/logout using AJAX instead of Special: pages',
	#'descriptionmsg' => 'ajaxlogin-desc',
	'author' => 'Misza',
	'url' => 'http://www.mediawiki.org/wiki/Extension:AjaxLogin',
);

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['AjaxLogin'] = $dir . 'AjaxLogin.i18n.php';
$wgAutoloadClasses['AjaxLogin'] = $dir . 'AjaxLogin.body.php';

$wgAjaxExportList[] = 'AjaxLogin::getLoginForm';
$wgAjaxExportList[] = 'AjaxLogin::processLoginRequest';
$wgAjaxExportList[] = 'AjaxLogin::getLogoutInProgressMessage';
$wgAjaxExportList[] = 'AjaxLogin::processLogoutRequest';

$wgHooks['BeforePageDisplay'][] = 'AjaxLogin::injectScripts';