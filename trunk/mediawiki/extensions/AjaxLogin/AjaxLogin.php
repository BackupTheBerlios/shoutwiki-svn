<?php
/* $Id: $ */

if (!defined('MEDIAWIKI'))
	exit;

$wgExtensionCredits['other'][] = array(
	'name' => 'AjaxLogin',
	'version' => preg_replace('/^.* (\d\d\d\d-\d\d-\d\d) .*$/', '\1', '$LastChangedDate: $'), #just the date of the last change
	'description' => 'Login/logout using AJAX instead of Special: pages',
	#'descriptionmsg' => 'ajaxlogin-desc',
	'author' => 'Misza',
	'url' => 'http://www.mediawiki.org/wiki/Extension:AjaxLogin',
);

$dir = dirname(__FILE__) . '/';
#$wgExtensionMessagesFiles['AjaxLogin'] = $dir . 'AjaxLogin.i18n.php';
$wgAutoloadClasses['AjaxLogin'] = $dir . 'AjaxLogin.body.php';

$wgAjaxExportList[] = 'AjaxLogin::getLoginForm';
$wgAjaxExportList[] = 'AjaxLogin::processLoginRequest';
$wgAjaxExportList[] = 'AjaxLogin::getLogoutInProgressMessage';
$wgAjaxExportList[] = 'AjaxLogin::processLogoutRequest';

$wgHooks['BeforePageDisplay'][] = 'AjaxLogin::injectScripts';
