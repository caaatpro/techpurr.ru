<?php
/**
 * Creates an array of Font Awesome Icons v3.0
 *
 * Learn more: http://fortawesome.github.io/Font-Awesome/
 *
 * @package WordPress
 * @subpackage GoodInc
 * @since 1.0
 */

if ( ! function_exists( 'wpex_get_awesome_icons' ) ) { 
	function wpex_get_awesome_icons() {
			$awesome_icons = array('Select','beaker','bell','bolt','bookmark-empty','briefcase','bullhorn','caret-down','caret-left','caret-right','caret-up','certificate','check-empty','circle-arrow-down','circle-arrow-left','circle-arrow-right','circle-arrow-up','cloud','columns','comment-alt','comments-alt','copy','credit-card','cut','dashboard','envelope-alt','eye-open','facebook','filter','fullscreen','github','globe','google-plus-sign','group','hand-down','hand-left','hand-right','hand-up','hdd','legal','link','linkedin','list-ol','list-ul','magic','money','paper-clip','paste','phone-sign','phone','pinterest-sign','pinterest','reorder','rss','save','sign-blank','sitemap','sort-down','sort-up','sort','strikethough','table','tasks','truck','twitter','umbrella','underline','undo','unlock','user-md','wrench','music','search','envelope','heart', 'star','user','film','ok','remove','zoom-in','zoom-out','off','signal','trash', 'home','file', 'file-alt', 'time', 'download','inbox', 'repeat','refresh','flag','headphones','qrcode','tag','tags','book','bookmark','print','camera','list','facetime-video','picture','pencil','map-marker', 'tint','edit', 'share','check','move','play','plus-sign', 'minus-sign','ok-sign','question-sign','info-sign', 'screenshot','remove-circle','ok-circle','ban-circle','plus','minus','asterisk','exclamation-sign','gift','leaf','fire','warning-sign','plane','calendar','random','comment','magnet','shopping-cart','folder-open','folder-close','bar-chart', 'cog','cogs','external-link','pushpin','key','thumbs-up','comments', 'comments-alt','trophy','upload-alt','upload','fire','cloud-download','cloud-upload','lightbulb','exchange','belt-alt','beer','coffee','food','fighter-jet','user-md',' stethoscope','suitcase','building','hospital','ambulance','medkit','h-sign','plus-sign-alt','spinner','angle-left','angle-right','angle-up','angle-down','cicle-blank','circle','desktop','laptop','tablet','mobile-phone','quote-left','quote-right','reply','github-alt','close-alt','open-alt');
		$awesome_icons = array_combine( $awesome_icons, $awesome_icons );
		return apply_filters( 'wpex_get_awesome_icons', $awesome_icons );
	}
}


// This array is used for meta options
if ( ! function_exists( 'wpex_get_meta_awesome_icons' ) ) { 
	function wpex_get_meta_awesome_icons() {
		$awesome_icons = wpex_get_awesome_icons();
		$return_array = array();
		foreach ( $awesome_icons as $awesome_icon ) :
			$return_array[] = array( 'name' => $awesome_icon, 'value' => $awesome_icon );
		endforeach;		
		return $return_array;	
	}
}