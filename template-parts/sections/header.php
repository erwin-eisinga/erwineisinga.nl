<?php
/**
 * Section: header
 *
 * @package Erwin Eisinga
 */

$header_title       = get_field( 'section_header_title' );
$header_subtitle    = get_field( 'section_header_subtitle' );
$header_positions   = get_field( 'section_header_positions' );
$header_link        = get_field( 'section_header_link' );
$header_link_second = get_field( 'section_header_link_second' );
$header_repository  = get_field( 'global_general_repository', 'option' );

?>

<section class="section section-header">
	<div class="container">
		<div class="header__wrapper">
			<div class="header__holder">
				<?php if ( ! empty( $header_title ) ) : ?>

					<h1 class="title title--large">
						<?php echo esc_html( $header_title ); ?>
					</h1>

					<?php

				endif;

				if ( ! empty( $header_subtitle ) && ! empty( $header_positions ) ) :
					$subtitle_partials = explode( '{{positions}}', $header_subtitle, 2 );

					if ( ! empty( $subtitle_partials ) ) :

						?>

						<h2 class="title title--large">
							<?php

							if ( isset( $subtitle_partials[0] ) ) {
								echo esc_html( $subtitle_partials[0] );
							}

							?>

							<div class="header__animation">
								<div class="animation__wrapper">
									<?php

									$i                = 0;
									$header_positions = explode( ', ', $header_positions );

									foreach ( $header_positions as $position ) :
										$i++;

										$position_class = 'hidden';

										if ( 1 === $i ) {
											$position_class = 'visible';
										}

										?>

										<span class="<?php echo esc_attr( $position_class ); ?>">
											<?php echo esc_html( $position ); ?>
										</span>

									<?php endforeach; ?>
								</div>
							</div>

							<?php

							if ( isset( $subtitle_partials[1] ) ) {
								echo esc_html( $subtitle_partials[1] );
							}

							?>
						</h2>

					<?php endif; ?>

				<?php endif; ?>

				<div class="header__links">
					<?php if ( ! empty( $header_link ) ) : ?>

						<a href="<?php echo esc_attr( $header_link['url'] ); ?>" target="_self" class="button">
							<?php echo esc_html( $header_link['title'] ); ?>

							<span>
								<?php echo file_get_contents( get_template_directory() . '/assets/svgs/icon-arrow.svg' ); ?>
							</span>
						</a>

					<?php endif; ?>

					<?php if ( ! empty( $header_link_second ) ) : ?>

						<a href="<?php echo esc_attr( $header_link_second['url'] ); ?>" target="_self" class="link">
							<?php echo esc_html( $header_link_second['title'] ); ?>
						</a>

					<?php endif; ?>
				</div>
			</div>
		</div>

		<?php if ( ! empty( $header_repository ) ) : ?>

			<div class="header__actions">
				<a href="<?php echo esc_url( $header_repository ); ?>" target="_blank" class="badge">
					<?php esc_html_e( 'View my code', 'erwineisinga' ); ?>
				</a>
			</div>

		<?php endif; ?>
	</div>
</section>
