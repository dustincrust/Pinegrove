<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if (str_contains($_SERVER['HTTP_HOST'], 'pinegrovefg.com')): ?>
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-57LQBZQZ');</script>
        <!-- End Google Tag Manager -->
    <?php endif; ?>


    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" fetchpriority="low" />


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php if (str_contains($_SERVER['HTTP_HOST'], 'pinegrovefg.com')): ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57LQBZQZ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php endif; ?>

    <?php

    // WordPress 5.2 wp_body_open implementation
    if (function_exists('wp_body_open')) {
        wp_body_open();
    } else {
        do_action('wp_body_open');
    }

    ?>

    <div id="page" class="site <?php echo !is_front_page() ? 'space-top white-header' : ''; ?>">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'wp-bootstrap-starter'); ?></a>
        <?php if (is_page_template('templates/landing-page.php')): ?>
            <?php get_template_part('templates/parts/landing-header'); ?>
        <?php elseif (is_page_template('templates/landing-webinar.php')): ?>
            <?php get_template_part('templates/landing-webinar/landing-header'); ?>
        <?php elseif (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php')): ?>
            <?php if (is_front_page()): ?>
                <header id="masthead" class="site-header navbar-static-top navbar-dark sticky-header sticky-header-front-page" role="banner">
                <?php else: ?>
                    <header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?> sticky-header sticky-header-page" role="banner">
                    <?php endif; ?>

                    <nav class="navbar navbar-expand-xl p-0">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <div class="navbar-brand">
                            </div>
                        </a>

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => 'div',
                            'container_id' => 'main-nav',
                            'container_class' => 'collapse navbar-collapse justify-content-end',
                            'menu_id' => false,
                            'menu_class' => 'navbar-nav',
                            'depth' => 3,
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                        ?>
                        <div class="rightAction__bar">
                            <a href="/client-login/" rel="nofollow" class="rightAction__barLogin">Login</a>
                            <a href="/contact/" class="rightAction__barContact">Contact Us</a>
                        </div>
                    </nav>

                    <?php
                    if (get_post_type() == 'tribe_events'):
                        get_template_part('template-parts/upcoming-events-bar');
                    endif; ?>
                </header><!-- #masthead -->


                <?php if (is_front_page() && !get_theme_mod('header_banner_visibility')): ?>
                    <!-- <div id="page-sub-header" <?php if (has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container">
                <h1>
                    <?php
                    if (get_theme_mod('header_banner_title_setting')) {
                        echo esc_attr(get_theme_mod('header_banner_title_setting'));
                    } else {
                        echo 'WordPress + Bootstrap';
                    }
                    ?>
                </h1>
                <p>
                    <?php
                    if (get_theme_mod('header_banner_tagline_setting')) {
                        echo esc_attr(get_theme_mod('header_banner_tagline_setting'));
                    } else {
                        echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize', 'wp-bootstrap-starter');
                    }
                    ?>
                </p>
                <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
            </div>
        </div> -->
                <?php endif; ?>
            <?php endif; ?>
    </div>