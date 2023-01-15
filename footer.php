<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer">
  <section id="csk_footer">
      <div class="container">
        <div class="row footer_top">
          <div class="col-md-6">
            <div class="footer-left">
            <?php
						if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'industrydive' ); ?>">
								<!-- <div class="menu-button-container">
									<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
										<span class="dropdown-icon open"><?php esc_html_e( 'Menu', 'industrydive' ); ?>
											<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'menu' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
										</span>
										<span class="dropdown-icon close"><?php esc_html_e( 'Close', 'industrydive' ); ?>
											<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
										</span>
									</button><!-- #primary-mobile-menu -->
								<!-- </div><!-- .menu-button-container -->
								<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'primary',
										'menu_class'      => 'menu-wrapper',
										'container_class' => 'primary-menu-container',
										'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
										'fallback_cb'     => false,
									)
								);
								?>
							</nav><!-- #site-navigation -->
							<?php
						endif;
					?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer-right">
              <div class="newsletter">
                <h4>Sign Up for our Newsletter</h4>
                <a class="newsletter_button footer" href="#"><i class="fa-solid fa-envelope"></i>Subscribe</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row footer_bottom">
          <div class="col-md-12">
            <p>Copywright # 2023 All Right Researved</p>
          </div>
        </div>
      </div>
    </section>
	</footer><!-- #colophon -->

</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
