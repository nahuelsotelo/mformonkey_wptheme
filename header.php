<?php
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>
      <?php
      	global $page, $paged;
      
      	wp_title( '|', true, 'right' );
      
      	// Add the blog name.
      	bloginfo( 'name' );
      
      	// Add the blog description for the home/front page.
      	$site_description = get_bloginfo( 'description', 'display' );
      	if ( $site_description && ( is_home() || is_front_page() ) )
      		echo " | $site_description";
      
      	// Add a page number if necessary:
      	if ( $paged >= 2 || $page >= 2 )
      		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
      	?>
    </title>    
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
<!--    <meta name="viewport" content="width=device-width,initial-scale=1">-->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/reset.css" />
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    

    <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

    <script src="js/libs/modernizr-2.0.6.min.js"></script>
    <?php
    	if ( is_singular() && get_option( 'thread_comments' ) )
    		wp_enqueue_script( 'comment-reply' );
    
    	wp_head();
    ?>
</head>



<body <?php body_class(); ?>>

    <header class="main-header">
        <div id="branding" role="banner">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ). ' | Home page' ); ?>" rel="home"  >
                <h1 class="ir"><?php bloginfo( 'name' ); ?></h1>
            </a>
        </div>
         
         <div class="nav-bar">
            <nav id="access" role="navigation">
                <h2 class="vhidden">Page navigation:</h2>
                <?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => false)); ?>
            </nav><!-- #access -->
  
            <?php wp_nav_menu( array( 'theme_location' => 'social', 'container' => false) ); ?>
        </div>
              
    </header><!-- #branding -->
    
    <div id="main" role="main">