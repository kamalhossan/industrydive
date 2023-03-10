<?php
/**
 * Displays the site header.
 *
 * @package IndustryDive
 */
$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';
?>

<header id="masthead">
	<!--Site Header -->
<div class="container">
	<div class="row">
		<div class="col-md-4">
				<div class="search-form">
				<?php get_search_form(); ?>

				</div>
		</div>
		<div class="col-md-4">
				<div class="site_brand">
				<?php if ( has_custom_logo() && ! $show_title ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php endif; ?>

				<?php if ( $blog_info ) : ?>
					<?php if ( is_front_page() && ! is_paged() ) : ?>
						<h1 class="<?php echo esc_attr( $header_class ); ?>"><?php echo esc_html( $blog_info ); ?></h1>
					<?php elseif ( is_front_page() && ! is_home() ) : ?>
						<h1 class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></h1>
					<?php else : ?>
						<p class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></p>
					<?php endif; ?>
				<?php endif; ?>

				<?php if ( $description && true === get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
					<p class="site-description">
						<?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput ?>
					</p>
				<?php endif; ?>
				</div>
		</div>
		<div class="col-md-4">
			<div class="pop-up">
				<a class="newsletter_button" href=""><i class="fa-solid fa-envelope"></i> Subscribe</a>
			</div>
		</div>
	</div>
</div>
<div class="header_menu">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
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
	</div>
</div>
</header><!-- #masthead -->
