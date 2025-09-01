<?php
/**
 * Template Name: Success Stories
 */

get_header();

$header = get_field('header');
$subheading = get_field('subheading');
$detailsText = get_field('details_changed_note');
if (get_field('social_media_image_1')) {
    $socialLogo1 = get_field('social_media_image_1');
    $socialLogoPicture1 = $socialLogo1['sizes']['large'];

}
$socialLink1 = get_field('social_media_link_1');
if (get_field('social_media_image_2')) {
    $socialLogo2 = get_field('social_media_image_2');
    $socialLogoPicture2 = $socialLogo2['sizes']['large'];
}
$socialLink2 = get_field('social_media_link_2');
if (get_field('social_media_image_3')) {
    $socialLogo3 = get_field('social_media_image_3');
    $socialLogoPicture3 = $socialLogo3['sizes']['large'];
}
$socialLink3 = get_field('social_media_link_3');

$image = get_field('image');
$picture = $image['sizes']['2048x2048'];
$quote = get_field('testimonial');
if(get_field('avatar')){
    $avatar = get_field('avatar');
    $avatarPicture = $avatar['sizes']['large'];
}
$name = get_field('name');
$customerSince = get_field('customer_since_date');

//success stories
$image_1 = get_field('image_1');
$picture_1 = $image_1['sizes']['large'];
$name_1 = get_field('name_1');
$quote_1 = get_field('main_quote_1');
$goal1_1 = get_field('goal_1-1');
$goal1_2 = get_field('goal_1-2');
$goal1_3 = get_field('goal_1-3');
$about1_1 = get_field('about_1-1');
$about1_2 = get_field('about_1-2');
$about1_3 = get_field('about_1-3');
$area_of_focus1_1 = get_field('area_of_focus_1-1');
$area_of_focus1_2 = get_field('area_of_focus_1-2');
$area_of_focus1_3 = get_field('area_of_focus_1-3');
$link_1 = get_field('link_1');

$image_2 = get_field('image_2');
$picture_2 = $image_2['sizes']['large'];
$name_2 = get_field('name_2');
$quote_2 = get_field('main_quote_2');
$goal2_1 = get_field('goal_2-1');
$goal2_2 = get_field('goal_2-2');
$goal2_3 = get_field('goal_2-3');
$about2_1 = get_field('about_2-1');
$about2_2 = get_field('about_2-2');
$about2_3 = get_field('about_2-3');
$area_of_focus2_1 = get_field('area_of_focus_2-1');
$area_of_focus2_2 = get_field('area_of_focus_2-2');
$area_of_focus2_3 = get_field('area_of_focus_2-3');
$link_2 = get_field('link_2');

$image_3 = get_field('image_3');
$picture_3 = $image_3['sizes']['large'];
$name_3 = get_field('name_3');
$quote_3 = get_field('main_quote_3');
$goal3_1 = get_field('goal_3-1');
$goal3_2 = get_field('goal_3-2');
$goal3_3 = get_field('goal_3-3');
$goal3_4 = get_field('goal_3-4');
$goal3_5 = get_field('goal_3-5');
$about3_1 = get_field('about_3-1');
$about3_2 = get_field('about_3-2');
$about3_3 = get_field('about_3-3');
$area_of_focus3_1 = get_field('area_of_focus_3-1');
$area_of_focus3_2 = get_field('area_of_focus_3-2');
$area_of_focus3_3 = get_field('area_of_focus_3-3');
$link_3 = get_field('link_3');

$image_4 = get_field('image_4');
$picture_4 = $image_4['sizes']['large'];
$name_4 = get_field('name_4');
$quote_4 = get_field('main_quote_4');
$goal4_1 = get_field('goal_4-1');
$goal4_2 = get_field('goal_4-2');
$goal4_3 = get_field('goal_4-3');
$about4_1 = get_field('about_4-1');
$about4_2 = get_field('about_4-2');
$about4_3 = get_field('about_4-3');
$about4_4 = get_field('about_4-4');
$area_of_focus4_1 = get_field('area_of_focus_4-1');
$area_of_focus4_2 = get_field('area_of_focus_4-2');
$area_of_focus4_3 = get_field('area_of_focus_4-3');
$link_4 = get_field('link_4');

