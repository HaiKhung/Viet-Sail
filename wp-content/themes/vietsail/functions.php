<?php
/**
 *viet sail


 * Register navigation menus
 */

add_action('wp_enqueue_scripts', 'my_vietsail_template');
function my_vietsail_template() {
    
    global $template;
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', false, '1.0.0' );
	wp_enqueue_style( 'vietsailcbq-style', get_stylesheet_directory_uri() . '/assets/css/styles.css', false, '1.0.0' );
	// wp_enqueue_style( 'aos-style', get_stylesheet_directory_uri() . '/assets/css/aos.css' );

	// wp_deregister_script('jquery');
	//   wp_register_script('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-3.6.0.min.js', false, null);
	// wp_enqueue_script('jquery');

	// wp_enqueue_script( 'aos', get_stylesheet_directory_uri() . '/assets/js/aos.js', array( 'jquery' ), '1.0.0', true );
	// wp_enqueue_script( 'swipe', get_stylesheet_directory_uri() . '/assets/js/jquery.touchSwipe.min.js', array( 'jquery' ), '1.0.0', true );
	// // wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true );
	// wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );
 
}



add_action('after_setup_theme', function(){
	register_nav_menus( array(
	  'primary-menu' => __( 'Primary Menu'),
	  'secondary-menu' => __( 'Secondary Menu' ),
	  'mobile-menu' => __( 'Mobile Menu' ),
   ) );
  });
  