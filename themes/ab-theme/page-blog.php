<?php

$title = get_field('title');
$heading = get_field('heading');
$subheading = get_field('subheading');

$featuredImage = get_field('featured_image');
$featuredPic = $featuredImage['sizes']['large'];
$caption = get_field('featured_image_caption');

$video = get_field('featured_video');


get_header(); ?>

<section id="primary" class="content-area">
    <div id="main" class="site-main" role="main">

        <!-- Main Block -->
        <section class="ltbl-section py-5">
            <div class="text-center">
                <?php if ($title): ?>
                    <p class="teal block-title general-ss-name"><?php echo $title; ?></p>
                <?php endif; ?>
                <?php if ($heading): ?>
                    <h1 class="center-main-heading mb-3"><?php echo $heading; ?></h1>
                <?php endif; ?>
                <?php if ($subheading): ?>
                    <h3 class="our-process-subheading font-weight-lighter ltbl-text"><?php echo $subheading; ?></h3>
                <?php endif; ?>
            </div>
            <!-- Search -->
            <!-- <div class="search-container row grey mx-auto p-3 d-flex align-items-center">

                    <div class="col-1 d-flex align-items-center justify-content-end">
                        <span class="fa grey fa-search"></span>
                    </div>
                    <div class="col-10">
                        <input class="w-100 no-border font-italic" id="searchbar"
                               onkeyup="search_terms()"
                               type="text"
                               name="search"
                               placeholder="Search for keywords/topics...">
                    </div>
                </div> -->
            <!-- Search -->
        </section>
        <!-- Main Block -->


        <!-- Blog Posts -->
        <section class="news-articles py-5 d-flex justify-content-center">
            <div class="container ">
                <div class="row ">
                    <?php
                    // the query
                    
                    // TODO: better add acf relations field to handle categories in or not in to blog page
                    $the_query = new WP_Query(array(
                        'category__in' => array(39, 40, 41, 46),
                        'posts_per_page' => 12,
                    ));
                    ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>

                            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 terms">
                                <div class="blog-container">
                                    <a href="<?= the_permalink(); ?>" class="card-link"></a>
                                    <div class="blog-image-container">
                                        <img class="blog-image" src="<?php the_post_thumbnail_url() ?>" />
                                    </div>
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
                                    <div class="blog-container-content">
                                        <span class="grey block-title"><?php echo $cats; ?></span>
                                        <h2 class="baskerville bl-font light-weight blog-module line-clamp-3 pb-0"><?php the_title(); ?></h2>

                                        <?php $subheadline = get_field('subheadline', $post->ID); ?>
                                        <?php if ($subheadline): ?>
                                            <div class=" line-clamp ltbl-text light-weight">
                                                <?php echo $subheadline; ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="fake-link teal text-decoration-none font-weight-bold">
                                            <div><?php echo __('Read more', 'ab-theme'); ?></div>
                                        </div>
                                    </div>

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
        <!-- / Blog Posts -->

    </div><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
