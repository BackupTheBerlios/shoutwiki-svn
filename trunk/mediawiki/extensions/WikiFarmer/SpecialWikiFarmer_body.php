<?php

if ( !defined( 'MEDIAWIKI' ) ) {
	echo "WikiFarmer extension\n";
	exit( 1 );
}

require_once( "DatabaseFunctions.php" );

class WikiFarmerPage extends SpecialPage {
	function __construct() {
		parent::__construct( 'WikiFarmer', 'wikifarmer' );
		wfLoadExtensionMessages( 'WikiFarmer' );
	}

	function execute( $subpage ) {
		global $wgUser, $wgOut, $wgRequest;

		if ( !$wgUser->isAllowed( 'wikifarmer' ) ) {
			$this->displayRestrictionError();
			return;
		}

		$this->setHeaders();

		$f = new WikiFarmerForm( $wgRequest );
		if ( $f->mSubmit ) {
			$f->doSubmit();
        } else {
            $s = explode( '/', $subpage );
            $mode = $s[0];
            unset( $s[0] );
			$f->showForm( $mode, implode( '/', $s ) );
		}
	}
}

class WikiFarmerForm {
    var $mSubmit;

    function WikiFarmerForm( &$request ) {
        $this->mSubmit = $request->wasPosted();
    }

	function showForm( $mode='', $extra='' ) {
        global $wgOut, $wgUser, $wgLang;

		$wgOut->setPagetitle( wfMsg( 'wikifarmer-title' ) );
        $wgOut->addWikiText( wfMsg( 'wikifarmer-text' ) );
        $wgOut->addHTML( "<hr/>\n" );

        if( $mode=='wikis' ) {
            $this->showFormWikis( );
        } elseif ( $mode=='ext' || $mode=='extensions' ) {
            $this->showFormExtensions( );
        } elseif ( $mode=='conf' ) {
            $this->showFormConf( $extra );
        } elseif ( $mode=='' ) {
            #Just nothing
        } else {
            $this->showError( wfMsg( 'wikifarmer-unknown-title' ), wfMsg( 'wikifarmer-unknown-text', $mode ) );
        }
    }

    function showError( $subtitle='', $error='' ) {
        global $wgOut;
        $wgOut->setSubtitle( $subtitle );
        $wgOut->addHTML( "<p class='error'>{$error}</p>\n" );
    }

    function showFormWikis( ) {
        global $wgOut, $wgDBerrorLog;
        $wgOut->setSubtitle( wfMsg( 'wikifarmer-wikis-title' ) );
        $wgOut->addWikiText( wfMsg( 'wikifarmer-wikis-text' ) );

        $db = $this->getFarmConn();
        $wgOut->addHTML( $db->isOpen() ? "1" : "0" );
        $wgOut->addHTML( $wgDBerrorLog );
        $db->query( 'SELECT * FROM farmer_wiki' );
        $db->close();
    }

    function showFormExtensions( ) {
        global $wgOut;
        $wgOut->setSubtitle( wfMsg( 'wikifarmer-ext-title' ) );
        $wgOut->addWikiText( wfMsg( 'wikifarmer-ext-text' ) );
    }

    function showFormConf( $wiki='' ) {
        global $wgOut;
        $wgOut->setSubtitle( wfMsg( 'wikifarmer-conf-title' ) );
        $wgOut->addWikiText( wfMsg( 'wikifarmer-conf-text' ) );
    }

    function doSubmit() {
    }

    function getFarmConn() {
        return Database::newFromParams(
            $wgWikiFarmerHost,
            $wgWikiFarmerUser,
            $wgWikiFarmerPass,
            $wgWikiFarmerDB);
    }
}
