<?php
function foundation_scripts_default()
{
  
    // deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    // enqueue modernizr, jquery and foundation
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '1.0.0', false );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation/foundation.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'foundationtb', get_template_directory_uri() . '/js/foundation/foundation.topbar.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'foundationto', get_template_directory_uri() . '/js/foundation/foundation.orbit.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'foundation_scripts_default', 5 );

function foundation_styles()
{
    //register styles for our theme
    wp_register_style( 'foundation-style', get_template_directory_uri() . '/css/foundation.css', array(), 'all' );
    wp_register_style( 'foundation-appstyle', get_template_directory_uri() . '/css/app.css', array(), 'all');
    wp_register_style( 'foundation-webicons', get_template_directory_uri() . '/css/fc-webicons.css', array(), 'all');
    wp_enqueue_style( 'foundation-style' );
    wp_enqueue_style( 'foundation-appstyle' );
     wp_enqueue_style( 'foundation-webicons' );
}
add_action( 'wp_enqueue_scripts', 'foundation_styles', 5 );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );


// Add "has-dropdown" CSS class to navigation menu items that have children in a submenu.
function nav_menu_item_parent_classing( $classes, $item )
{
    global $wpdb;
    
$has_children = $wpdb -> get_var( "SELECT COUNT(meta_id) FROM {$wpdb->prefix}postmeta WHERE meta_key='_menu_item_menu_item_parent' AND meta_value='" . $item->ID . "'" );
    
    if ( $has_children > 0 )
    {
        array_push( $classes, "has-dropdown" );
    }
    
    return $classes;
}
 
add_filter( "nav_menu_css_class", "nav_menu_item_parent_classing", 10, 2 );

//Deletes empty classes and changes the sub menu class name
    function change_submenu_class($menu) {
        $menu = preg_replace('/ class="sub-menu"/',' class="dropdown"',$menu);
        return $menu;
    }
    add_filter ('wp_nav_menu','change_submenu_class');

//Use the active class of the ZURB Foundation for the current menu item. (From: https://github.com/milohuang/reverie/blob/master/functions.php)
function required_active_nav_class( $classes, $item ) {
    if ( $item->current == 1 || $item->current_item_ancestor == true ) {
        $classes[] = 'active';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );

add_theme_support( 'post-thumbnails' ); 


/**
 * Register our sidebars and widgetized areas.
 *
 */
function mb_widgets_init() {

	register_sidebar( array(
		'name' => 'Right sidebar',
		'id' => 'right_sidebar',
	) );
}
add_action( 'widgets_init', 'mb_widgets_init' );

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



?>