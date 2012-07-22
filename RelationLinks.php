<?php
/** 
* @addtogroup Extensions 
*/
// Check environment
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This is an extension to the MediaWiki package and cannot be run standalone.\n" );
	die( -1 );
}

/* Configuration */

// Credits
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'RelationLinks',
	'author' => '[http://www.dasch-tour.de DaSch]',
	'descriptionmsg' => 'relationlinks-desc',
	'version' =>  '0.4.0',
	'url' => 'https://www.mediawiki.org/wiki/Extension:RelationLinks',
);

$dir = dirname( __FILE__ ) . '/';

// Internationalization
$wgExtensionMessagesFiles['RelationLinks'] = $dir . 'RelationLinks.i18n.php';

$wgAutoloadClasses['RelationLinksHooks'] = $dir . 'RelationLinks.hooks.php';

$wgHooks['BeforePageDisplay'][] = 'RelationLinks::addRelationLinks';

