<?php

if ( !defined( 'MEDIAWIKI' ) ) {
	echo "Loldongs extension\n";
	exit( 1 );
}

class MakeLoldongsPage extends SpecialPage {
	function __construct() {
		parent::__construct( 'Loldongs', 'loldongs' );
		wfLoadExtensionMessages( 'Loldongs' );
	}

	function execute( $subpage ) {
		global $wgUser, $wgOut, $wgRequest;

		if ( $wgUser->isBlocked() ) {
			$wgOut->blockedPage();
			return;
		}
		if ( wfReadOnly() ) {
			$wgOut->readOnlyPage();
			return;
        }
        if ( !$wgUser->isAllowed( 'loldongs' ) ) {
        //if ( !in_array( 'loldongs', $wgUser->getAllGroups() ) ) {
            $this->displayRestrictionError();
			return;
		}

		$this->setHeaders();

    	$f = new LoldongsForm( $wgRequest );
		if ( $f->mSubmit ) {
	    	$f->doSubmit();
		} else {
			$f->showForm( '' );
		}
	}
}

/**
  * @addtogroup SpecialPage
  */
class LoldongsForm {
	var $mTarget, $mAction, $mRights, $mUser, $mSubmit, $mSetBureaucrat;

	function LoldongsForm( &$request ) {
		global $wgUser;

		$this->mAction = $request->getText( 'action' );
		$this->mRights = $request->getVal( 'wpRights' );
		$this->mUser = $request->getText( 'wpMakeLoldongsUser' );
		$this->mSubmit = $request->getBool( 'wpMakeLoldongsSubmit' ) &&
			$request->wasPosted() &&
			$wgUser->matchEditToken( $request->getVal( 'wpEditToken' ) );		
	}

	function showForm( $err = '') {
		global $wgOut, $wgUser, $wgLang;

		$wgOut->setPagetitle( wfMsg( "loldongstitle" ) );
		$wgOut->addWikiText( wfMsg( "loldongstext" ) );

		$titleObj = Title::makeTitle( NS_SPECIAL, "Loldongs" );
		$action = $titleObj->escapeLocalURL( "action=submit" );

		if ( "" != $err ) {
			$wgOut->setSubtitle( wfMsg( "formerror" ) );
			$wgOut->addHTML( "<p class='error'>{$err}</p>\n" );
		}
		$namedesc = wfMsg( "loldongsname" );
		if ( !is_null( $this->mUser ) ) {
			$encUser = htmlspecialchars( $this->mUser );
		} else {
			$encUser = "";
		}

		$wgOut->addHTML( "
			<form id=\"makeloldongs\" method=\"post\" action=\"{$action}\">
			<table border='0'>
			<tr>
				<td align='right'>$namedesc</td>
				<td align='left'>
					<input type='text' size='40' name=\"wpMakeLoldongsUser\" value=\"$encUser\" />
				</td>
			</tr>" 
		);
		
        $mss = wfMsg( "set_loldongs" );

		$token = htmlspecialchars( $wgUser->editToken() );
		$wgOut->addHTML(
			"<tr>
				<td>&nbsp;</td><td align='left'>
					<input type='submit' name=\"wpMakeLoldongsSubmit\" value=\"{$mss}\" />
				</td></tr></table>
				<input type='hidden' name='wpEditToken' value=\"{$token}\" />
			</form>\n" 
		);
	}

	function doSubmit() {
		global $wgOut, $wgUser, $wgLang;
		global $wgDBname, $wgMemc, $wgLocalDatabases, $wgSharedDB;

		$fname = 'LoldongsForm::doSubmit';
		
		$dbw =& wfGetDB( DB_MASTER );
		$user_groups = $dbw->tableName( 'user_groups' );
		$usertable   = $dbw->tableName( 'user' );

		$username = $this->mUser;

		// Clean up username
		$t = Title::newFromText( $username );
		if ( !$t ) {
			$this->showFail();
			return;
		}
		$username = $t->getText();
		
		if ( $username{0} == "#" ) {
			$id = intval( substr( $username, 1 ) );
		} else {
			$id = $dbw->selectField( $usertable, 'user_id', array( 'user_name' => $username ), $fname );
		}
		if ( !$id ) {
			$this->showFail();
			return;
		}

		$sql = "SELECT ug_user,ug_group FROM $user_groups WHERE ug_user=$id FOR UPDATE";
		$res = $dbw->query( $sql, $fname );

		$row = false;
		$oldGroups = array();
		while ( $row = $dbw->fetchObject( $res ) ) {
			$oldGroups[] = $row->ug_group;
		}
		$dbw->freeResult( $res );
        $newGroups = $oldGroups;
		if ( in_array( 'loldongs', $newGroups ) ) {
			$this->showFail('loldongsalready');
			return;
		}
        $newGroups[] = 'loldongs';
        
        $dbw->insert( $user_groups, array( 'ug_user' => $id, 'ug_group' => 'loldongs' ), $fname );

		if ( function_exists( 'wfMemcKey' ) ) {
			$wgMemc->delete( wfMemcKey( 'user', 'id', $id ) );
		} else {
			$wgMemc->delete( "$wgDBname:user:id:$id" );
		}
		
		$log = new LogPage( 'rights' );
		$log->addEntry( 'rights', Title::makeTitle( NS_USER, $username ), '',
			array( $this->makeGroupNameList( $oldGroups ), $this->makeGroupNameList( $newGroups ) ) );
			
		$this->showSuccess();
	}

	function showSuccess() {
		global $wgOut, $wgUser;

        $wgOut->setPagetitle( wfMsg( "loldongstitle" ) );
        $text = wfMsg( "loldongsok", $this->mUser );
		$text .= "\n\n";
		$wgOut->addWikiText( $text );
		$this->showForm();

	}

	function showFail( $msg = 'loldongsfail' ) {
		global $wgOut, $wgUser;

        $wgOut->setPagetitle( wfMsg( "loldongstitle" ) );
		$this->showForm( wfMsg( $msg, $this->mUser ) );
	}

	function makeGroupNameList( $ids ) {
		return implode( ', ', $ids );
	}

}