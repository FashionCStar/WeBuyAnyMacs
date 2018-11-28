<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Buzz_Store
 */

$post_sidebar = esc_attr( get_post_meta($post->ID, 'buzzstore_page_layouts', true) );

if(!$post_sidebar){
	$post_sidebar = 'rightsidebar';
}

if ( $post_sidebar ==  'nosidebar' ) {
	return;
}


