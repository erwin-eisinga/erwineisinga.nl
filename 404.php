<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Erwin Eisinga
 */

get_header();

?>

<section class="section section-not-found">
	<div class="container">
		<h1 class="title">
			<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'erwineisinga' ); ?>
		</h1>

		<div class="entry-content">
			<p>
				<?php esc_html_e( 'It looks like nothing was found at this location.', 'erwineisinga' ); ?>
			</p>

			<a href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>" target="_self">
				<?php esc_html_e( 'Return to the homepage.', 'erwineisinga' ); ?>
			</a>
		</div>
	</div>
</section>

<?php

get_footer();
