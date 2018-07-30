<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer mt-xs-2 col-xs-12" role="contentinfo">
			<div class="footer-item col-xs-12 col-sm-4">
				<h2>Contact</h2>
				<p>hello@likethegirls.com</p>
			</div>
			<div class="footer-item col-xs-12 col-sm-4">
				<h2>Social</h2>
				<a href="https://www.facebook.com/likethegirls">Facebook</a>
				<a href="https://www.instagram.com/likethegirls_">Instagram</a>
			</div>	
			<div class="footer-item col-xs-12 col-sm-4">
				<h2>About</h2>
				<p>Celebrating excellence and ideas from across disciplines and expertise, especially in those often overlooked.</p>
			</div>
			<div class="footer-item">
				<?php if ( has_nav_menu( 'Navigation' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>',
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif; ?>
			</div>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<?php
				if ( function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
				}
				?>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
