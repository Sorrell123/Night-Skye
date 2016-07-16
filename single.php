<?php get_header(); ?>
<?php get_sidebar(); ?>

	<div id="content">
		<div class="content_item">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile ?>
			<?php else : ?> 
				<h2>ERORR</h2>
				<p>This post does not exist!!!</p> 
			<?php endif ?> 
		</div><!--close content_item-->
	</div><!--close content--> 	
<?php get_footer(); ?>
