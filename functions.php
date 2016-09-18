<?php

/**
 *
 * @package Working_Papers
 */

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location
	register_nav_menu( 'primary', __( 'Primary Menu', 'working-papers' ) );

	// Html5 search
	add_theme_support( 'html5', array( 'search-form' ) );

	// Content width
	if ( ! isset( $content_width ) ) {
		$content_width = 640;
	}

	// Comments
	function workingpapers_remove_comment_url($arg) {
		$arg['url'] = '';
		return $arg;
	}
	add_filter('comment_form_default_fields', 'workingpapers_remove_comment_url');

	// Set the Attachment Display Settings
	function workingpapers_attachment() {
		update_option( 'image_default_align', 'center' );
		update_option( 'image_default_link_type', 'none' );
		update_option( 'image_default_size', 'large' );
	}
	add_action( 'after_setup_theme', 'workingpapers_attachment' );

	// Clean up the <head>
	function removeHeadLinks() {
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
	}
	add_action( 'init', 'removeHeadLinks' );
	remove_action( 'wp_head', 'wp_generator' );

	// Theme credits
	function workingpapers_credits_hook()
	{
		echo '<p>' . __( 'Proudly powered by ', 'working-papers' ) . '<a href="http://wordpress.org">Wordpress</a>. ' . __( 'Theme: ', 'working-papers' ) .  wp_get_theme();
		echo '.';
	}
	add_action( 'workingpapers_credits', 'workingpapers_credits_hook' );

?>