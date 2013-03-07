<?php
/**
 * Index Template
 *
 * This is the default template.  It is used when a more specific template can't be found to display
 * posts.  It is unlikely that this template will ever be used, but there may be rare cases.
 *
 * @package catshafa
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>

 

	<?php do_atomic( 'before_content' ); // origin_before_content ?>	

		<?php do_atomic( 'open_content' ); // origin_open_content ?>	
		    <ul id="post-list">
             
             <?php if (have_posts ()) :?> 

			  <?php while ( have_posts() ) : the_post(); ?>	


				    <?php do_atomic( 'before_entry' ); // origin_before_entry ?>

					<li id="post-<?php the_ID(); ?>" class="post-item">
					      
					   <?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>	
					   <?php echo apply_atomic_shortcode( 'byline', '<span class="edit-meta">' . __( ' [entry-edit-link before=" &middot; "]', 'origin' ) . '</span>' ); ?>							
					   
	                   <?php do_atomic( 'open_entry' ); // origin_open_entry ?>
                        
                       <?php the_post_thumbnail();?>

					   <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 64,'');  //the desc of post?></p>
								
											
					 </li>

					<?php do_atomic( 'close_entry' ); // origin_close_entry ?>

				    <?php do_atomic( 'after_entry' ); // origin_after_entry ?>
   			  <?php endwhile;?>
   		    </ul>


		<?php else : ?>

			<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

		<?php endif; ?>
		        
			
           
                 
		

		<?php do_atomic( 'close_content' ); // origin_close_content ?>	
      
	<?php do_atomic( 'after_content' ); // origin_after_content ?>
    
<?php get_footer(); // Loads the footer.php template. ?>
