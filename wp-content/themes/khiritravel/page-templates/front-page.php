<?php /* Template Name: Home*/ ?>
<?php get_header(); ?>

<!-- <div class="hero">
    <?php $image = get_field('banner_image'); ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
</div>  -->

<?php $image = get_field('banner_image'); ?>

<div class="hero-banner" style="background-image: url(<?php echo esc_url($image['url']); ?>);">
    <div id="hero-banner-title">
        <!-- <h1><?php the_title(); ?></h1> -->
        <?php if (get_field('welcome_to')): ?>
            <p id="welcome_to"><?php echo esc_html(get_field('welcome_to')); ?></p>
        <?php endif; ?>
    </div>

    <?php if (get_field('khiri_travel')): ?>
        <p id="khiri_travel"><?php echo esc_html(get_field('khiri_travel')); ?></p>
    <?php endif; ?>

    <?php $watch_video = get_field('watch_video'); ?>

    <a class="popup-youtube" href="<?php echo esc_url($watch_video['url']); ?>">
        <p><?php echo esc_html($watch_video['title']); ?></p>
    </a>

    <?php $see_more = get_field('see_more'); ?>
    <p id="see_more"><?php echo esc_html($see_more['title']); ?></p>

    <?php if (get_field('banner_description')): ?>
        <p id="banner_description"><?php echo esc_html(get_field('banner_description')); ?></p>
    <?php endif; ?>
</div>

<div class="under-banner">
    <div class="bg"></div>
    <div class="keyword-search-container">
        <div class="keyword-search">
            <?php if (get_field('keyword')): ?>
                <p id="keyword"><?php echo esc_html(get_field('keyword')); ?></p>
            <?php endif; ?>
            <?php if (get_field('search')): ?>
                <p id="search"><?php echo esc_html(get_field('search')); ?></p>
            <?php endif; ?>
        </div>
        <?php if (get_field('keyword_search_description')): ?>
            <p id="keyword_search_description"><?php echo esc_html(get_field('keyword_search_description')); ?></p>
        <?php endif; ?>
        <div class="search-form">
            <form action="/" method="get" class="search-input">
                <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search to city, country, attraction, or the type of tour (full day or multi-day)..." />
                <input type="submit" value="Search" class="search-button" />
                <input type="image" alt="Search" src="<?php bloginfo('template_url'); ?>/assets/images/navbar/search.png" class="search-icon" />
            </form>
        </div>
    </div>

    <div class="welcome">
        <div class="welcome-left">
            <?php if (get_field('under_banner_title')): ?>
                <p id="under_banner_title"><?php echo wp_specialchars_decode(get_field('under_banner_title')); ?></p>
            <?php endif; ?>
            <div class="welcome-left-bottom">
                <div class="discover_more_container">
                    <?php if (get_field('discover_more')): ?>
                        <a href="http://localhost/khiritravel/blog/" id="discover_more"><?php echo esc_html(get_field('discover_more')); ?></a>
                    <?php endif; ?>
                </div>
                <?php $under_banner_image_left = get_field('under_banner_image_left'); ?>
                <?php if (get_field('under_banner_image_left')): ?>
                    <figure class="under_banner_image under_banner_image_left_container">
                        <img src="<?php echo esc_url($under_banner_image_left['url']); ?>" alt="<?php echo esc_attr($under_banner_image_left['alt']); ?>" />
                    </figure>
                <?php endif; ?>
            </div>
        </div>
        <div class="welcome-right">
            <?php $under_banner_image_right = get_field('under_banner_image_right'); ?>
            <?php if (get_field('under_banner_image_right')): ?>
                <figure class="under_banner_image under_banner_image_right_container">
                    <img src="<?php echo esc_url($under_banner_image_right['url']); ?>" alt="<?php echo esc_attr($under_banner_image_right['alt']); ?>" />
                </figure>
            <?php endif; ?>
            <?php if (get_field('under_banner_description')): ?>
                <p id="under_banner_description"><?php echo esc_html(get_field('under_banner_description')); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="itineraries">
    <div class="itineraries-text">
        <p id="itineraries_title"><?php echo wp_specialchars_decode(get_field('itineraries_title')); ?></p>
        <p id="itineraries_description"><?php echo esc_html(get_field('itineraries_description')); ?></p>
    </div>

    <?php
    $categories = get_categories([
        'hide_empty' => false,
        'order' => 'DESC',
        'exclude' => ['1']
    ]); ?>

    <div class="itinerary-slider-container">

        <div class="slider itinerary-slider-for">
            <?php
            foreach ($categories as $category): ?>

                <div class="itinerary-slide">

                    <?php $cat_images = get_field('category_image', $category->taxonomy . '_' . $category->term_id); ?>

                    <div class="cat-bg" style="background-image: url( <?php echo esc_url($cat_images['url']) ?>);">

                        <div class="content">

                            <p class="title">
                                <?php echo ($category->name) ?>
                            </p>

                            <p class="description">
                                <?php echo ($category->description); ?>
                            </p>

                        </div>

                        <!-- <img src=" <?php echo ($cat_images['url']) ?> " alt=" " /> -->
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

        <div class="itinerary-slider-wrap">
            <div class="slider itinerary-slider-nav">

                <?php foreach ($categories as $category): ?>

                    <div class="itinerary-slide">

                        <?php $cat_images = get_field('category_image', $category->taxonomy . '_' . $category->term_id); ?>

                        <div class="cat-bg">

                            <img src="<?php echo esc_url($cat_images['url']) ?>" alt=" " />

                            <div class="overlay">
                                <p>Explore More →</p>

                            </div>
                            <p class="title">
                                <?php echo ($category->name) ?>
                            </p>

                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>

