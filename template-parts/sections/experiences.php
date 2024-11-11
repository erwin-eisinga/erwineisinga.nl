<?php
/**
 * Section: experience
 *
 * @package Erwin Eisinga
 */

$experiences_title = get_field( 'section_experiences_title' );

$query_args = array(
	'post_type'      => 'experience',
	'posts_per_page' => -1,
	'no_found_rows'  => true,
);

$query = new WP_Query( $query_args );

if ( ! $query->have_posts() ) {
	return;
}

?>

<section id="experience" class="section section-experience">
	<div class="container">
		<?php if ( ! empty( $experiences_title ) ) : ?>

			<h2 class="title title--small">
				<?php echo esc_html( $experiences_title ); ?>
			</h2>

		<?php endif; ?>

		<div class="experiences">
			<?php

			while ( $query->have_posts() ) :
				$query->the_post();

				$experience_duration = get_field( 'experience_duration' );
				$experience_work     = get_field( 'experience_work' );
				$experience_logo     = get_field( 'experience_logo' );

				?>

				<div class="experience">
					<div class="experience__header">
						<h3 class="title title--tiny">
							<?php the_title(); ?>
						</h3>

						<?php if ( ! empty( $experience_duration ) ) : ?>

							<span>
								<?php echo esc_html( $experience_duration ); ?>
							</span>

						<?php endif; ?>
					</div>

					<div class="experience__body">
						<?php if ( ! empty( $experience_logo ) ) : ?>

							<figure>
								<?php echo wp_get_attachment_image( $experience_logo, 'full' ); ?>
							</figure>

						<?php endif; ?>

						<?php if ( ! empty( $experience_work ) ) : ?>

							<p>
								<?php echo esc_html( $experience_work ); ?>
							</p>

						<?php endif; ?>
					</div>
				</div>

			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
