<?php
/**
* Template Name: Virtual Courses
 */

$title = get_field('title');
$heading = get_field('heading');
$subheading = get_field('subheading');

$heading1 = get_field('heading_1');
$subheading1 = get_field('subheading_1');
$video1 = get_field('video_1');

$heading2 = get_field('heading_2');
$subheading2 = get_field('subheading_2');
$video2 = get_field('video_2');

$heading3 = get_field('heading_3');
$subheading3 = get_field('subheading_3');
$video3 = get_field('video_3');

$showNewsletter = get_field('display_newsletter_on_virtual_courses','option');
$newsletterDesc = get_field('text_displayed_over_newsletter_on_virtual_courses','option');

get_header(); ?>

    <section id="primary" class="content-area ltbl-section">
        <div id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.
            ?>

            <!-- Main Block -->
            <section class="ltbl-section py-5">
                <div class="container text-center">
                    <?php if($title): ?>
                        <p class="teal block-title general-ss-name"><?php echo $title; ?></p>
                    <?php endif; ?>
                    <?php if($heading): ?>
                        <h1 class="center-main-heading mb-3"><?php echo $heading; ?></h1>
                    <?php endif; ?>
                    <?php if($subheading): ?>
                        <p class="our-process-subheading lead font-weight-lighter ltbl-text"><?php echo $subheading; ?></p>
                    <?php endif; ?>
                </div>
            </section>
            <!-- Main Block -->

            <!-- The Retirement H.E.A.L.T.H. Stress-test Block -->
            <section class="pb-3 white-section section-padding d-flex justify-content-center">
                <div class="video-block-container testimonial-container mx-auto vc-main">
                    <div class="row bg-teal">
                        <div class="col-12 col-lg-5 video-column d-flex align-items-center justify-content-center experience-vid">
                            <?php if($video1): ?>
                                <div class="vc-video-container d-flex align-items-center">
                                    <?php echo $video1; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-lg-7 d-flex align-items-center video-teal-text-column d-flex justify-content-center">
                            <div class="virtual-courses-video-block-text-container">
                                <?php if($heading1): ?>
                                    <h2 class="dk-teal-font poppins-block-heading vc-section__title">
                                        <?php echo $heading1; ?> <sup>&copy;</sup>
                                    </h2>
                                <?php endif; ?>
                                <?php if($subheading1): ?>
                                    <div class="video-block-subheading vc-section__desc"><?php echo $subheading1; ?></div>
                                <?php endif; ?>

                                <?php if($showNewsletter): ?>
                                    <div class="virtual-courses-newsletter">
                                        <?php if($newsletterDesc): ?>
                                            <div class="virtual-courses-newsletter-desc">
                                                <?php echo $newsletterDesc; ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php
                                        // HubSpot form shortcode
                                        echo do_shortcode('[hubspot type="form" portal="50269108" id="f59aa113-54ce-4b7f-b1ec-e3a3242b32ae" version="v4"]');
                                        ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Video Block 1 -->

            <!-- Video Block 2 -->
            <?php if($heading2): ?>
            <section class="pb-3 white-section d-flex justify-content-center">
                <div class="video-block-container testimonial-container mx-auto">
                    <div class="row bg-grn">
                        <div class="col-12 col-md-7 video-column d-flex align-items-center experience-vid">
                            <video controls id="financial-life-vid">
                                <source src="/wp-content/uploads/2021/04/Your-Financial-Life.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-12 col-md-5 d-flex align-items-center video-grn-text-column d-flex justify-content-center">
                            <div class="virtual-courses-video-block-text-container">
                                <h1 class="dk-teal-font poppins-block-heading font-weight-lighter mb-0">
                                    <?php echo $heading2; ?>
                                </h1>
                                <?php if($subheading2): ?>
                                    <h3 class="video-block-subheading ltbl-text font-weight-lighter"><?php echo $subheading2; ?></h3>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <!-- / Video Block 2 -->

            <!-- Video Block 3 -->
            <section class="pb-5 white-section d-flex justify-content-center">
                <div class="video-block-container testimonial-container mx-auto">
                    <div class="row bg-bl">
                        <div class="col-12 col-md-7 video-column d-flex align-items-center experience-vid">
                            <?php if($video3): ?>
                                <div class="vc-video-container video-bl-background d-flex align-items-center">
                                    <?php echo $video3; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-md-5 d-flex align-items-center video-bl-text-column d-flex justify-content-center">
                            <div class="virtual-courses-video-block-text-container">
                                <?php if($heading3): ?>
                                    <h1 class="dk-teal-font poppins-block-heading font-weight-lighter mb-0">
                                        <?php echo $heading3; ?>
                                    </h1>
                                <?php endif; ?>
                                <?php if($subheading3): ?>
                                    <h3 class="video-block-subheading ltbl-text font-weight-lighter"><?php echo $subheading3; ?></h3>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Video Block 3 -->

        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();