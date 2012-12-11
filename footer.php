<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package etao-ux
 * @subpackage Template
 */
?>



				


               <!--                                                      
                                                       在libs/functions/sidebars.php中 有包含after-content ， before-content 等函数                                    
               -->
				<?php //get_sidebar( 'secondary' ); // Loads the sidebar-secondary.php template. ?>

				<?php //get_sidebar( 'after-content' ); // Loads the sidebar-after-content.php template. ?>

				<?php do_atomic( 'close_main' ); // trending_close_main ?>			

		</div>


		<?php do_atomic( 'after_main' ); // trending_after_main ?>

		<?php get_template_part( 'menu', 'subsidiary' ); // Loads the menu-subsidiary.php template. ?>

		<?php do_atomic( 'before_footer' ); // trending_before_footer ?>


		<footer class="clearfix">
		
	    <?php do_atomic( 'open_footer' ); // trending_open_footer ?>
			
			<p class="moblie-ux">©一淘UX, All rights reserved.</p>
			     
            <p class="copyright">转载内容版权归作者及来源网站所有，本站原创内容转载请注明来源，商业媒体及纸媒请先联系</p>            
				
			<?php echo apply_atomic_shortcode( 'footer_content', hybrid_get_setting( 'footer_insert' ) ); ?>
			
			<?php do_atomic( 'footer' ); // trending_footer ?>
		    
			<?php do_atomic( 'close_footer' ); // trending_close_footer ?>
		
		<?php if(is_home()):?>
		<script src="http://a.tbcdn.cn/??s/kissy/1.2.0/kissy-min.js,s/kissy/1.2.0/switchable-min.js" type="text/javascript"></script>
		
		<script>
		
		</script>
		<?php endif;?>
		</footer>

		<?php do_atomic( 'after_footer' ); // trending_after_footer ?>

	<?php do_atomic( 'close_body' ); // trending_close_body ?>

	<?php wp_footer(); // wp_footer ?>
	
	<script src="http://a.tbcdn.cn/s/kissy/1.2.0/kissy-min.js"></script>
	<script>
	  /*KISSY.ajax({
           url:"http://127.0.0.1/wordpress/?action=query_posts_ajax",
           data:{"cat":1},
           dataType:"json",
           success:function(resp){
              var posts = resp;
              console.log(posts);
           }
	   })*/
	
	</script>

</body>
</html>
