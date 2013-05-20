<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package catshafa
 * @subpackage Template
 */
?>

  <?php do_atomic( 'close_main' ); // trending_close_main ?>	
           </div>		
        
		</div>
  <?php get_sidebar(); // Loads the sidebar.php template. ?>

		<?php do_atomic( 'after_main' ); // trending_after_main ?>

		<?php get_template_part( 'menu', 'subsidiary' ); // Loads the menu-subsidiary.php template. ?>

		<?php do_atomic( 'before_footer' ); // trending_before_footer ?>


	

		<?php do_atomic( 'after_footer' ); // trending_after_footer ?>

	<?php do_atomic( 'close_body' ); // trending_close_body ?>

	<?php wp_footer(); // wp_footer ?>
	
<script type="text/javascript" src="<?php echo bloginfo( 'template_directory' );?>/js/jquery.min.js"></script>
<script type="text/javascript">
     var logo =$("#site-title").find("span");
      var CLS = "change";
     setTimeout(function(){
    	 logo.addClass(CLS);
     },3200);
     logo.on("mouseover mouseout",function(e){
         var target = $(e.target);
         e.type == "mouseover" ?  target.removeClass(CLS) : target.addClass(CLS); 
     })

     
     


</script>
</body>
</html>
