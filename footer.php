<?php
/**
 * The template for displaying the footer
 *
 * @package Erwin Eisinga
 */

wp_footer();

?>
		<footer class="footer">
			<div class="container">
				<span>
					<?php

					echo esc_html(
						sprintf(
							/* translators: 1: blog name, 2: current year */
							__( '© %1$s %2$s', 'erwineisinga' ),
							get_bloginfo( 'name' ),
							gmdate( 'Y' ),
						)
					);

					?>
				</span>
			</div>
		</footer>
	</body>
</html>
