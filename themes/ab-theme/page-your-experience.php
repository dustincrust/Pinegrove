<?php
/**
 * Template Name: Your Experience
 */

$image = get_field('image');
$picture = $image['sizes']['large'];
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
$main_link = get_field('link');
get_header();
?>
    <section id="primary" class="content-area col-sm-12">
        <div id="main" class="site-main" role="main">

            <?php
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content', 'notitle' );
                endwhile; // End of the loop.
            ?>

            <!-- Main Block -->
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 fw-col-img">
                            <div class="your-experience-img-container">
                                <?php if($image): ?>
                                    <img src="<?php echo $picture;?>" class="about-us-img">
                                <?php endif;?> 
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex align-items-center">
                            <div class="main-heading-text-container">
                                <h1 class="teal block-title general-ss-name">How we help</h1>
                                <?php if($heading): ?>
                                    <h2 class="main-heading dk-teal-font"> <?php echo $heading;?></h2>
                                <?php endif;?>
                                <?php if($subheading): ?>
                                    <h3 class="ltbl-text main-subheading font-weight-lighter"><?php echo $subheading;?></h3>
                                <?php endif;?>
                                <?php if($main_link): ?>
                                    <p class="mb-0 mt-3">
                                        <a class="pinegrove-button" href="<?php echo $main_link['url']?>"> <?php echo $main_link['title'];?></a>
                                    
                                    </p>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
              
            </section>
            <!-- / Main Block -->

            <!-- The Retirement H.E.A.L.T.H. Stress Test Block -->
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <?php if($heading1): ?>
                                <div class="heading-container">
                                    <h2 class="d-inline dk-teal-font block-heading font-weight-lighter mb-0"> <?php echo $heading1;?></h2>
                                    <h5 class="d-inline dk-teal-font">&copy;</h5>
                                </div>
                            <?php endif;?>
                            <?php if($subheading1): ?>
                                <p class="main-subheading ltbl-text lead font-weight-lighter"><?php echo $subheading1;?></p>
                            <?php endif;?>
                        </div>
                        <div class="col-12 col-md-6 d-flex align-items-center">
                            <?php if($video1): ?>
                                <div class="video-container">
                                    <?php echo $video1;?>
                                </div>
                            <?php endif;?> 
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Video Block 1 -->

            <!-- Video Block 2 -->
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex align-items-center experience-vid">
                            <video controls id="financial-life-vid">
                                <source src="/wp-content/uploads/2021/04/Your-Financial-Life.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-12 col-md-6 ">
                            <?php if($heading2): ?>
                                <h2 class="dk-teal-font heading-container block-heading font-weight-lighter mb-0"> <?php echo $heading2;?></h2>
                            <?php endif;?>
                            <?php if($subheading2): ?>
                                <p class="main-subheading ltbl-text lead font-weight-lighter"><?php echo $subheading2;?></p>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Video Block 2 -->

            <!-- Video Block 3 -->
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <?php if($heading3): ?>
                                <h2 class="dk-teal-font heading-container block-heading font-weight-lighter mb-0"> <?php echo $heading3;?></h2>
                            <?php endif;?>
                            <?php if($subheading3): ?>
                                <p class="main-subheading ltbl-text lead font-weight-lighter"><?php echo $subheading3;?></p>
                            <?php endif;?>
                        </div>
                        <div class="col-12 col-md-6 d-flex align-items-center">
                            <?php if($video3): ?>
                                <div class="video-container">
                                    <?php echo $video3;?>
                                </div>
                            <?php endif;?> 
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Video Block 3 -->

            <?php echo get_template_part('template-parts/newsletter-sample');?>

        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
