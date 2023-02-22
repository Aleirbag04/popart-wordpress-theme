<?php

if (!function_exists('Popart_setup')) :

    function Popart_setup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        register_nav_menus(array(
            'menu-main'     =>    'Main Menu',
            'menu-social'   =>    'Social Menu',
        ));
    }

endif;

add_action('after_setup_theme', 'Popart_setup');


function popart_scripts_styles()
{
    // CSS Styles
    wp_enqueue_style('popart_style', get_stylesheet_uri());
    // JS
    wp_enqueue_script('popart_script_navigation_js', get_template_directory_uri() .
        '/js/navigation.js', array('jquery'), null, true);
    // Google Fonts
    wp_enqueue_style(
        'popart_style_googlefonts',
        'https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap',
        array(),
        null
    );
    wp_enqueue_style(
        'popart_style_googlefonts',
        'https://fonts.googleapis.com/css2?family=Roboto',
        array(),
        null
    );
    // Font Awesome
    wp_enqueue_style(
        'popart_style_fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css'
    );
}
add_action('wp_enqueue_scripts', 'popart_scripts_styles');

//Add custom post types in the archives for the default categories and tags archives
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query)
{
    if (is_category() || is_tag()) {
        $post_type = get_query_var('post_type');
        if ($post_type)
            $post_type = $post_type;
        else
            $post_type = array('post', 'portfolio', 'nav_menu_item');
        $query->set('post_type', $post_type);
        return $query;
    }
}
