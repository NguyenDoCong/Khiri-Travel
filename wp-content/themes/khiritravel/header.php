<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav>
            <div class="menu-mobile">
                <div class="logo">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <input type="image" alt="Search" src="<?php bloginfo('template_url'); ?>/assets/images/navbar/white-icons/Logo.png" class="logo-mobile" />
                <div class="menu-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>

            </div>

            <div class="top-nav">
                <div class="search-bar">
                    <div class="search-form">
                        <form action="/" method="get" class="search-input">
                            <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search..." />
                            <input type="image" alt="Search" src="<?php bloginfo('template_url'); ?>/assets/images/navbar/search.png" class="search-icon" />
                            <input type="image" alt="Search" src="<?php bloginfo('template_url'); ?>/assets/images/navbar/white-icons/search.png" class="search-icon-mobile" />
                        </form>
                    </div>
                    <div class="social-media">
                        <?php get_sidebar('social-media'); ?>
                    </div>
                    <div class="social-media-mobile">
                        <?php get_sidebar('social-media-mobile'); ?>
                    </div>
                    <div class="bg-mobile"></div>
                </div>
                <div class="nav-menu">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary-menu',
                            'menu_class'      => 'menu',
                            'container_class' => 'primary_menu_class'
                        )
                    );
                    ?>
                </div>

            </div>
        </nav>
    </header>
