 		<div id="content_blue">
 			<div class="content_blue_container_box">
 				<h4>Latest Blog Post</h4>
 				<p>
 					<?php 
 					$args = array(
 						'numberposts' 	=> 1,
 						'offset'        => 0,
 						'category_name' => 'Post'
 						);
 					$posts_array = get_posts( $args );
 					foreach ($posts_array as $post) {
 						setup_postdata($post);
 						the_excerpt();
 					} 
 					?> 
 				</p>
 				<div class="readmore">
 					<a href="<?php the_permalink(); ?>">Read more</a>
 				</div><!--close readmore-->
 			</div><!--close content_blue_container_box-->
 			<div class="content_blue_container_box">
 				<h4>Latest News</h4>
 				<p>
 					<?php 
 					$args = array(
 						'numberposts' 	=> 1,
 						'offset'        => 0,
 						'category_name' => 'News'
 						);
 					$posts_array = get_posts( $args ); 
 					foreach ($posts_array as $post) {
 						setup_postdata($post);
 						the_excerpt();
 					}
 					?> 
 				</p>
 				<div class="readmore">
 					<a href="<?php the_permalink(); ?>">Read more</a>
 				</div><!--close readmore-->
 			</div><!--close content_blue_container_box-->
 			<div class="content_blue_container_boxl">
 				<h4>Latest Projects</h4>
 				<p>
 					<?php 
 					$args = array(
 						'numberposts' 	=> 1,
 						'offset'        => 0,
 						'category_name' => 'Projects'
 						);
 					$posts_array = get_posts( $args );
 					foreach ($posts_array as $post) {
 						setup_postdata($post);
 						the_excerpt();
 					} 
 					?> 
 				</p>
 				<div class="readmore">
 					<a href="<?php the_permalink(); ?>">Read more</a>
 				</div><!--close readmore-->	  
 			</div><!--close content_blue_container_box1-->      
 			<br style="clear:both"/>
 		</div><!--close content_blue--> 	
 	</div><!--close site_content--> 

 	</div><!--close main-->
  <div id="footer">
	  <a href="http://validator.w3.org/check?uri=referer">Valid XHTML</a> | <a href="http://fotogrph.com/">Images</a> | <a href="http://www.heartinternet.co.uk/web-hosting/">Web Hosting</a> | website template by <a href="<?php bloginfo("url"); ?>">Sorrell</a>
  </div><!--close footer-->  
  
</body>
</html>
