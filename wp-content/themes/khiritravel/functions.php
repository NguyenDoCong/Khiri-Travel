<?php

function add_theme_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style('magnific_popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.1', 'all');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.1', 'all');
    wp_enqueue_style('slick_theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '1.1', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('khiritralvel_style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');

    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

function khiritralvel_setup()
{
    register_nav_menus(array(
        'primary-menu'   => __('Primary Menu', 'khiritralvel'),
        'secondary-menu' => __('Secondary Menu', 'khiritralvel')
    ));
    add_theme_support('post-thumbnails');
    add_post_type_support( 'khiri_contact', 'thumbnail' );    
    add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'khiritralvel_setup');

function khiritravel_custom_logo_setup()
{
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'khiritravel_custom_logo_setup');

function khiritravel_custom_header_setup()
{
    $args = array(
        'default-image'      => get_template_directory_uri() . '/assets/images/Logo.png',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support('custom-header', $args);
}
add_action('after_setup_theme', 'khiritravel_custom_header_setup');

add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars()
{
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'social-media',
            'name'          => __('Social Media Sidebar'),
            'description'   => __('A short description of the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    /* Repeat register_sidebar() code for additional sidebars. */

    register_sidebar(
        array(
            'id'            => 'social-media-mobile',
            'name'          => __('Social Media Sidebar Mobile'),
            'description'   => __('A short description of the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'main-menu',
            'name'          => __('Main Menu'),
            'description'   => __('A short description of the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-text',
            'name'          => __('Footer Text'),
            'description'   => __('A short description of the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'copyright',
            'name'          => __('Copyright'),
            'description'   => __('A short description of the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'subscription',
            'name'          => __('Subscription'),
            'description'   => __('A short description of the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
}

function add_icon_to_menu_items($item_output, $item, $depth, $args)
{
    if (in_array('menu-item-has-children', $item->classes)) {
        $item_output = str_replace('</a>', ' <span class="submenu-icon">▼</span></a>', $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'add_icon_to_menu_items', 10, 4);

function wporg_custom_post_type() {
	register_post_type('khiri_contact',
		array(
			'labels'      => array(
				'name'          => __('Contacts', 'textdomain'),
				'singular_name' => __('Contact', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
		)
	);
}
add_action('init', 'wporg_custom_post_type');
