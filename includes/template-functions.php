<?php
/**
 * Template functions
 *
 * @package Erwin Eisinga
 */

/**
 * Add a option page for ACF fields
 */
function erwineisinga_acf_init() {
	if ( function_exists( 'acf_add_options_page' ) ) {
		$option_page = acf_add_options_page(
			array(
				'page_title' => __( 'Site configuratie', 'erwineisinga' ),
				'menu_title' => __( 'Site configuratie', 'erwineisinga' ),
				'menu_slug'  => 'site-configuration',
				'capability' => 'edit_posts',
				'redirect'   => false,
			),
		);
	}
}

add_action( 'acf/init', 'erwineisinga_acf_init' );
