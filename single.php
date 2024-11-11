<?php
/**
 * The template for displaying all single posts
 *
 * @package Erwin Eisinga
 */

get_header();

?>

<section class="section">
	<div class="container">
		<?php while ( have_posts() ) : ?>

			<?php the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class="title">
					<?php the_title(); ?>
				</h1>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>

		<?php endwhile; ?>
	</div>
</section>

<?php

get_footer();
