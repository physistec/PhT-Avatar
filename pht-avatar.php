<?php
/**
 * @package WordPress
 * @subpackage PhT Themes
 */

// Avatar
add_filter( 'avatar_defaults', 'phtavatar' );
 
function phtavatar ($avatar_defaults) {
	
	$myavatar = get_bloginfo('template_directory') . '/images/phtavatar.gif';
	$avatar_defaults[$myavatar] = "PhT";
	return $avatar_defaults;

}
?>