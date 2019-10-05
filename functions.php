
<?php 

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

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

//Add widgets
function init_widgets($id){
    register_sidebar(array(
        'name' =>'Sidebar',
        'id' => 'sidebar',
        'before_widget' =>'<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init','init_widgets');
