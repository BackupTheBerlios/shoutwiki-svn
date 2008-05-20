<?php
//Sanity check - check for MediaWiki environment...
if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );
wfLoadExtensionMessages( 'LookupContribs' );

class LookupContribsPage extends SpecialPage {
	function LookupContribsPage() {
		SpecialPage::SpecialPage( 'LookupContribs', 'lookupcontribs' );
	}

	function execute( $par ) {
		global $wgRequest, $wgOut, $wgTitle, $wgLocalDatabases, $wgUser;
		global $wgConf, $wgCanonicalNamespaceNames, $wgLang;
		$this->setHeaders();

		# Check permissions
		if( !$wgUser->isAllowed( 'lookupcontribs' ) ) {
			$wgOut->permissionRequired( 'lookupcontribs' );
			return;
		}

		$user = $wgRequest->getText( 'user' );
#		$userName =  $user->getName();

		# Show form
		$self = Title::makeTitle( NS_SPECIAL, 'LookupContribs' );
		$form = '<span>' . wfMsgHtml( 'lookupcontribs-summary' ) . '</span>';
		$form .= wfOpenElement( 'form', array( 'method' => 'get', 'action' => $self->getLocalUrl() ) ); //original was method=post
		$form .= '<table><tr><td align="right">' . wfMsgHtml( 'lookupcontribs-user' ) . '</td>';
		$form .= '<td>' . wfInput( 'user', 50, $user ) . '</td></tr>';
		$form .= '<tr><td></td><td>' . wfSubmitButton( wfMsg( 'go' ) ) . '</td></tr></table></form>';
		$wgOut->addHtml( $form );

		if ( $user ) {
			$dbr = wfGetDB( DB_SLAVE );
			$s  = '';

			foreach ( $wgLocalDatabases as $db ) {
				$sql = "SELECT rc_namespace,rc_title,rc_timestamp,rc_user_text,rc_last_oldid FROM $db.recentchanges WHERE rc_user_text='" . $dbr->strencode( $user ) .
				  "' AND rc_this_oldid=0"; //TODO: use page & revision tables, alá Special:Contributions
				$res = $dbr->query( $sql, "findspam.php" ); //this seems to be a wikimedia-specific hack that needs a total rewrite
				$arr = explode('.', strtolower($_SERVER['SERVER_NAME']));
				$subdomain = $arr[0];
				//list( $site, $lang ) = $wgConf->siteFromDB( $db );
				//if ( $lang == 'en' ) {
				//	$baseUrl = "http://internal.jackphoenix.com"; //ugly!
				//} else {
				$baseUrl = "http://$subdomain.jackphoenix.com";
				//}

				if ( $dbr->numRows( $res ) ) {
					$s .= "\n$db\n";
					while ( $row = $dbr->fetchObject( $res ) ) {

						if ( $row->rc_namespace == 0 ){
							$title = $row->rc_title;
						} else {
							$title = $wgCanonicalNamespaceNames[$row->rc_namespace] . ':' .$row->rc_title;
						}
						$encTitle = urlencode( $title );
						$url = "$baseUrl/wiki/$encTitle";
						$user = urlencode( $row->rc_user_text );
						$rollbackText = wfMsg( 'rollback' );
						$diffText = wfMsg( 'diff' );
						$rollbackUrl = "$baseUrl/w/wiki.phtml?title=$encTitle&action=rollback&from=$user";
						$diffUrl = "$baseUrl/w/wiki.phtml?title=$encTitle&diff=0&oldid=0";
						if ( $row->rc_last_oldid ) {
							$lastLink = "[$baseUrl/w/wiki.phtml?title=$encTitle&oldid={$row->rc_last_oldid}&action=edit last]";
						}

						$date = $wgLang->timeanddate( $row->rc_timestamp );
						$s .= "* $date [$url $title] ([$rollbackUrl $rollbackText] | [$diffUrl $diffText])\n";
						$s .= "* $date [$url $title] ($lastLink | [$diffUrl $diffText])\n";
					}
				}
			}
			if ( $s == '' ) {
				$s = wfMsg('lookupcontribs-notextfound');
			}
			/* TODO: fixme 
			if (!$userName->exists) {
			wfMsg('nosuchusershort');
			}*/
			$wgOut->addWikiText( $s."<br />" );
		}
	}
}