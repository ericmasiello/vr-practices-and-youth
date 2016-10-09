<?php 
/**
 * Registers Sidebars
 */
function k_sidebars_init() {
	
	/* Legal Sidebars */
	register_sidebar( array(
		'name' => __( 'Sidebar Index', 'kazaz' ),
		'id' => 'sidebar-widgets-index',
		'description' => __( 'Content: Home/Index Page', 'kazaz' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="title-widget">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Header Widget', 'kazaz' ),
		'id' => 'header-widgets',
		'class' => 'header-widgets',
		'description' => __( 'Content: Header', 'kazaz' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="title-widget">',
		'after_title' => '</h2>',
	) );

    register_sidebar( array(
		'name' => __( 'Footer Widget', 'kazaz' ),
		'id' => 'footer-widgets',
		'class' => 'footer-widgets',
		'description' => __( 'Content: Footer', 'kazaz' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="title-widget">',
		'after_title' => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'k_sidebars_init' );