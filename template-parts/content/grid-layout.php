<div class="container">
	<div class="grid_row layout_one">
<?php
		query_posts('post_type=post&category_name=featured&post_status=publish&posts_per_page=3&order=ASC&offset=1' . get_query_var('post'));
		$counter = 0; 
		if(have_posts()) :
		while (have_posts()) : the_post();
		$counter++;
?>
		<div class="grid <?php echo 'item_' . $counter ?>">
			<div class="layout" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
					<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="home_hero">
								<div class="post_meta">
									<?php the_category('|'); ?>
								</div>
								<div class="post_title">
									<h2> <a href="<?php the_permalink();?>"><? the_title();?></a></h2>
								</div>
								<div class="post_action">
									<span> 1 min Read </span> | 
									<span><a href="<?php the_permalink();?>">Read More</a></span>
								</div>
							</div>
						</div>
					</div>
					</div>
			</div>
		</div>
<?php
endwhile;
endif;
wp_reset_query();
?>
</div>
</div>