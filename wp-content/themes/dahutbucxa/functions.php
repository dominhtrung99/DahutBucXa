<?php

if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}
add_theme_support( 'post-thumbnails' ); 
function annointed_admin_bar_remove() {
        global $wp_admin_bar;

        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
}

add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);
//show_admin_bar( true );
automatic_feed_links();	

if( !is_admin()){
	wp_deregister_script('jquery');
	wp_register_script('jquery', (esc_url( get_template_directory_uri() )."/js/jquery.min.js"), false, '1.11.3');
	wp_enqueue_script('jquery');
}
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
 // This theme uses wp_nav_menu() in one location.
     //Register menu
    function register_my_menus() {
      register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' ),
            'quick-link-menu' => __( 'Quick Link' ),
             'sidebar-menu' => __( 'Sidebar' )
        )
      );
    }
    add_action( 'init', 'register_my_menus' );

if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
		'id'=>'footer-1',
        'after_title' => '',
		'name' => 'Footer 1'  
    ));
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
		'id'=>'footer-2',
        'after_title' => '',
		'name' => 'Footer 2'  
    ));
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
		'id'=>'footer-3',
        'after_title' => '',
		'name' => 'Footer 3'  
    ));
     register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
		'id'=>'footer-4',
        'after_title' => '',
		'name' => 'Footer 4'  
    ));
     register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
		'id'=>'footer-5',
        'after_title' => '',
		'name' => 'Footer 5'  
    ));
}
add_image_size('thumb_360x240',360,240,array( 'center', 'top' ));//news
add_image_size('thumb_400x266',400,266,array( 'center', 'top' ));//news
add_image_size('thumb_169x169',169,169,array( 'center', 'top' ));//news
function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '[...]';
	} else {
		echo $excerpt;
	}
}



// Clean the up the image from wp_get_attachment_image()
add_filter( 'wp_get_attachment_image_attributes', function( $attr )
{
    if( isset( $attr['sizes'] ) )
        unset( $attr['sizes'] );

    if( isset( $attr['srcset'] ) )
        unset( $attr['srcset'] );

    return $attr;

 }, PHP_INT_MAX );

// Override the calculated image sizes
add_filter( 'wp_calculate_image_sizes', '__return_false',  PHP_INT_MAX );

// Override the calculated image sources
add_filter( 'wp_calculate_image_srcset', '__return_false', PHP_INT_MAX );

// Remove the reponsive stuff from the content
remove_filter( 'the_content', 'wp_make_content_images_responsive' );

