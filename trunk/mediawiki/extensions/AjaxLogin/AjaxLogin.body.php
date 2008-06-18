<?php

if (!defined('MEDIAWIKI')) {
	exit;
}

require_once( "AjaxResponse.php" );

class AjaxLogin {
    function injectScripts( $out ) {
        global $wgScriptPath;
        $out->addScript('<script type="text/javascript" src="' . $wgScriptPath . '/extensions/AjaxLogin/AjaxLogin.js"></script>');
        $out->addStyle('../..' . $wgScriptPath . '/extensions/AjaxLogin/AjaxLogin.css');
        return true;
    }

    function getLoginForm( ) {
        global $wgScriptPath;
        return new AjaxResponse( "
<div class='pBody'>
<form id='ajaxloginForm' onsubmit='return AjaxLogin_submit_login()'>
" . wfMsg( 'username' ) . "<br/>
<input id='ajaxloginUsername' type='text' /><br/>
" . wfMsg( 'yourpassword' ) . "<br/>
<input id='ajaxloginPassword' type='password' /><br/>
<input type='submit' value=\"" . wfMsg( 'login' ) . "\" />
</form>
<a href='" . $wgScriptPath . "/index.php?title=Special:Userlogin&type=signup'><b>" . wfMsg( 'nologinlink' ) . "</b></a>
</div>
" );
    }

    function processLoginRequest( $user, $pass ) {
        global $wgUser, $wgRequest;
        $userlogin = new LoginForm( $wgRequest );
        $userlogin->mName = $user;
        $userlogin->mPassword = $pass;

        //$auth = $userlogin->authenticateUserData();
        //$r= new AjaxResponse($auth);
        //return $r;

        $msg = '';
		switch ($userlogin->authenticateUserData()) {
			case LoginForm::SUCCESS:
                $wgUser->setCookies();
                $msg = wfMsgWikiHtml( 'loginsuccess', $wgUser->getName() );
                break;
            case LoginForm::NO_NAME:
            case LoginForm::ILLEGAL:
                $msg = wfMsgWikiHtml( 'noname' );
                break;
            case LoginForm::WRONG_PLUGIN_PASS:
                $msg = wfMsgWikiHtml( 'wrongpassword' );
                break;
            case LoginForm::NOT_EXISTS:
                $msg = wfMsgWikiHtml( 'nosuchuser', htmlspecialchars( $user ) );
                break;
            case LoginForm::WRONG_PASS:
                $msg = wfMsgWikiHtml( 'wrongpassword' );
                break;
            case LoginForm::EMPTY_PASS:
                $msg = wfMsgWikiHtml( 'wrongpasswordempty' );
                break;
            case LoginForm::RESET_PASS:
                $msg = wfMsgWikiHtml( 'resetpass_announce' );
                break;
            default:
                wfDebugDieBacktrace( "Unhandled case value" );
        }

        return new AjaxResponse('<div class="pBody">' . $msg . '</div>');
    }

    function getLogoutInProgressMessage( ) {
        global $wgScriptPath;
		wfLoadExtensionMessages( 'AjaxLogin' );
        return new AjaxResponse( '<img src="' . $wgScriptPath . '/extensions/AjaxLogin/loading.gif" /> ' . wfMsg( 'ajaxlogin-loggingout' ) );
    }

    function processLogoutRequest( ) {
        global $wgUser;
        $wgUser->logout();
		wfLoadExtensionMessages( 'AjaxLogin' );
        return new AjaxResponse( wfMsg( 'ajaxlogin-nowloggedout' ) );
    }
}
