<?php
/**
 * RT Starter Theme functions.
 *
 * Intentionally light: theme supports only. No Customizer, no enqueues —
 * design tokens live in theme.json and functionality lives in the RT Blocks plugin.
 *
 * @package rt-starter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'rt_starter_setup' ) ) {
	/**
	 * Register theme supports.
	 *
	 * @return void
	 */
	function rt_starter_setup() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
}
add_action( 'after_setup_theme', 'rt_starter_setup' );
