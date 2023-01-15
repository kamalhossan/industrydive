
<div class="grid_column">
<div class="layout" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
				<div class="overlay">
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