<div class="hotels">
    <div class="hotels-text">
        <p id="hotels_title"><?php echo wp_specialchars_decode(get_field('hotels_title')); ?></p>
        <p id="hotels_description"><?php echo esc_html(get_field('hotels_description')); ?></p>
    </div>

    <?php
    $categories = get_categories([
        'hide_empty' => false,
        'order' => 'DESC',
        'exclude' => ['1']
    ]); ?>

    <div class="hotel-slider">
        <?php foreach ($categories as $category): ?>

            <div class="hotel-slide">

                <?php $cat_images = get_field('category_image', $category->taxonomy . '_' . $category->term_id); ?>

                <?php $cat_sum = get_field('category_summary', $category->taxonomy . '_' . $category->term_id); ?>

                <div class="cat-bg" data-title="<?php echo ($category->name) ?>">

                    <img src="<?php echo esc_url($cat_images['url']) ?>" alt=" " />

                    <div class="overlay">
                        <p class="summary">
                            <?php echo ($cat_sum); ?>
                        </p>
                        <p class="explore">Explore More →</p>
                    </div>
                    <p class="title">
                        <?php echo ($category->name) ?>
                    </p>

                    <p class="description">
                        <?php echo ($category->description); ?>
                    </p>

                </div>

            </div>
        <?php endforeach; ?>

    </div>
</div>

<div class="contacts">
    <div class="contacts-text">
        <p id="contact_title"><?php echo wp_specialchars_decode(get_field('contact_title')); ?></p>
        <p id="contact_description"><?php echo esc_html(get_field('contact_description')); ?></p>
    </div>
    <div class="contacts-slider">
        <?php
        // The Query.
        $args = array(
            'post_type' => 'khiri_contact'
        );
        $the_query = new WP_Query($args);

        // The Loop.
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<div class="slide-container">';
                echo '<div class="text">';
                echo '<p class="title">' . esc_html(get_the_title()) . '<span> | </span>' . '</p>';
                echo '<p class="content">' . esc_html(get_the_content()) . '</p>';
                echo '</div>';
                echo get_the_post_thumbnail(get_the_ID());
                echo '</div>';
            }
        } else {
            esc_html_e('Sorry, no posts matched your criteria.');
        }
        // Restore original Post Data.
        wp_reset_postdata();
        ?>
    </div>

    <div class="links">
        <div class="vl"></div>
        <div class="links-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contacts/phone.png" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contacts/mail.png" alt="" />
        </div>
    </div>
</div>

<div class="reach-out">
    <div class="reach-out-left">
        <div class="reach-out-text">
            <p id="reach_out_title"><?php echo wp_specialchars_decode(get_field('reach_out_title')); ?></p>
            <p id="reach_out_description"><?php echo esc_html(get_field('reach_out_description')); ?></p>
        </div>
        <div class="reach-out-detail">
            <div class="phone">
                <?php $phone_icon = get_field('phone_icon'); ?>
                <figure class="phone_icon">
                    <img src="<?php echo esc_url($phone_icon['url']) ?>" alt=" " />
                </figure>
                <div class="phone-detail">
                    <p id="phone"><?php echo wp_specialchars_decode(get_field('phone')); ?></p>
                    <p id="phone_number"><?php echo esc_html(get_field('phone_number')); ?></p>
                </div>
            </div>
            <div class="address">
                <?php $address_icon = get_field('address_icon'); ?>
                <figure>
                    <img src="<?php echo esc_url($address_icon['url']) ?>" alt=" " />
                </figure>
                <div class="address-detail">
                    <p id="address"><?php echo wp_specialchars_decode(get_field('address')); ?></p>
                    <p id="address_detail"><?php echo esc_html(get_field('address_detail')); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="reach-out-right">
        <div class="form">
            <?php echo do_shortcode('[contact-form-7 id="f9fb189" title="Contact form 1"]') ?>
        </div>
    </div>
</div>

<?php get_footer();
