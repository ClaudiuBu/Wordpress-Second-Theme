
<?php
function adv_theme_support()
{
    //Featured image support

    add_theme_support('post-thumbnails');

    //Add menus ///Add navigation menu back-edn
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    ));
    // Post Format Support

    add_theme_support('post-formats', array(
        'aside', 'gallery', 'link'
    ));
}

add_action('after_setup_theme', 'adv_theme_support');




// get child from parent function NAV
function get_top_parent(){
    global $post;
    if($post->post_parent){
        $ancestors = get_post_ancestors($post ->ID);
        return $ancestors[0];
    }
    return $post->ID;
    }


/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

// Excerpt length
function set_excerpt_length()
{
    return 30;
}

add_filter('excerpt_length', 'set_excerpt_length');

//Add widgets
function init_widgets($id)
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => 'Sidebar Front Page',
        'id' => 'sidebar2',
        'before_widget' => '<div class="widget_2">',
        'after_widget' => '</div>',
        'before_title' => '<div class="box-title"><h4>',
        'after_title' => '</h4></div>'
    ));

    register_sidebar(array(
        'name' => 'Box 1',
        'id' => 'box-1',
        'before_widget' => '<div class="widget_2">',
        'after_widget' => '</div>',
        'before_title' => '<div class="box-title"><h4>',
        'after_title' => '</h4></div>'
    ));
    register_sidebar(array(
        'name' => 'Box 2',
        'id' => 'box-2',
        'before_widget' => '<div class="widget_2">',
        'after_widget' => '</div>',
        'before_title' => '<div class="box-title"><h4>',
        'after_title' => '</h4></div>'
    ));

    register_sidebar(array(
        'name' => 'Front-Index-Page',
        'id' => 'showcase',
        'before_widget' => '<div class="">',
        'after_widget' => '</div>',
        'before_title' => '<div class=""><h4>',
        'after_title' => '</h4></div>'
    ));

}
add_action('widgets_init', 'init_widgets');


function enqueue_my_custom_script()
{
    wp_enqueue_script('script-image', '/wp-content/themes/wpsecondtheme/scripts/image-script.js', false);
}

add_action('wp_enqueue_scripts', 'enqueue_my_custom_script');

function page_is_parent(){
    global $post;

    $pages = get_pages('child_of ='.$post->ID);
    return count($pages);
}