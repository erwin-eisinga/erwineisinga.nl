<?php
/**
 * Section: contact
 *
 * @package Erwin Eisinga
 */

$contact_title    = get_field( 'section_contact_title' );
$contact_subtitle = get_field( 'section_contact_subtitle' );
$contact_image    = get_field( 'section_contact_image' );
$contact_email    = get_field( 'global_general_email', 'option' );

?>

<section id="contact" class="section section-contact">
	<div class="container">
		<div class="contact__wrapper">
			<?php if ( ! empty( $contact_image ) ) : ?>

				<figure>
					<?php echo wp_get_attachment_image( $contact_image, 'large' ); ?>
				</figure>

			<?php endif; ?>

			<div class="contact__text">
				<?php echo file_get_contents( get_template_directory() . '/assets/svgs/icon-hand.svg' ); ?>

				<?php if ( ! empty( $contact_title ) ) : ?>

					<p class="title title--small">
						<?php echo esc_html( $contact_title ); ?>
					</p>

				<?php endif; ?>

				<?php if ( ! empty( $contact_subtitle ) ) : ?>

				<span>
					<?php echo wp_kses_post( $contact_subtitle ); ?>
				</span>

				<?php endif; ?>

				<?php if ( ! empty( $contact_email ) ) : ?>

					<a href="mailto:<?php echo esc_attr( $contact_email ); ?>" class="mail" target="_blank">
						<span class="icon icon--small icon--at">
							<?php echo file_get_contents( get_template_directory() . '/assets/svgs/icon-at.svg' ); ?>
						</span>

						<?php echo esc_html( $contact_email ); ?>
					</a>

				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
