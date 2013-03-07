<div id="sidebar" >

		<?php hybrid_site_title(); ?>                     
		<nav>
		   <?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>
		</nav>


		<div class="widget">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			
				<?php get_search_form(); // widget::search?>
		
		
				<ul role="navigation">
					<?php wp_list_pages('title_li=<h2>' . __('Pages') . '</h2>' ); ?>

					<li><h2><?php _e('Archives'); ?></h2>
						<ul>
						<?php wp_get_archives(array('type' => 'monthly')); ?>
						</ul>
					</li>

					<?php wp_list_categories(array('show_count' => 1, 'title_li' => '<h2>' . __('Categories') . '</h2>')); ?>
				</ul>
				<ul>
					<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
						<?php wp_list_bookmarks(); ?>

						<li><h2><?php _e('Meta'); ?></h2>
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<li><a href="http://validator.w3.org/check/referer" title="<?php esc_attr_e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
							<li><a href="http://gmpg.org/xfn/"><abbr title="<?php esc_attr_e('XHTML Friends Network'); ?>"><?php _e('XFN'); ?></abbr></a></li>
							<li><a href="http://wordpress.org/" title="<?php esc_attr_e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>">WordPress</a></li>
							<?php wp_meta(); ?>
						</ul>
						</li>
					<?php } ?>
				</ul>
		    <?php endif; ?>
	    </div>
    </div>