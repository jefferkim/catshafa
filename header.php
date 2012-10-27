<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type"
	content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" href="http://ux.etao.com/favicon.ico" />
<title><?php hybrid_document_title(); ?></title>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" 	type="text/css" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if IE]>
   <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/html5.js"></script>
<![endif]--> 
<?php //wp_head(); ?>

</head>

<body class="<?php hybrid_body_class(); ?>">
    
   <?php do_atomic( 'before_header' ); // origin_before_header ?>
   <header>	
		<?php do_atomic( 'open_header' ); // origin_open_header ?>
           <?php hybrid_site_title(); ?>                    
		
		  <?php do_atomic( 'header' ); // origin_header ?>
		<?php do_atomic( 'close_header' ); // origin_close_header ?>
   </header>
	<?php do_atomic( 'after_header' ); // origin_after_header ?>	
	
	<?php do_atomic( 'open_body' ); // origin_open_body ?>
	
     
  <div id="main" class="clearfix">
   
   <aside>       
      
      <?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>       
      
     
      
       
      <ul id="social-links" class="social-links">
         <li class="rss"><a href="#"><s></s>订阅sha</a></li>
         <li class="taobao"><a href="#"><s></s>淘宝义卖店</a></li>
         <li class="facebook"><a href="#"><s></s>sha的脸书</a></li>
         <li class="weibo"><a href="#"><s></s>sha的围脖</a></li>
      </ul>
      
      <!-- 广告位 -->
      <div id="ad-block">
         
      
      </div>
    </aside>
    
  
     <article>   
	
	  <?php do_atomic( 'before_main' ); // origin_before_main ?>	  

		<?php do_atomic( 'open_main' ); // origin_open_main ?>
