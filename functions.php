<?php 

function simple_theme_setup(){
    //Featured image support

    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','simple_theme_setup');

//Add navigation menu back-edn

register_nav_menus(array(
    'primary' => __('Primary Menu')
));


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Excerpt length
function set_excerpt_length(){
    return 30;
}

add_filter('excerpt_length','set_excerpt_length');