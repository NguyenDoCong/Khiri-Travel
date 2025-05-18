<footer>
    <div class="footer-left">
        <div class="logo">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
        </div>
        <div class="footer-text">
            <?php get_sidebar('footer-text'); ?>
        </div>
        <div class="social-media">
            <div id="sidebar-social-media" class="sidebar">
                <?php dynamic_sidebar('social-media'); ?>
            </div>
        </div>
        <div class="copyright">
            <?php get_sidebar('copyright'); ?>
        </div>
    </div>
    <div class="footer-right">
        <div class="subscription">
            <?php get_sidebar('subscription'); ?>
        </div>
        <div class="footer-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'menu_class'     => 'nav-menu',
                'depth'          => 2,
            ));
            ?>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>