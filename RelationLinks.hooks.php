<?php
class RelationLinksHooks { 
	function addRelationLinks( &$out, &$sk ) {
		$rlMainpage = Title::newFromText( wfMessage( 'Mainpage' )->text() );
		$out->addLink( array(
		  'rel' => 'start',
		  'type' => 'text/html',
		  'title' => wfMessage( 'Mainpage' )->text(),
		  'href' => $rlMainpage->getLocalURL(),
		) );
		$rlHelppage = Title::newFromText( wfMessage( 'Helppage' )->text() );
		$out->addLink( array(
		  'rel' => 'help',
		  'type' => 'text/html',
		  'title' => wfMessage( 'Helppage' )->text(),
		  'href' => $rlHelppage->getLocalURL(),
		) );
		$rlAllpages = Title::newFromText( wfMessage( 'Allpages' )->text() );
		$out->addLink( array(
		  'rel' => 'index',
		  'type' => 'text/html',
		  'title' => wfMessage( 'Allpages' )->text(),
		  'href' => $rlAllpages->getLocalURL(),
		) );
		$rlSearch = Title::newFromText( wfMessage( 'Search' )->text() );
		$out->addLink( array(
		  'rel' => 'search',
		  'type' => 'text/html',
		  'title' => wfMessage( 'Search' )->text(),
		  'href' => $rlSearch->getLocalURL(),
		) );
		$rlNamespace = $out->getTitle()->getNsText();
		if ( strlen($rlNamespace) > 1 ) {
			$rlNamespace = $rlNamespace . ':';
		}
		$rlSupPage = Title::newFromText( $rlNamespace.$out->getTitle()->getBaseText() );
		$out->addLink( array(
		  'rel' => 'up',
		  'type' => 'text/html',
		  'title' => $rlNamespace . $out->getTitle()->getBaseText(),
		  'href' => $rlSupPage->getLocalURL(),
		) );
		return true;
	}
}
