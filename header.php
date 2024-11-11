<?php
/**
 * The Header for our theme
 *
 * @package Erwin Eisinga
 */

?>

<!doctype html>

<html <?php language_attributes(); ?>>
	<head>
		<?php get_template_part( 'template-parts/head' ); ?>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
