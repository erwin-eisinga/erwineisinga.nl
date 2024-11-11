<?php
/**
 * Front page
 *
 * @package Erwin Eisinga
 */

get_header();

?>

<main class="site-main">
	<?php get_template_part( 'template-parts/sections/header' ); ?>

	<?php get_template_part( 'template-parts/sections/work' ); ?>

	<?php get_template_part( 'template-parts/sections/experiences' ); ?>

	<?php get_template_part( 'template-parts/sections/contact' ); ?>
</main>

<?php

get_footer();
