<?php get_header(); ?>
<?php get_sidebar(); ?>

	<div id="content">
		<div class="content_item">
		<h2><?php single_cat_title("Latest ",true);?></h2>

			<?php while(have_posts()) : the_post(); ?>

				<div class="content_container">
					<?php the_excerpt(); ?>
					<div class="button_small">
						<a href="<?php the_permalink(); ?>">Read more</a>
					</div><!--close button_small-->
				</div><!--close content_container-->

			<?php endwhile ?>  
		</div><!--close content_item-->
	</div><!--close content--> 

<?php get_footer(); ?>