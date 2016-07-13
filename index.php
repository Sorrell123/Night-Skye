<?php get_header(); ?>

<?php get_sidebar(); ?>

	  <div id="content">
        <div class="content_item">
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
		</div><!--close content_item-->
      </div><!--close content-->   
	
	  <div id="content_blue">
	    <div class="content_blue_container_box">
		  <h4>Latest Blog Post</h4>
	      <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
		  <div class="readmore">
		    <a href="#">Read more</a>
		  </div><!--close readmore-->
	    </div><!--close content_blue_container_box-->
        <div class="content_blue_container_box">
         <h4>Latest News</h4>
	      <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
	      <div class="readmore">
		    <a href="#">Read more</a>
		  </div><!--close readmore-->
	    </div><!--close content_blue_container_box-->
        <div class="content_blue_container_boxl">
		  <h4>Latest Projects</h4>
	      <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
	      <div class="readmore">
		    <a href="#">Read more</a>
		  </div><!--close readmore-->	  
	    </div><!--close content_blue_container_box1-->      
	    <br style="clear:both"/>
      </div><!--close content_blue--> 	
	</div><!--close site_content--> 
  
	</div><!--close main-->

<?php get_footer(); ?>