?>

    <section id="primary" class="content-area">
        <div id="main" class="site-main" role="main">

            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'page');

            endwhile; // End of the loop.
            ?>

            <!-- Hero Block -->
            <section class="home-hero pb-4 ss-height-screen">
                <div class="w-90 mx-auto vert-container ss-height-screen">
                    <div class="row ss-row">
                        <div class="col-12 col-lg-8">
                            <?php if ($header): ?>
                                <h1 class="home-header mb-0"><?php echo $header; ?></h1>
                            <?php endif; ?>

                            <?php if ($subheading): ?>
                                <h3 class="light-weight"><?php echo($subheading); ?></h3>
                            <?php endif; ?>

                            <?php if ($detailsText): ?>
                                <p class="italic-subheader"><?php echo($detailsText); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-lg-4 social-logo-container">
                            <div class='row d-flex align-items-center'>
                                <div class="col-4 px-1">
                                    <?php if ($socialLink1) : ?>

                                        <?php if (!empty($socialLogo1)): ?>
                                            <a href="<?php echo $socialLink1['url']; ?>" target="_blank">
                                                <div class="social-media-container">
                                                    <img src="<?php echo $socialLogoPicture1; ?>"
                                                         class="social-media-image">
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                    <?php else : ?>

                                        <?php if (!empty($socialLogo1)): ?>
                                            <div class="social-media-container">
                                                <img src="<?php echo $socialLogoPicture1; ?>"
                                                     class="social-media-image">
                                            </div>
                                        <?php endif; ?>

                                    <?php endif; ?>
                                </div>

                                <div class="col-4 px-1">
                                    <?php if ($socialLink2) : ?>

                                        <?php if (!empty($socialLogo2)): ?>
                                            <a href="<?php echo $socialLink2['url']; ?>" target="_blank">
                                                <div class="social-media-container">
                                                    <img src="<?php echo $socialLogoPicture2; ?>"
                                                         class="social-media-image">
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                    <?php else : ?>

                                        <?php if (!empty($socialLogo2)): ?>
                                            <div class="social-media-container">
                                                <img src="<?php echo $socialLogoPicture2; ?>"
                                                     class="social-media-image">
                                            </div>
                                        <?php endif; ?>

                                    <?php endif; ?>

                                </div>

                                <div class="col-4 px-1">
                                    <?php if ($socialLink3) : ?>

                                        <?php if (!empty($socialLogo3)): ?>
                                            <a href="<?php echo $socialLink3['url']; ?>" target="_blank">
                                                <div class="social-media-container">
                                                    <img src="<?php echo $socialLogoPicture3; ?>"
                                                         class="social-media-image">
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                    <?php else : ?>

                                        <?php if (!empty($socialLogo3)): ?>
                                            <div class="social-media-container">
                                                <img src="<?php echo $socialLogoPicture3; ?>"
                                                     class="social-media-image">
                                            </div>
                                        <?php endif; ?>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Hero Block -->

            <!-- Main Image -->
            <section>
                <div class="hero-image-container">
                    <?php if ($image): ?>
                        <img src="<?php echo $picture; ?>" class="hero-fluid-img w-100"/>
                    <?php endif; ?>
                </div>
            </section>
            <!-- /Main Image -->

            <!-- Quote -->
            <?php if ($quote): ?>
                <section class="ltbl-section pt-5">
                    <div class="container testimonial-container">
                        <i class="fas fa-quote-left left-quote pb-4"></i>
                        <p class="testimonial"><?php echo $quote; ?></p>

                        <div class="row">
                            <div class="col-3 col-md-1">
                                <div class="round-avatar">
                                    <?php if ($avatar): ?>
                                        <img src="<?php echo $avatarPicture; ?>" class="avatar-img">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-9 col-md-11 ">
                                <?php if ($name): ?>
                                    <p class="testimonial-name mb-0 pl-0"><?php echo $name; ?></p>
                                <?php endif; ?>
                                <?php if ($customerSince): ?>
                                    <p class="testimonial-subheading"><?php echo $customerSince; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <!-- /Quote -->

            <!-- Success Stories -->
            <section class="container pt-5">
                <div class="row">

                    <!-- Success Story 1 -->
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <div class="success-story-image-container">
                            <?php if ($image_1): ?>
                                <img src="<?php echo $picture_1; ?>" class="success-story-image">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 pb-5">
                        <?php if ($name_1): ?>
                            <h2 class="teal block-title general-ss-name"><?php echo $name_1; ?></h2>
                        <?php endif; ?>
                        <?php if ($quote_1): ?>
                            <p class="block-heading font-weight-lighter mb-4"><?php echo $quote_1; ?></p>
                        <?php endif; ?>

                        <!-- Goals -->
                        <div class="pb-3">
                            <?php if ($goal1_1 || $goal1_2 || $goal1_3): ?>
                                <h3 class="goals">Goals</h3>
                                <ul class="success-story-ul">
                                    <?php if ($goal1_1): ?>
                                        <li><?php echo $goal1_1; ?></li>
                                    <?php endif; ?>
                                    <?php if ($goal1_2): ?>
                                        <li><?php echo $goal1_2; ?></li>
                                    <?php endif; ?>
                                    <?php if ($goal1_3): ?>
                                        <li><?php echo $goal1_3; ?></li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <!-- / Goals -->

                        <!-- About -->
                        <div class="pb-3">
                            <?php if ($about1_1 || $about1_2 || $about1_3): ?>
                                <h3 class="goals">About</h3>
                                <ul class="success-story-ul">
                                    <?php if ($about1_1): ?>
                                        <li><?php echo $about1_1; ?></li>
                                    <?php endif; ?>
                                    <?php if ($about1_2): ?>
                                        <li><?php echo $about1_2; ?></li>
                                    <?php endif; ?>
                                    <?php if ($about1_3): ?>
                                        <li><?php echo $about1_3; ?></li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <!-- / About -->

                        <!-- Areas of Focus -->
                        <div class="pb-3">
                            <?php if ($area_of_focus1_1 || $area_of_focus1_2 || $area_of_focus1_3): ?>
                                <h3 class="goals">Areas of Focus</h3>
                                <ul class="success-story-ul">
                                    <?php if ($area_of_focus1_1): ?>
                                        <li><?php echo $area_of_focus1_1; ?></li>
                                    <?php endif; ?>
                                    <?php if ($area_of_focus1_2): ?>
                                        <li><?php echo $area_of_focus1_2; ?></li>
                                    <?php endif; ?>
                                    <?php if ($area_of_focus1_3): ?>
                                        <li><?php echo $area_of_focus1_3; ?></li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <!-- Areas of Focus -->

                        <?php if ($link_1): ?>
                            <div class="text-center-sm your-experience-btn">
                                <a href="<?php echo $link_1; ?>">
                                    <button type="button" class="btn btn-outline">See How We Helped <i
                                                class="fas fa-arrow-right pl-2"></i></button>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- / Success Story 1 -->

                    <!-- Success Story 2 -->
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <div class="success-story-image-container">
                            <?php if ($image_2): ?>
                                <img src="<?php echo $picture_2; ?>" class="success-story-image">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 pb-5">
                        <?php if ($name_2): ?>
                            <h2 class="teal block-title general-ss-name"><?php echo $name_2; ?></h2>
                        <?php endif; ?>
                        <?php if ($quote_2): ?>
                            <p class="block-heading font-weight-lighter mb-4"><?php echo $quote_2; ?></p>
                        <?php endif; ?>

                        <!-- Goals -->
                        <div class="pb-3">
                            <?php if ($goal2_1 || $goal2_2 || $goal2_3): ?>
                                <h3 class="goals">Goals</h3>
                                <ul class="success-story-ul">
                                    <?php if ($goal2_1): ?>
                                        <li><?php echo $goal2_1; ?></li>
                                    <?php endif; ?>
                                    <?php if ($goal2_2): ?>
                                        <li><?php echo $goal2_2; ?></li>
                                    <?php endif; ?>
                                    <?php if ($goal2_3): ?>
                                        <li><?php echo $goal2_3; ?></li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <!-- / Goals -->

                        <!-- About -->
                        <div class="pb-3">
                            <?php if ($about2_1 || $about2_2 || $about2_3): ?>
                                <h3 class="goals">About</h3>
                                <ul class="success-story-ul">
                                    <?php if ($about2_1): ?>
                                        <li><?php echo $about2_1; ?></li>
                                    <?php endif; ?>
                                    <?php if ($about2_2): ?>
                                        <li><?php echo $about2_2; ?></li>
                                    <?php endif; ?>
                                    <?php if ($about2_3): ?>
                                        <li><?php echo $about2_3; ?></li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <!-- / About -->

                        <!-- Areas of Focus -->
                        <div class="pb-3">
                            <?php if ($area_of_focus2_1 || $area_of_focus2_2 || $area_of_focus2_3): ?>
                                <h3 class="goals">Areas of Focus</h3>
                                <ul class="success-story-ul">
                                    <?php if ($area_of_focus2_1): ?>
                                        <li><?php echo $area_of_focus2_1; ?></li>
                                    <?php endif; ?>
                                    <?php if ($area_of_focus2_2): ?>
                                        <li><?php echo $area_of_focus2_2; ?></li>
                                    <?php endif; ?>
                                    <?php if ($area_of_focus2_3): ?>
                                        <li><?php echo $area_of_focus2_3; ?></li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <!-- Areas of Focus -->

                        <?php if ($link_2): ?>
                            <div class="text-center-sm your-experience-btn">
                                <a href="<?php echo $link_2; ?>">
                                    <button type="button" class="btn btn-outline">See How We Helped <i
                                                class="fas fa-arrow-right pl-2"></i></button>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- / Success Story 2 -->

                    <!-- Success Story 3 -->
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <div class="success-story-image-container">
                            <?php if ($image_3): ?>
                                <img src="<?php echo $picture_3; ?>" class="success-story-image">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 pb-5">
                        <?php if ($name_3): ?>
                            <h2 class="teal block-title general-ss-name"><?php echo $name_3; ?></h2>
                        <?php endif; ?>
                        <?php if ($quote_3): ?>
                            <p class="block-heading font-weight-lighter mb-4"><?php echo $quote_3; ?></p>
                        <?php endif; ?>

                        <!-- Goals -->
                        <div class="pb-3">
                            <?php if ($goal3_1 || $goal3_2 || $goal3_3): ?>
                                <h3 class="goals">Goals</h3>
                                <ul class="success-story-ul">
                                    <?php if ($goal3_1): ?>
                                        <li><?php echo $goal3_1; ?></li>
                                    <?php endif; ?>
                                    <?php if ($goal3_2): ?>
                                        <li><?php echo $goal3_2; ?></li>
                                    <?php endif; ?>
                                    <?php if ($goal3_3): ?>
                                        <li><?php echo $goal3_3; ?></li>
                                    <?php endif; ?>
                                    <?php if ($goal3_4): ?>
                                        <li><?php echo $goal3_4; ?></li>
                                    <?php endif; ?>
                                    <?php if ($goal3_5): ?>
                                        <li><?php echo $goal3_5; ?></li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <!-- / Goals -->

                        <!-- About -->
                        <div class="pb-3">
                            <?php if ($about3_1 || $about3_2 || $about3_3): ?>
                                <h3 class="goals">About</h3>
                                <ul class="success-story-ul">
                                    <?php if ($about3_1): ?>
                                        <li><?php echo $about3_1; ?></li>
                                    <?php endif; ?>
                                    <?php if ($about3_2): ?>
                                        <li><?php echo $about3_2; ?></li>
                                    <?php endif; ?>
                                    <?php if ($about3_3): ?>
                                        <li><?php echo $about3_3; ?></li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <!-- / About -->

                        <!-- Areas of Focus -->
                        <div class="pb-3">
                            <?php if ($area_of_focus3_1 || $area_of_focus3_2 || $area_of_focus3_3): ?>
                                <h3 class="goals">Areas of Focus</h3>
                                <ul class="success-story-ul">
                                    <?php if ($area_of_focus3_1): ?>
                                        <li><?php echo $area_of_focus3_1; ?></li>
                                    <?php endif; ?>
                                    <?php if ($area_of_focus3_2): ?>
                                        <li><?php echo $area_of_focus3_2; ?></li>
                                    <?php endif; ?>
                                    <?php if ($area_of_focus3_3): ?>
                                        <li><?php echo $area_of_focus3_3; ?></li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <!-- Areas of Focus -->

                        <?php if ($link_3): ?>
                            <div class="text-center-sm your-experience-btn">
                                <a href="<?php echo $link_3; ?>">
                                    <button type="button" class="btn btn-outline">See How We Helped <i
                                                class="fas fa-arrow-right pl-2"></i></button>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- / Success Story 3 -->

                    <!-- Success Story 4 -->
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <div class="success-story-image-container">
                            <?php if ($image_4): ?>
                                <img src="<?php echo $picture_4; ?>" class="success-story-image">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 pb-5">
                        <?php if ($name_4): ?>
                            <h2 class="teal block-title general-ss-name"><?php echo $name_4; ?></h2>
                        <?php endif; ?>
                        <?php if ($quote_4): ?>
                            <p class="block-heading font-weight-lighter mb-4"><?php echo $quote_4; ?></p>
                        <?php endif; ?>

                        <!-- Goals -->
                        <div class="pb-3">
                            <?php if ($goal4_1 || $goal4_2 || $goal4_3): ?>
                                <h3 class="goals">Goals</h3>
                                <ul class="success-story-ul">
                                    <?php if ($goal4_1): ?>
                                        <li><?php echo $goal4_1; ?></li>
                                    <?php endif; ?>
                                    <?php if ($goal4_2): ?>
                                        <li><?php echo $goal4_2; ?></li>
                                    <?php endif; ?>
                                    <?php if ($goal4_3): ?>
                                        <li><?php echo $goal4_3; ?></li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <!-- / Goals -->

                        <!-- About -->
                        <div class="pb-3">
                            <?php if ($about4_1 || $about4_2 || $about4_3): ?>
                                <h3 class="goals">About</h3>
                                <ul class="success-story-ul">
                                    <?php if ($about4_1): ?>
                                        <li><?php echo $about4_1; ?></li>
                                    <?php endif; ?>
                                    <?php if ($about4_2): ?>
                                        <li><?php echo $about4_2; ?></li>
                                    <?php endif; ?>
                                    <?php if ($about4_3): ?>
                                        <li><?php echo $about4_3; ?></li>
                                    <?php endif; ?>
                                    <?php if ($about4_4): ?>
                                        <li><?php echo $about4_4; ?></li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <!-- / About -->

                        <!-- Areas of Focus -->
                        <div class="pb-3">
                            <?php if ($area_of_focus4_1 || $area_of_focus4_2 || $area_of_focus4_3): ?>
                                <h3 class="goals">Areas of Focus</h3>
                                <ul class="success-story-ul">
                                    <?php if ($area_of_focus4_1): ?>
                                        <li><?php echo $area_of_focus4_1; ?></li>
                                    <?php endif; ?>
                                    <?php if ($area_of_focus4_2): ?>
                                        <li><?php echo $area_of_focus4_2; ?></li>
                                    <?php endif; ?>
                                    <?php if ($area_of_focus4_3): ?>
                                        <li><?php echo $area_of_focus4_3; ?></li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <!-- Areas of Focus -->

                        <?php if ($link_4): ?>
                            <div class="text-center-sm your-experience-btn">
                                <a href="<?php echo $link_4; ?>">
                                    <button type="button" class="btn btn-outline">See How We Helped <i
                                                class="fas fa-arrow-right pl-2"></i></button>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- / Success Story 4 -->

                </div>
            </section>
            <!-- / Success Stories -->

        	<?php echo get_template_part('template-parts/newsletter-sample');?>

        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
