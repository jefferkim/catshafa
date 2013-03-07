<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />

<link rel="shortcut icon" href="http://ux.etao.com/favicon.ico" />
<title><?php hybrid_document_title(); ?></title>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" 	type="text/css" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php //wp_head(); ?>

</head>

<body class="<?php hybrid_body_class(); ?>">
    
   	


	<?php do_atomic( 'open_body' ); // origin_open_body ?>

	
	
     
  <div id="main" class="clearfix">

 <?php get_sidebar(); // Loads the sidebar.php template. ?>

     <div id="content" class="clearfix">   
	
	  <?php do_atomic( 'before_main' ); // origin_before_main ?>	  

		<?php do_atomic( 'open_main' ); // origin_open_main ?>
