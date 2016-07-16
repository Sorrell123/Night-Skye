<?php get_header(); ?>

<?php get_sidebar(); ?>

	<div id="content">
		<div class="content_item">
			<?php if(have_posts()) : ?>
				<?php dynamic_sidebar("title-sidebar"); ?> 

				<?php query_posts('showposts=4&paged=1'); ?> <!-- limit wyświetlonych postów na stronie i któa wuświetlona jest strona jkaby było więcej postów -->

				<?php while(have_posts()) : the_post(); ?> 

					<div class="content_container">
						<?php the_excerpt(); ?>
						<div class="button_small">
							<a href="<?php the_permalink(); ?>">Read more</a>
						</div><!--close button_small-->
					</div><!--close content_container-->

				<?php endwhile ?> 
			<?php else : ?> 
				<h2>ERORR</h2>
				<p>Page does not exist!!!</p> 
			<?php endif ?>  
		</div><!--close content_item-->
	</div><!--close content--> 	
		

<?php get_footer(); ?>