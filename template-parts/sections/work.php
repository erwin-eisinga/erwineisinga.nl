<?php
/**
 * Section: work
 *
 * @package Erwin Eisinga
 */

$work_title    = get_field( 'section_work_title' );
$work_subtitle = get_field( 'section_work_subtitle' );
$work_items    = get_field( 'section_work_items' );

$query_args = array(
	'post_type'      => 'portfolio',
	'posts_per_page' => -1,
	'no_found_rows'  => true,
);

if ( ! empty( $work_items ) ) {
	$query_args['post__in'] = $work_items;
	$query_args['orderby']  = 'post__in';
}

$query = new WP_Query( $query_args );

if ( ! $query->have_posts() ) {
	return;
}

?>

<section id="portfolio" class="section section-work">
	<div class="container">
		<?php if ( ! empty( $work_title ) ) : ?>

			<h2 class="title">
				<?php echo esc_html( $work_title ); ?>
			</h2>

		<?php endif; ?>

		<?php if ( ! empty( $work_subtitle ) ) : ?>

			<p class="subtitle">
				<?php echo esc_html( $work_subtitle ); ?>
			</p>

		<?php endif; ?>

		<div class="work">
			<div class="swiper">
				<div class="swiper-wrapper">
					<?php

					while ( $query->have_posts() ) :
						$query->the_post();

						$work_link = get_field( '_portfolio_link' );

						if ( ! empty( $work_link ) ) :

							?>

							<div class="swiper-slide">
								<a href="<?php echo esc_attr( $work_link['url'] ); ?>" target="_blank" class="work">
									<?php if ( has_post_thumbnail() ) : ?>

										<div class="work__visual">
											<figure>
												<?php the_post_thumbnail( 'large' ); ?>
											</figure>

											<span class="icon">
												<?php echo file_get_contents( get_template_directory() . '/assets/svgs/icon-arrow.svg' ); ?>
											</span>
										</div>

									<?php endif; ?>

									<div class="work__text">
										<h3 class="title title--tiny">
											<?php the_title(); ?>
										</h3>

										<p>
											<?php echo esc_html( $work_link['title'] ); ?>
										</p>
									</div>
								</a>
							</div>

						<?php endif; ?>

					<?php endwhile; ?>

					<?php wp_reset_postdata(); ?>
				</div>

				<div class="swiper-controls">
					<div class="swiper-indicator">
						<div class="swiper-pagination"></div>
					</div>

					<div class="swiper-navigation">
						<div class="swiper-button swiper-button-prev swiper-button-disabled icon">
							<?php echo file_get_contents( get_template_directory() . '/assets/svgs/icon-arrow.svg' ); ?>
						</div>

						<div class="swiper-button swiper-button-next icon">
							<?php echo file_get_contents( get_template_directory() . '/assets/svgs/icon-arrow.svg' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
