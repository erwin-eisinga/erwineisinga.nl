<?php
/**
 * The template for displaying all pages
 *
 * @package Erwin Eisinga
 */

get_header();

?>

<section class="section">
	<div class="container">
		<?php while ( have_posts() ) : ?>

			<?php the_post(); ?>

			<h1 class="title">
				<?php the_title(); ?>
			</h1>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

		<?php endwhile; ?>
	</div>
</section>

<?php

get_footer();
