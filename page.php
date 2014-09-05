<?php 
get_header();
 ?>
		<div id="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="text">
				<?php the_content(); ?>
			</div>
			<?php endwhile; endif;?>
		</div> <!-- end of main -->
<?php get_footer(); ?>