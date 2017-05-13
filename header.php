<?php
/**
 * Theme Header
 */
?>
<!DOCTYPE html>
<!--[if gt IE 8]><html class="no-js ie9-plus  lte-ie11  lte-ie10  lte-ie9  lte-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9]><html class="no-js ie9-plus  lte-ie11  lte-ie10  lte-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 10]><html class="no-js ie9-plus  lte-ie11  lte-ie10" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 11]><html class="no-js ie9-plus  lte-ie11" <?php language_attributes(); ?>><![endif]-->
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script src="<?php echo get_bloginfo('template_directory'); ?>/custom/modernizr.custom.js"></script>
    <?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>

    <a id="skip-navigation" href="#k-body">Skip Navigation</a>

    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span>
    <span class="visible-sm"></span>
    <span class="visible-md"></span>
    <span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-functional-wrap">
        <?php 
        // theme's functional navigation
        if( has_nav_menu( 'functional' ) ) : k_navig_functional(); endif;
        ?>
    </div>
    
    <header id="k-head" class="container  site-header" role="banner"><!-- container + head wrapper -->
        <?php if( function_exists( 'dynamic_sidebar' )) : ?>
            <!-- header widgets -->
            <?php dynamic_sidebar( __( 'Header Widget', 'kazaz' ) ) ?>
        <?php endif; ?>
        <div class="row  col-padded">
            <h1 class="site-title  col-xs-12  col-sm-4">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
                <small class="site-title-tagline sr-only"><?php bloginfo( 'description' ); ?></small>


                <a id="mobile-nav-switch" href="#navigation-mobile" title="Navigation menu"
                        aria-label="Navigation menu" role="button" aria-controls="navigation-mobile" aria-expanded="false">
                        <span class="alter-menu-icon">Menu</span>
                    </a><!-- alternative menu button -->

            </h1>
            <div class="col-xs-12 col-sm-8 end-sm">
                <?php
                    // theme's main navigation
                    if( has_nav_menu( 'primary' ) ) : k_navig_head(); endif;
                ?>
            </div>
        </div>
    </header><!-- container + head wrapper end -->
    
    <div id="k-body" role="main"><!-- content wrapper -->
    
        <div class="container"><!-- container -->
        
