<?php

$title = get_field('title');
$heading = get_field('heading');
$subheading = get_field('subheading');

$video = get_field('video');
get_header(); ?>

<section id="primary" class="content-area">
    <div id="main" class="site-main" role="main">

        <!-- Main Block -->
        <section class="ltbl-section py-5">
            <div class="text-center col-12">
                <?php if ($title): ?>
                    <p class="teal block-title general-ss-name"><?php echo $title; ?></p>
                <?php endif; ?>
                <?php if ($heading): ?>
                    <h1 class="center-main-heading mb-3"><?php echo $heading; ?></h1>
                <?php endif; ?>
                <?php if ($subheading): ?>
                    <p class="mx-auto in-the-news-subtext lead font-weight-lighter ltbl-text"><?php echo $subheading; ?></p>
                <?php endif; ?>
            </div>
        </section>
        <!-- Main Block -->

        <!-- Logo Cards -->
        <section class="py-5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <?php if (have_rows('awards_list')): ?>
                        <?php while (have_rows('awards_list')): the_row();
                            $logo = get_sub_field('logo');
                            $description = get_sub_field('description');
                            ?>
                            <?php if ($logo): ?>
                                <div class="col-sm-12 col-md-6 px-2 mb-4">
                                    <div class="news-logo-container py-3">
                                        <div class="news-logo-img-container">
                                            <img class="news-logo-img" src="<?php echo $logo['sizes']['large']; ?>" alt="<?php echo $logo['alt']; ?>">
                                        </div>
                                        <div class="w-80 mx-auto">
                                            <p class="video-block-subheading"><?php echo $description; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!--/ Logo Cards -->

        <!-- Recent News -->
        <section class="py-5">
            <div class="container">
                <p class="text-center teal block-title general-ss-name">Recent News</p>

                <!-- News Posts -->
                <section class="news-articles  d-flex justify-content-center">
                    <div class="container wider">
                        <div class="row d-flex justify-content-center">
                            <?php
                            // the query
                            $the_query = new WP_Query(array(
                                'category__in' => array(42),
                                'posts_per_page' => 6
                            ));
                            ?>

                            <?php if ($the_query->have_posts()): ?>
                                <?php while ($the_query->have_posts()):
                                    $the_query->the_post(); ?>
                                    <div class="px-4 col-sm-12 col-md-6 col-lg-4 mb-5 news-blog-item">
                                        <a href="<?= the_permalink(); ?>" class="card-link"></a>
                                        <?php $newsVideo = get_field('video', $post->ID); ?>
                                        <?php if ($newsVideo): ?>
                                            <div class="video-blog-image-container mb-2">
                                                <video class="w-100 blog-image" controls>
                                                    <source src="<?php echo $newsVideo['url']; ?>" type="video/mp4">
                                                </video>
                                            </div>
                                        <?php endif; ?>

                                        <?php $i = 0;
                                        $sep = ', ';
                                        $cats = '';
                                        foreach ((get_the_category()) as $category) {
                                            if (0 < $i)
                                                $cats .= $sep;
                                            $cats .= $category->cat_name;
                                            $i++;
                                        }
                                        ; ?>
                                        <span class="grey block-title"><?php echo $cats; ?></span>
                                        <h2 class="baskerville bl-font light-weight module line-clamp-3 pb-0"><?php the_title(); ?></h2>

                                        <div class="pt-2 pb-3 module line-clamp ltbl-text light-weight">
                                            <?php $subheadline = get_field('subheadline', $post->ID); ?>
                                            <?php if ($subheadline): ?>
                                                <p><?php echo $subheadline; ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="teal text-decoration-none font-weight-bold">
                                            <a href="<?= the_permalink(); ?>">Learn More</a>
                                        </div>
                                    </div>

                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>

                            <?php else: ?>
                                <p><?php __('No News'); ?></p>
                            <?php endif; ?>

                            <?php
                            while (have_posts()):
                                the_post();

                                get_template_part('template-parts/content', 'page');

                            endwhile; // End of the loop.
                            ?>
                        </div>
                    </div>
                </section>
                <!-- / News Posts -->
            </div>
        </section>
        <!-- / Recent News -->

        <?php
        while (have_posts()):
            the_post();

            get_template_part('template-parts/content', 'page');

        endwhile; // End of the loop.
        ?>

    </div><!-- #main -->
</section><!-- #primary -->

<?php
// get_sidebar();
get_footer();
