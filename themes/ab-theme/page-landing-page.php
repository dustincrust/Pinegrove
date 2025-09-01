<?php
/**
* Template Name: Landing Page
 */

get_header(); 

$heading = get_field('heading');
$subheading = get_field('subheading');

$heading1 = get_field('heading_1');
$text_field = get_field('text_field');

$storiesImage1 = get_field('image');
$storiesPic1 = $storiesImage1['sizes']['large'];
$heading2 = get_field('heading_2');
$text_field1 = get_field('text_field_1');

$heading3 = get_field('heading_3');
$text_field2 = get_field('text_field_2');

$heading4 = get_field('heading_4');
$text_field3 = get_field('text_field_3');

$callImage = get_field('call_image');
$callPic = $callImage['sizes']['large'];
$callLink = get_field('call_link');

?>

    <section id="primary" class="content-area col-sm-12">
        <div id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.
            ?>
            
            <!-- Main Block -->
            <section class="section-padding bottom-padding">
                <div class="lg-w-65 mx-auto">

                     <h2 class="text-center teal block-title general-ss-name">Who We Are</h2>
                     
                    <?php if($heading): ?>
                        <h1 class="text-center main-heading dk-teal-font mb-0 py-3"><?php echo $heading;?></h1>
                    <?php endif;?>
                    <?php if($subheading): ?>
                        <div class="ltbl-text lead font-weight-lighter pt-3"><?php echo $subheading;?></div>
                    <?php endif;?>    
                    
                </div>
            </section>
            <!-- / Main Block -->

            <!-- Our Services -->
            <section class="py-5 ltbl-section">
                <?php if($heading1): ?>
                <h2 class="lg-w-65 mx-auto dk-teal-font mb-0 pb-3"><?php echo $heading1;?></h2>
                <?php endif;?>
                <?php if($text_field): ?>
                    <div class="lg-w-65 mx-auto ltbl-text lead font-weight-lighter"><?php echo $text_field; ?></div>
                <?php endif;?>
                <div class="lg-w-65 mx-auto"><a href="/our-services"><button type="button" class="btn blue-btn-outline">Learn More <i class="fas fa-arrow-right pl-2"></i></button></a></div>
            </section>
            <!-- / Our Services -->
            
            <!-- Success Stories -->
            <section class="section-padding bottom-padding">
                <div class="lg-w-65 mx-auto">

                    <div class="row pb-5 pt-5" id="benefits-package">
                        <div class="col-12 col-md-5 col-lg-3 d-flex align-items-center">
                            <div class="who-we-help-img-container about-us-img-container mb-3">
                                <?php if($storiesPic1): ?>
                                    <img src="<?php echo $storiesPic1;?>" class="about-us-img">
                                <?php endif;?> 
                            </div>
                        </div>
                        <div class="col-12 col-md-7 col-lg-9">
                            <?php if($heading2): ?>
                                <h2 class="secondary-heading block-heading bottom-margin-0 dk-teal-font mb-0"><?php echo $heading2;?></h2>
                            <?php endif;?>
                            <?php if($text_field1): ?>
                                <div class="ltbl-text lead font-weight-lighter"><?php echo $text_field1; ?></div>
                            <?php endif;?>
                        </div>
                    </div>

                </div>
            </section>
            <!-- / Success Stories -->
            
            <!-- H.E.A.L.T.H. guidebook -->
            <section class="linear-gradient pb-3">
                <div class="container">
                    <div class="mb-4 row d-flex justify-content-center">
                        <div class="health-guidebook-background row w-100">
                            <div class="col-12 col-md-5">
                                <div class="d-flex align-items-center m-5">
                                    <img data-src="https://pinegrovefg.com/wp-content/uploads/2021/04/Updated-Blueprint-Transparent.png" class="rect-logo-img lazyloaded" src="https://pinegrovefg.com/wp-content/uploads/2021/04/Updated-Blueprint-Transparent.png"><noscript><img src="https://pinegrovefg.com/wp-content/uploads/2021/04/Updated-Blueprint-Transparent.png" class="rect-logo-img"></noscript>
                                </div>
                            </div>
                             
                            <div class="col-12 col-md-7 d-flex align-items-center">
                                <div class="small-padding md-padding"> 
                                    <h1 class="block-heading dk-teal-font">View a Sample Financial Plan</h1>
                                    <h1 class="number-subheading mb-0 dk-teal-font lg-w-80">Your Financial H.E.A.L.T.H. Guidebook helps summarize and organize your financial life.</h1>
                                    <?php echo do_shortcode('[3d-flip-book mode="link-lightbox" id="5337" classes="fb3d-h-500"]<button type="button" class="btn blue-btn-outline">View Here <i class="fas fa-arrow-right pl-2"></i></button>[/3d-flip-book]'); ?>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /H.E.A.L.T.H. guidebook -->
            
            <!-- Contact Us Section -->
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h1 class="teal block-title general-ss-name">Contact Us</h1>
                            <p class="dk-teal-font heading-48 mb-1 lead baskerville">Talk to us about </br>your situation & goals</h1>
                            <p class="block-subheading w-85 ltbl-text">
                                We would love to hear about your current financial situation 
                                and discuss if we can help. Please fill out the form or email us 
                                to start the conversation.</p>
                            <div class="row pb-4">
                                <div class="col-3 col-md-2">
                                    <div class="icon-container ">
                                        <img data-src="https://pinegrovefg.com/wp-content/uploads/2021/02/Icon.png" class="financial-prosperity-img lazyloaded" src="https://pinegrovefg.com/wp-content/uploads/2021/02/Icon.png"><noscript><img src="https://pinegrovefg.com/wp-content/uploads/2021/02/Icon.png" class="financial-prosperity-img"></noscript>
                                    </div>
                                </div>
                                <div class="col-9 col-md-10 sm-less-left-padding">
                                    <h3 class="mb-0 light-weight poppins-block-smaller-heading">Email Us</h3>
                                    <h3 class="teal sm-fs-16">contact@pinegrovefg.com</h3> 
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="contact-form-container">
                                <?php
                                // HubSpot form shortcode (replaces WPForms)
                                echo do_shortcode('[hubspot type="form" portal="50269108" id="c36b20be-7961-44d8-b2c5-4c8f31515d7c" version="v4"]');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Contact Us Section -->
    
            <!-- Meet Our Team / Start Planning Section -->
            <section class="container py-5">
                <div class="row">
                    <!-- Meet Our Team -->
                    <div class="col-12 col-md-6">
                        <div class="lg-w-80 mx-auto">
                            <?php if($heading3): ?>
                            <h2 class="secondary-heading block-heading bottom-margin-0 dk-teal-font mb-0"><?php echo $heading3;?></h2>
                            <?php endif;?>
                            <?php if($text_field2): ?>
                                <div class="ltbl-text lead font-weight-lighter"><?php echo $text_field2; ?></div>
                            <?php endif;?>
                             <a href="/meet-the-team">
                                <button type="button" class="btn btn-outline">See The Team</button>
                            </a>
                        </div>
                    </div>
                    <!-- Start Planning Section -->
                    <div class="col-12 col-md-6 lg-w-80 mx-auto">
                        <div class="lg-w-80 mx-auto">
                            <?php if($heading4): ?>
                            <h2 class="secondary-heading block-heading bottom-margin-0 dk-teal-font mb-0"><?php echo $heading4;?></h2>
                            <?php endif;?>
                            <?php if($text_field3): ?>
                                <div class="ltbl-text lead font-weight-lighter"><?php echo $text_field3; ?></div>
                            <?php endif;?>
                         </div>
                    </div>
                </div>
            </section>
            <!-- / Meet Our Team / Start Planning Section -->

            <!-- Schedule A Call -->
            <section class="py-5">
                <div class="container bg-contact d-flex align-items-center" 
                    style="
                        background-image: url('<?php echo $callPic;?>');
                        background-color: rgba(0, 36, 64, 0.7);
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        background-blend-mode: multiply;
                        "
                    >
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <div>
                            <h2 class="contact-heading mb-1">Schedule a Call</h2>
                            <p class="contact-subheading white-text lead font-weight-lighter pb-4">Don't wait another day, get started now.</p>
                            <div class="text-center-sm your-experience-btn">
                                <a href="<?php echo $callLink;?>">
                                    <button type="button" class="btn btn-outline">Contact Us <i class="fas fa-arrow-right pl-2"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
         <!-- / Schedule A Call -->
            
        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();