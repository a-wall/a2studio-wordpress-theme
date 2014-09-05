<?php 
get_header(); 
?>
		<div id="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="entry">
					<div class="post-header">
					<span class="post-title"><?php the_title(); ?></span><br/>
					<span class="post-date"><?php the_date(); ?></span>
					</div>
					<div class="post-content">
					<?php the_content(); ?>
					</div>
				</div>
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
		</div> <!-- end of main -->
		<div class="clear"></div>			
<?php get_footer(); ?>