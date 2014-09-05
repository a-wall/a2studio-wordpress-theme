<?php 
get_header(); 
?>
		<div id="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="entry">
					<h3><?php the_date(); ?>: <?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
		</div> <!-- end of main -->
<?php get_footer(); ?>