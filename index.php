<?php
/**
 * Index Template
 *
 * This is the default template.  It is used when a more specific template can't be found to display
 * posts.  It is unlikely that this template will ever be used, but there may be rare cases.
 *
 * @package eato-ux
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>

 

	<?php do_atomic( 'before_content' ); // origin_before_content ?>	

		<?php do_atomic( 'open_content' ); // origin_open_content ?>	
		
		   <!-- 全部博文 -->
		    <div class="block home-post">
		      <div class="block-wrap">
		        <h2 class="title">1.博文</h2>
		        <div class="block-c">
		           <div class="home-post-pic"></div>
		        
		         <?php    
			            
				    query_posts('showposts=3');			
				    if (have_posts ()) :
				    $i = 0			   
				?>
              
			  <?php while ( have_posts() ) : the_post(); ?>	

				<?php do_atomic( 'before_entry' ); // origin_before_entry ?>

					<div id="post-<?php the_ID(); ?>"	class="post-item post-item<?php echo $i;?>">
						
					   <div class="post-item-hd">	
					      <div class="avatar-box">
					          <span class="avatar-mask"></span>
					          <?php echo get_avatar($post->post_author,72);?>
					      </div>		
					      <?php echo apply_atomic_shortcode( 'byline', '<div class="post-meta">' . __( '[entry-author] [entry-terms taxonomy="category" before=""]  [entry-edit-link before=" &middot; "]', 'origin' ) . '</div>' ); ?>							
					      <?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>					      
	                   </div>
	                   
					   <div class="post-item-summary">
							
						 <?php do_atomic( 'open_entry' ); // origin_open_entry ?>
                            
					    <div class="post-item-c"><em></em><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 150,'…');  ?></div>
								
											
					 </div>

					<?php do_atomic( 'close_entry' ); // origin_close_entry ?>

				</div>

				<?php do_atomic( 'after_entry' ); // origin_after_entry ?>
				
               <?php $i++;?>
			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

		<?php endif; ?>
		        
		        
		         <a href="?cat=1" class="all-btn home-post-btn">查看全部博文<em></em></a>
		        </div>
		    </div>
		  </div>
		    
		   

		  
			
			
           
      </div>           
		

		<?php do_atomic( 'close_content' ); // origin_close_content ?>	
      
	<?php do_atomic( 'after_content' ); // origin_after_content ?>
    
<?php get_footer(); // Loads the footer.php template. ?>
