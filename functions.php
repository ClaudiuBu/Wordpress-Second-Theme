
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

//Add widgets
function init_widgets($id){
    register_sidebar(array(
        'name' =>'Sidebar',
        'id' => 'sidebar',
        'before_widget' =>'<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>'
    ));
}
add_action('widgets_init','init_widgets');

function init_widgets2($id){
    register_sidebar(array(
        'name' =>'Sidebar Front Page',
        'id' => 'sidebar2',
        'before_widget' =>'<div class="widget_2">',
        'after_widget' => '</div>',
        'before_title' => '<div class="box-title"><h4>',
        'after_title' => '</h4></div>'
    ));
}

add_action('widgets_init','init_widgets2');

function enqueue_my_custom_script() {
    wp_enqueue_script( 'script-image', '/wp-content/themes/wpsecondtheme/scripts/image-script.js', false );
}
 
add_action( 'wp_enqueue_scripts', 'enqueue_my_custom_script' );