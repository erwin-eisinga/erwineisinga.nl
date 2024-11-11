<?php
/**
 * Functions
 *
 * @package Erwin Eisinga
 */

/**
 * Perform basic setup and registrations.
 */
function erwineisinga_theme_setup() {
	/**
	 * Load text domain
	 */
	load_theme_textdomain( 'erwineisinga', get_template_directory() . '/languages' );

	/**
	 * Add support for title tag
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Add support for post thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Switch default core markup to output valid HTML5
	 */
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

add_action( 'after_setup_theme', 'erwineisinga_theme_setup' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 750;
}

/**
 * Enqueue scripts and styles
 */
function erwineisinga_enqueue_scripts() {
	wp_enqueue_style(
		'style',
		get_theme_file_uri( '/build/style-index.css' ),
		false,
		'1.0.0',
	);

	wp_enqueue_script(
		'script',
		get_theme_file_uri( '/build/index.js' ),
		false,
		'1.0.0',
		true,
	);

	wp_enqueue_style(
		'erwineisinga-google-fonts',
		'https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap',
		false,
		'1.0.0',
	);
}

add_action( 'wp_enqueue_scripts', 'erwineisinga_enqueue_scripts' );

/**
 * Template functions
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Post types
 */
require get_template_directory() . '/includes/post-types.php';
