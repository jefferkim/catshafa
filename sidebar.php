<div id="sidebar" >

		<?php hybrid_site_title(); ?>                     
		<nav>
		   <?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>
		</nav>


		<div class="widget">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			
				<?php get_search_form(); // widget::search?>

				<?php get_sidebar( 'secondary' ); // Loads the sidebar-secondary.php template. ?>

				<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>


		
		    <?php endif; ?>


            <div class="about-catshafa">

            	<div class="avatar">
            		<img src="<?php echo get_bloginfo('template_directory')?>/images/catshafa1.png"/>
                </div>
                <h2>珊璞<a href="#">微博</a></h2>
                <span>catshafa</span>
                <p>
				淘宝移动交互设计师<br/>兼顾视觉与交互，奇思乱想，热情工作的好同学。
                </p>
                <p>
                	生活交互设计师喜欢犯二，重度猫奴，重口萝莉，爱规划生活，爱总结，希望 “自己”这个产品给“自己”这个用户最好的体验。
                </p>

            </div>
		    
	    </div>
    </div>