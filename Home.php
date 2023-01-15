<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<section id="hero">
	<?php
		query_posts('post_type=post&category_name=featured&post_status=publish&posts_per_page=1&order=ASC' . get_query_var('post')
			);
			if(have_posts()) :
			while (have_posts()) : the_post();
				get_template_part('template-parts/content/layout');
			endwhile;
			endif;
			wp_reset_query();
			?>
</section>
<section id="features_post">
<?php
				get_template_part('template-parts/content/grid-layout');
			?>
</section>

<section id="features_post">
			<div class="container">
			<div class="section_title">
				<h2 class="title">Trending Now</h2>
			</div>
			</div>
<?php
				get_template_part('template-parts/content/grid-layout-two');
			?>
</section>


<section id="latest_post csk_m">
<div class="container">
	<div class="section_title">
		<h2 class="title">Latest Article</h2>
	</div>
	
			<?php
						get_template_part('template-parts/content/latest');
					?>
			</div>
	
</section>


<?php

get_footer();




