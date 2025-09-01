<?php
get_header();

$video = get_field('video');
$subheader = get_field('main_subheading');
$getStarted = get_field('get_started_link');

// What we do section
$whatWeDoSubheading = get_field('what_we_do_subheading');
$yourExperience = get_field('your_experience_link');
$financialProsperityImg = get_field('what_we_do_image');
$fpPicture = $financialProsperityImg['sizes']['large'];
$isVideo = get_field('is_video');
$wvideo = get_field('what_we_do_video');

$currentSituation1 = get_field('current_situation_1');
$currentSituation2 = get_field('current_situation_2');
$currentSituation3 = get_field('current_situation_3');
$currentSituation4 = get_field('current_situation_4');
$currentSituation5 = get_field('current_situation_5');
$currentSituation6 = get_field('current_situation_6');
$lookingFor1 = get_field('looking_for_1');
$lookingFor2 = get_field('looking_for_2');
$lookingFor3 = get_field('looking_for_3');
$lookingFor4 = get_field('looking_for_4');
$lookingFor5 = get_field('looking_for_5');
$lookingFor6 = get_field('looking_for_6');

$successStories = get_field('success_stories');
$situationDropdown = get_field('your_situation_dropdown');
$lookingForDropdown = get_field('looking_for_dropdown');
$findResultsBtn = get_field('find_results_button');
$namesDetails = get_field('names_and_details');

$link1 = get_field('link_1');
$link2 = get_field('link_2');
$link3 = get_field('link_3');
$link4 = get_field('link_4');

$firstSsImage = get_field('image_column_1');
$firstSsPicture = $firstSsImage['sizes']['large'];
$firstSsImageAlt = $firstSsImage['alt'];
$firstSsImageTitle = $firstSsImage['title'];
$firstSsHeader = get_field('heading_column_1');
$firstSsName = get_field('name_column_1');

$secondSsImage = get_field('image_column_2');
$secondSsPicture = $secondSsImage['sizes']['large'];
$secondSsImageAlt = $secondSsImage['alt'];
$secondSsImageTitle = $secondSsImage['title'];
$secondSsHeader = get_field('heading_column_2');
$secondSsName = get_field('name_column_2');

$thirdSsImage = get_field('image_column_3');
$thirdSsPicture = $thirdSsImage['sizes']['large'];
$thirdSsImageAlt = $thirdSsImage['alt'];
$thirdSsImageTitle = $thirdSsImage['title'];
$thirdSsHeader = get_field('heading_column_3');
$thirdSsName = get_field('name_column_3');

$fourthSsImage = get_field('image_column_4');
$fourthSsPicture = $fourthSsImage['sizes']['large'];
$fourthSsImageAlt = $fourthSsImage['alt'];
$fourthSsImageTitle = $fourthSsImage['title'];
$fourthSsHeader = get_field('heading_column_4');
$fourthSsName = get_field('name_column_4');

// Our Services Section HomePage
$headingSection = get_field('heading_section');
$title = $headingSection['title'];
$heading = $headingSection['heading'];
$subheading = $headingSection['subheading'];

// First Box
$firstBoxIcon = get_field('icon_box_1');
$firstBoxIconPic = $firstBoxIcon['sizes']['large'];
$firstBoxTitle = get_field('box_title_1');
$firstBoxHeading = get_field('box_heading_1');
// Second Box
$secondBoxIcon = get_field('icon_box_2');
$secondBoxIconPic = $secondBoxIcon['sizes']['large'];
$secondBoxTitle = get_field('box_title_2');
$secondBoxHeading = get_field('box_heading_2');
// Third Box
$thirdBoxIcon = get_field('icon_box_3');
$thirdBoxIconPic = $thirdBoxIcon['sizes']['large'];
$thirdBoxTitle = get_field('box_title_3');
$thirdBoxHeading = get_field('box_heading_3');
// Fourth Box
$fourthBoxIcon = get_field('icon_box_4');
$fourthBoxIconPic = $fourthBoxIcon['sizes']['large'];
$fourthBoxTitle = get_field('box_title_4');
$fourthBoxHeading = get_field('box_heading_4');
// Fifth Box
$fifthBoxIcon = get_field('icon_box_5');
$fifthBoxIconPic = $fifthBoxIcon['sizes']['large'];
$fifthBoxTitle = get_field('box_title_5');
$fifthBoxHeading = get_field('box_heading_5');
// Sixth Box
$sixthBoxIcon = get_field('icon_box_6');
$sixthBoxIconPic = $sixthBoxIcon['sizes']['large'];
$sixthBoxTitle = get_field('box_title_6');
$sixthBoxHeading = get_field('box_heading_6');

// Recognized By Section
$recognized_by_icon_1 = get_field('recognized_by_icon_1');
$recognized_by_icon_1Pic = $recognized_by_icon_1['sizes']['large'];
$recognized_by_icon_2 = get_field('recognized_by_icon_2');
$recognized_by_icon_2Pic = $recognized_by_icon_2['sizes']['large'];
$recognized_by_icon_3 = get_field('recognized_by_icon_3');
$recognized_by_icon_3Pic = $recognized_by_icon_3['sizes']['large'];
$recognized_by_icon_4 = get_field('recognized_by_icon_4');
$recognized_by_icon_4Pic = $recognized_by_icon_4['sizes']['large'];
$clientRetentionRate = get_field('client_retention_rate_percentage');
$footnote = get_field('footnote');
$peopleWeServeLink = get_field('people_we_serve_link');
$averageRating = get_field('average_rating');
$successStoriesLink = get_field('success_stories_link')['url'];
$successStoriesLinkText = get_field('success_stories_link')['title'];
$successStoriesLinkTarget = get_field('success_stories_link')['target'];

?>

    <section id="primary" class="content-area">
        <div id="main" class="site-main" role="main">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; else: endif; ?>

            <!-- Main Block -->
            <section class="height-screen">
                <video id="videoBG" autoplay muted loop playsinline>
                    <source src="<?php echo $video['url'] ?>" type="video/mp4">
                </video>
                <div class="container vert-container height-screen">
                    <div class="row">
                        <div class="home-content pb-5">

                            <h1 class="mb-0 home-header white-text">
                                Your
                                <span id="rotate">
                            <span>money</span> 
                            <span>retirement</span> 
                            <span>family</span>
                        </span>
                                <br/>deserves the best</h1>

                            <?php if ($subheader): ?>
                                <p class="light-weight lead white-text"><?php echo($subheader); ?></p>
                            <?php endif; ?>

                            <?php if ($getStarted): ?>
                                <div class="text-center-sm">
                                    <a href="<?php echo $getStarted; ?>">
                                        <button type="button" class="btn btn-outline">What you should know <i
                                                    class="fas fa-arrow-right pl-2"></i></button>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section><!-- /Main Block -->

            <!-- What We Do Section -->
            <section class="bg-white">
                <div class="container">
                    <div class="row">
                        <div class="py-5">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-md-6 step-text">
                                    <h2 class="block-title teal"><?= __('What we do', 'ab-theme'); ?></h2>
                                    <p class="block-heading mb-2"><?= __('Achieving financial', 'ab-theme'); ?>
                                        <span class="rect-highlight"><?= __('prosperity', 'ab-theme'); ?></span>
                                        <?= __('requires a clear vision.', 'ab-theme'); ?>
                                    </p>
                                    <?php if ($whatWeDoSubheading): ?>
                                        <p class="block-subheading dk-blue-font"><?php echo $whatWeDoSubheading; ?></p>
                                    <?php endif; ?>
                                    <?php if ($yourExperience): ?>
                                        <div class="text-center-sm your-experience-btn pb-4">
                                            <a href="<?php echo $yourExperience; ?>">
                                                <button type="button" class="btn btn-outline">Your Experience <i
                                                            class="fas fa-arrow-right pl-2"></i></button>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="step-img col-12 col-md-6 d-flex justify-content-center">
                                    <div class="financial-prosperity-img-container">
                                        <?php if ($isVideo): ?>
                                            <?php if ($wvideo): ?>
                                                <div class="vc-video-container d-flex align-items-center">
                                                    <?php echo $wvideo; ?>
                                                </div>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php if ($financialProsperityImg): ?>
                                                <img src="<?php echo $fpPicture; ?>" class="financial-prosperity-img">
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- / What We Do Block -->

            <!-- Success Stories Block -->
            <section class="bg-white successStories">
                <div class="py-5 bg-blue">
                    <div class="container pt-5">
                        <div class="row d-flex align-items-center">
                            <div class="col-12 col-lg-8">
                                <h2 class="block-title teal">Success stories</h2>
                                <p class="identify-text mb-2">Who do you identify with?</p>
                                <p class="tell-us-text success-stories block-subheading">
                                    Find a success story similar to your situation.
                                </p>
                            </div>
                        </div>
                        <form action="personal-success-story" method="post">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <select id="current-situation" name="current-situation"
                                            class="situation-select mb-4 pb-2">
                                        <option value="" selected="true" disabled="disabled">My Current Situation
                                        </option>
                                        <?php if ($currentSituation1): ?>
                                            <option data-value1="/archives/1318" data-value2="/archives/1711"
                                                    value="1"><?php echo $currentSituation1; ?></option>
                                        <?php endif; ?>
                                        <?php if ($currentSituation2): ?>
                                            <option data-value1="/archives/1318" data-value2="/archives/1719"
                                                    value="2"><?php echo $currentSituation2; ?></option>
                                        <?php endif; ?>
                                        <?php if ($currentSituation3): ?>
                                            <option data-value1="/archives/1318"
                                                    value="3"><?php echo $currentSituation3; ?></option>
                                        <?php endif; ?>
                                        <?php if ($currentSituation4): ?>
                                            <option data-value1="/archives/1715" data-value2="/archives/1719"
                                                    value="4"><?php echo $currentSituation4; ?></option>
                                        <?php endif; ?>
                                        <?php if ($currentSituation5): ?>
                                            <option data-value1="/archives/1715" data-value2="/archives/1719"
                                                    value="5"><?php echo $currentSituation5; ?></option>
                                        <?php endif; ?>
                                        <?php if ($currentSituation6): ?>
                                            <option value="6"><?php echo $currentSituation6; ?></option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4">
                                    <select id="looking-for" name="looking-for" class="situation-select mb-4 pb-2">
                                        <option value="" selected="true" disabled="disabled">What I'm Looking For
                                        </option>
                                        <?php if ($lookingFor1): ?>
                                            <option data-value1="/archives/1318" data-value2="/archives/1719"
                                                    value="1"><?php echo $lookingFor1; ?></option>
                                        <?php endif; ?>
                                        <?php if ($lookingFor2): ?>
                                            <option data-value1="/archives/1719"
                                                    value="2"><?php echo $lookingFor2; ?></option>
                                        <?php endif; ?>
                                        <?php if ($lookingFor3): ?>
                                            <option data-value1="/archives/1711"
                                                    value="3"><?php echo $lookingFor3; ?></option>
                                        <?php endif; ?>
                                        <?php if ($lookingFor4): ?>
                                            <option value="4"><?php echo $lookingFor4; ?></option>
                                        <?php endif; ?>
                                        <?php if ($lookingFor5): ?>
                                            <option data-value1="/archives/1318"
                                                    value="5"><?php echo $lookingFor5; ?></option>
                                        <?php endif; ?>
                                        <?php if ($lookingFor6): ?>
                                            <option data-value1="/archives/1715"
                                                    value="6"><?php echo $lookingFor6; ?></option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 find-results-col">
                                    <button disabled id="submit" name="submit" type="submit" value="submit"
                                            class="btn btn-outline mb-2 find-results">Find Results <i
                                                class="fas fa-arrow-right pl-2"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <div class="names-details">Names and identifying details have been changed to protect
                                    the privacy of individuals.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-12 col-md-6 col-lg-3 success-stories-item">
                                <div class="ss-container mx-auto">
                                    <?php if ($firstSsImage): ?>
                                        <a href="<?php echo $link1; ?>">
                                            <div class="ss-image-container mx-auto">
                                                <img class="ss-img-fluid" alt="<?php echo $firstSsImageAlt; ?>"
                                                     src="<?php echo $firstSsPicture; ?>">
                                            </div>
                                        </a>
                                        <?php if ($firstSsHeader): ?>
                                            <a href="<?php echo $link1; ?>">
                                                <div class="success-story-header">
                                                    <?php echo $firstSsHeader; ?>
                                                </div>
                                            </a>

                                        <?php endif; ?>
                                        <?php if ($firstSsName): ?>
                                            <div class="success-story-name">
                                                <?php echo $firstSsName; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php $firstSsListItem1 = get_field('first_column_list_item_1'); ?>
                                        <?php if ($firstSsListItem1): ?>
                                            <div class='row sm-med-px-3'>
                                                <div class="col-2 sm-med-pr">
                                                    <i class="fa fa-check ss-check"></i>
                                                </div>
                                                <div class="col-9 px-0">
                                                    <p class="success-story-list mb-0"><?php echo $firstSsListItem1 ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php $firstSsListItem2 = get_field('first_column_list_item_2'); ?>
                                        <?php if ($firstSsListItem2): ?>
                                            <div class='row sm-med-px-3'>
                                                <div class="col-2 sm-med-pr">
                                                    <i class="fa fa-check ss-check"></i>
                                                </div>
                                                <div class="col-9 px-0">
                                                    <p class="success-story-list mb-0"><?php echo $firstSsListItem2 ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php $firstSsListItem3 = get_field('first_column_list_item_3'); ?>
                                        <?php if ($firstSsListItem3): ?>
                                            <div class='row sm-med-px-3'>
                                                <div class="col-2 sm-med-pr">
                                                    <i class="fa fa-check ss-check"></i>
                                                </div>
                                                <div class="col-9 px-0">
                                                    <p class="success-story-list"><?php echo $firstSsListItem3 ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="ss-learn-more-wrapper">
                                            <a class="ss-learn-more teal" href="<?php echo $link1; ?>">
                                                <?= __('Learn more', 'ab-theme'); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3 success-stories-item">
                                <div class="ss-container mx-auto">
                                    <?php if ($secondSsImage): ?>
                                        <a href="<?php echo $link2; ?>">
                                            <div class="ss-image-container-2 mx-auto">
                                                <img class="ss-img-fluid" alt="<?php echo $secondSsImageAlt; ?>"
                                                     src="<?php echo $secondSsPicture; ?>">
                                            </div>
                                        </a>
                                        <?php if ($secondSsHeader): ?>
                                            <a href="<?php echo $link2; ?>">
                                                <div class="success-story-header">
                                                    <?php echo $secondSsHeader; ?>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($secondSsName): ?>
                                            <div class="success-story-name">
                                                <?php echo $secondSsName; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php $secondSsListItem1 = get_field('second_column_list_item_1'); ?>
                                        <?php if ($secondSsListItem1): ?>
                                            <div class='row sm-med-px-3'>
                                                <div class="col-2 sm-med-pr">
                                                    <i class="fa fa-check ss-check"></i>
                                                </div>
                                                <div class="col-9 px-0">
                                                    <p class="success-story-list mb-0"><?php echo $secondSsListItem1 ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php $secondSsListItem2 = get_field('second_column_list_item_2'); ?>
                                        <?php if ($secondSsListItem2): ?>
                                            <div class='row sm-med-px-3'>
                                                <div class="col-2 sm-med-pr">
                                                    <i class="fa fa-check ss-check"></i>
                                                </div>
                                                <div class="col-9 px-0">
                                                    <p class="success-story-list mb-0"><?php echo $secondSsListItem2 ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php $secondSsListItem3 = get_field('second_column_list_item_3'); ?>
                                        <?php if ($secondSsListItem3): ?>
                                            <div class='row sm-med-px-3'>
                                                <div class="col-2 sm-med-pr">
                                                    <i class="fa fa-check ss-check"></i>
                                                </div>
                                                <div class="col-9 px-0">
                                                    <p class="success-story-list"><?php echo $secondSsListItem3 ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="ss-learn-more-wrapper">
                                            <a class="ss-learn-more teal" href="<?php echo $link2; ?>">
                                                <?= __('Learn more', 'ab-theme'); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3 success-stories-item">
                                <div class="ss-container mx-auto">
                                    <?php if ($thirdSsImage): ?>
                                        <a href="<?php echo $link3; ?>">
                                            <div class="ss-image-container-3 mx-auto">
                                                <img class="ss-img-fluid" alt="<?php echo $thirdSsImageAlt; ?>"
                                                     src="<?php echo $thirdSsPicture; ?>">
                                            </div>
                                        </a>
                                        <?php if ($thirdSsHeader): ?>
                                            <a href="<?php echo $link3; ?>">
                                                <div class="success-story-header">
                                                    <?php echo $thirdSsHeader; ?>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($thirdSsName): ?>
                                            <div class="success-story-name">
                                                <?php echo $thirdSsName; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php $thirdSsListItem1 = get_field('third_column_list_item_1'); ?>
                                        <?php if ($thirdSsListItem1): ?>
                                            <div class='row sm-med-px-3'>
                                                <div class="col-2 sm-med-pr">
                                                    <i class="fa fa-check ss-check"></i>
                                                </div>
                                                <div class="col-9 px-0">
                                                    <p class="success-story-list mb-0"><?php echo $thirdSsListItem1 ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php $thirdSsListItem2 = get_field('third_column_list_item_2'); ?>
                                        <?php if ($thirdSsListItem2): ?>
                                            <div class='row sm-med-px-3'>
                                                <div class="col-2 sm-med-pr">
                                                    <i class="fa fa-check ss-check"></i>
                                                </div>
                                                <div class="col-9 px-0">
                                                    <p class="success-story-list mb-0"><?php echo $thirdSsListItem2 ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php $thirdSsListItem3 = get_field('third_column_list_item_3'); ?>
                                        <?php if ($thirdSsListItem3): ?>
                                            <div class='row sm-med-px-3'>
                                                <div class="col-2 sm-med-pr">
                                                    <i class="fa fa-check ss-check"></i>
                                                </div>
                                                <div class="col-9 px-0">
                                                    <p class="success-story-list"><?php echo $thirdSsListItem3 ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="ss-learn-more-wrapper">
                                            <a class="ss-learn-more teal" href="<?php echo $link3; ?>">
                                                <?= __('Learn more', 'ab-theme'); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3 success-stories-item">
                                <div class="ss-container mx-auto">
                                    <?php if ($fourthSsImage): ?>
                                        <a href="<?php echo $link4; ?>">
                                            <div class="ss-image-container-4 mx-auto">
                                                <img class="ss-img-fluid" alt="<?php echo $fourthSsImageAlt; ?>"
                                                     src="<?php echo $fourthSsPicture; ?>">
                                            </div>
                                        </a>
                                        <?php if ($fourthSsHeader): ?>
                                            <a href="<?php echo $link4; ?>">
                                                <div class="success-story-header">
                                                    <?php echo $fourthSsHeader; ?>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($fourthSsName): ?>
                                            <div class="success-story-name">
                                                <?php echo $fourthSsName; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php $fourthSsListItem1 = get_field('fourth_column_list_item_1'); ?>
                                        <?php if ($fourthSsListItem1): ?>
                                            <div class='row sm-med-px-3'>
                                                <div class="col-2 sm-med-pr">
                                                    <i class="fa fa-check ss-check"></i>
                                                </div>
                                                <div class="col-9 px-0">
                                                    <p class="success-story-list mb-0"><?php echo $fourthSsListItem1 ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php $fourthSsListItem2 = get_field('fourth_column_list_item_2'); ?>
                                        <?php if ($fourthSsListItem2): ?>
                                            <div class='row sm-med-px-3'>
                                                <div class="col-2 sm-med-pr">
                                                    <i class="fa fa-check ss-check"></i>
                                                </div>
                                                <div class="col-9 px-0">
                                                    <p class="success-story-list mb-0"><?php echo $fourthSsListItem2 ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php $fourthSsListItem3 = get_field('fourth_column_list_item_3'); ?>
                                        <?php if ($fourthSsListItem3): ?>
                                            <div class='row sm-med-px-3'>
                                                <div class="col-2 sm-med-pr">
                                                    <i class="fa fa-check ss-check"></i>
                                                </div>
                                                <div class="col-9 px-0">
                                                    <p class="success-story-list"><?php echo $fourthSsListItem3 ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="ss-learn-more-wrapper">
                                            <a class="ss-learn-more teal" href="<?php echo $link4; ?>">
                                                <?= __('Learn more', 'ab-theme'); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- / Success Stories Block -->

            <!-- Our Services Block -->
            <section class="bg-white py-5">
                <div class="container">
                    <div class="mb-4 row d-flex justify-content-center our-services-container">
                        <?php if ($title): ?>
                            <div class="w-100">
                                <h2 class="block-title teal"><?php echo $title; ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if ($heading): ?>
                            <p class="mb-1 block-heading"><?php echo $heading; ?></p>
                        <?php endif; ?>
                        <?php if ($subheading): ?>
                            <p class="block-subheading our-services-subheading dk-blue-font"><?php echo $subheading; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="bg-white">
                        <div class="row d-flex justify-content-center mx-auto box__wrapper">
                            <?php if (have_rows('our_services')): ?>
                                <?php while (have_rows('our_services')): the_row();
                                    $boxIcon = get_sub_field('icon_box');
                                    $boxTitle = get_sub_field('box_title');
                                    $boxHeading = get_sub_field('box_heading');
                                    $boxLink = get_sub_field('box_link');
                                    ?>
                                    <div class="col-12 col-md-6 col-lg-4 box-border-shadow our-services-box">
                                        <div class="mx-auto">
                                            <a class="our-services-box-link" href="<?= esc_url($boxLink['url']); ?>"
                                               target="<?= esc_attr($boxLink['target']) ?>"></a>
                                            <div class="box-padding">
                                                <?php if ($boxIcon): ?>
                                                    <div class="icon-container mb-4">
                                                        <img class="img-fluid" src="<?php echo $boxIcon['url']; ?>"/>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($boxTitle): ?>
                                                    <p class="grey block-title"><?php echo $boxTitle; ?></p>
                                                <?php endif; ?>
                                                <?php if ($boxHeading): ?>
                                                    <h2 class="mb-2"><?php echo $boxHeading; ?></h2>
                                                <?php endif; ?>
                                                <div class="success-story-name">
                                                    <div class="teal"><?= __('Learn More', 'ab-theme'); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </section><!-- / Our Services Block -->

            <!-- Recognized By Block -->
     
            <!-- /Recognized By Block -->
            <?php $testimonials_section = get_field('testimonials');
            if($testimonials_section) : 
            
                $testimonials_title = $testimonials_section['title']?:false;
                $testimonials_subtitle = $testimonials_section['subtitle']?:false;
                $testimonials_text = $testimonials_section['text']?:false;
                $testimonials_link = $testimonials_section['link']?:false;
                $testimonials_image = $testimonials_section['image']?:false;
                $testimonials_list = $testimonials_section['testimonials_list']?:false;
            ?>

            <section class="home-testimonials linear-gradient">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="home-testimonials-header">
                                <?php if($testimonials_subtitle): ;?>
                                <p class="home-testimonials-header__subtitle teal"><?php echo $testimonials_subtitle?></p>
                                <?php endif ;?>
                                <?php if($testimonials_title): ;?>
                                <h2 class="home-testimonials-header__title"><?php echo $testimonials_title?></h2>
                                <?php endif ;?>
                                <?php if($testimonials_text): ;?>
                                <p class="home-testimonials-header__text"><?php echo $testimonials_text?></p>
                                <?php endif ;?>
                                <?php if($testimonials_link): ;?>
                                <a href="<?php echo $testimonials_link['url']?>" class="home-testimonials-header__link pinegrove-button"><?php echo $testimonials_link['title']?></a>
                                <?php endif ;?>
                                <?php if($testimonials_title): ;?>
                                <picture>
                                    <img class="home-testimonials-header__image" src="<?php echo $testimonials_image['url']?>" alt="<?php echo $testimonials_image['title']?:$testimonials_image['title']?>">
                                </picture>
                                <?php endif ;?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?php if($testimonials_list): ;?>
                            <div class="home-testimonials-list">
                                <div class="swiper home-testimonials-swiper">
                                
                                <div class="swiper-wrapper">
                                    <?php foreach ($testimonials_list as $key => $review):?>
                                
                                        <div class="swiper-slide">
                                            
                                            <div class="swiper-slider-review">
                                                <?php if($review['add_image_next_to_review']): ;?>
                                                    <div class="swiper-slider-review__image--wrapper <?php echo $review['image_on_side']?>">
                                                        <img class="swiper-slider-review__image" src="<?php echo $review['image']['url']?>" alt="<?php echo $review['image']['alt']?: $review['image']['title']?>">
                                                        <?php if($review['add_content_to_box_to_image']): ;?>
                                                            <div class="swiper-slider-review__image--content">
                                                                <?php if($review['image_content_subtitle']): ;?>
                                                                <p class="swiper-slider-review__image__subtitle teal"><?php echo $review['image_content_subtitle'] ;?></p>
                                                                <?php endif ;?>
                                                                <?php if($review['image_content_title']): ;?>
                                                                <p class="swiper-slider-review__image__title"><?php echo $review['image_content_title'] ;?></p>
                                                                <?php endif ;?>
                                                                <?php if($review['image_content_text']): ;?>
                                                                <p class="swiper-slider-review__image__text"><?php echo $review['image_content_text'] ;?></p>
                                                                <?php endif ;?>

                                                            </div>

                                                        <?php endif ?>
                                                    </div>
                                                <?php endif ;?>
                                                <div class="swiper-slider-review-content">
                                                    <p class="quote-icon"><svg width="66" height="54" viewBox="0 0 66 54" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M65.8156 7.82069C61.3911 11.2966 57.9497 14.8345 55.4916 18.4345C53.1564 21.9104 51.9888 25.2 51.9888 28.3034C52.4804 28.0552 53.095 27.931 53.8324 27.931C54.6927 27.8069 55.4302 27.7448 56.0447 27.7448C58.8715 27.7448 61.2067 28.9241 63.0503 31.2828C65.0168 33.5172 66 36.3103 66 39.6621C66 43.7586 64.648 47.1724 61.9441 49.9035C59.2402 52.6345 55.8603 54 51.8045 54C47.5028 54 44.1229 52.4483 41.6648 49.3448C39.2067 46.1172 37.9776 41.8345 37.9776 36.4966C37.9776 30.1655 39.8827 23.8966 43.6927 17.6897C47.5028 11.4828 53.095 5.58621 60.4693 0L65.8156 7.82069ZM27.838 7.82069C23.4134 11.2966 19.9721 14.8345 17.514 18.4345C15.1788 21.9104 14.0112 25.2 14.0112 28.3034C14.5028 28.0552 15.1173 27.931 15.8547 27.931C16.7151 27.8069 17.4525 27.7448 18.067 27.7448C20.8939 27.7448 23.229 28.9241 25.0726 31.2828C27.0391 33.5172 28.0223 36.3103 28.0223 39.6621C28.0223 43.7586 26.6704 47.1724 23.9665 49.9035C21.2626 52.6345 17.8827 54 13.8268 54C9.52514 54 6.14525 52.4483 3.68715 49.3448C1.22905 46.1172 0 41.8345 0 36.4966C0 30.1655 1.90503 23.8966 5.71508 17.6897C9.52514 11.4828 15.1173 5.58621 22.4916 0L27.838 7.82069Z" fill="#00B3AA"/>
</svg>
</p>
                                                    <?php if($review['review']): ;?>
                                                        <p class="swiper-slider-review-content__text"><?php echo $review['review'] ;?></p>
                                                    <?php endif ;?>
                                                    <div class="swiper-slider-review-content-footer">
                                                        <div class="swiper-slider-review-content-footer__name--wrapper">
                                                            <?php if($review['stars']): ;?>
                                                                <p class="swiper-slider-review-content-footer__grade">
                                                                    <?php $emptyGrade = get_field('grade_empty_image','option'); ;?>
                                                                    <?php $fullGrade = get_field('grade_full_image','option'); ;?>
                                                                    <img src="<?php echo $emptyGrade['url']?>" alt="" class="grade-empty">
                                                                    <img src="<?php echo $fullGrade['url']?>" alt="" class="grade-full" data-grade="<?php echo $review['stars'] ;?>">
                                                                </p>
                                                            <?php endif ;?>
                                                            <?php if($review['person']): ;?>
                                                            <p class="swiper-slider-review-content-footer__name"><?php echo $review['person'] ;?></p>
                                                            <?php endif ;?>
                                                        </div>
                                                        <?php if($review['review_link']) :;?>
                                                      
                                                            <a href="<?php echo $review['review_link']['url']?>" class="swiper-slider-review-content-footer__link">
                                                            <?php if($review['review_link_image']): ;?>
                                                                <img src="<?php echo $review['review_link_image']['url']?>" alt="<?php echo $review['review_link_image']['alt']?:$review['review_link_image']['title']?>">
                                                            <?php else : ;?>
                                                            <?php echo $review['review_link']['title']?>
                                                            <?php endif ;?>
                                                            </a>
                                                        <?php endif ;?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ;?>
                                </div>
                                </div>
                                <!-- If we need pagination -->
                                <!-- <div class="swiper-pagination"></div> -->
                                <div class="swiper-buttons">
                                    <div class="home-testimonials-swiper-button-prev swiper-button-prev"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M-0.000392052 12.0382C0.00049108 12.3787 0.0734853 12.7151 0.213788 13.0254C0.354091 13.3356 0.558515 13.6127 0.813607 13.8382L11.9926 23.6772C12.2814 23.9136 12.6506 24.0286 13.0226 23.9981C13.3945 23.9676 13.7401 23.7938 13.9864 23.5135C14.2328 23.2332 14.3607 22.8682 14.3432 22.4954C14.3257 22.1226 14.1641 21.7712 13.8926 21.5152L5.25561 13.9152C5.21773 13.8816 5.19095 13.8373 5.17882 13.7881C5.16668 13.7389 5.16976 13.6873 5.18765 13.6399C5.20553 13.5925 5.23739 13.5517 5.27899 13.5228C5.32058 13.4939 5.36997 13.4784 5.42061 13.4782L22.5346 13.4782C22.9165 13.4782 23.2828 13.3265 23.5528 13.0564C23.8229 12.7864 23.9746 12.4201 23.9746 12.0382C23.9746 11.6563 23.8229 11.29 23.5528 11.02C23.2828 10.7499 22.9165 10.5982 22.5346 10.5982L5.42361 10.5982C5.37299 10.5977 5.3237 10.5819 5.28222 10.5529C5.24073 10.5239 5.20898 10.4831 5.19114 10.4357C5.17329 10.3883 5.17019 10.3367 5.18223 10.2875C5.19427 10.2383 5.22089 10.194 5.25861 10.1602L13.8956 2.56019C14.0467 2.43818 14.1715 2.28689 14.2626 2.11541C14.3536 1.94392 14.4091 1.75579 14.4256 1.56233C14.4421 1.36886 14.4193 1.17406 14.3586 0.989627C14.2978 0.805198 14.2004 0.634953 14.0722 0.489133C13.944 0.343312 13.7876 0.224925 13.6125 0.141093C13.4374 0.0572614 13.2471 0.00971316 13.0531 0.0013113C12.8591 -0.00709055 12.6654 0.0238276 12.4837 0.0922022C12.302 0.160577 12.1359 0.265 11.9956 0.39919L0.814606 10.2382C0.559233 10.4636 0.354552 10.7405 0.214068 11.0508C0.0735844 11.3611 0.000489113 11.6976 -0.000392052 12.0382Z" fill="#002440"/>
</svg>
</div>
                                    <div class="home-testimonials-swiper-button-next swiper-button-next"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M23.975 11.9647C23.9741 11.6242 23.9011 11.2878 23.7608 10.9775C23.6205 10.6673 23.4161 10.3903 23.161 10.1647L11.982 0.32574C11.6932 0.0893496 11.324 -0.0257026 10.952 0.00483124C10.5801 0.035365 10.2345 0.2091 9.98819 0.489421C9.74184 0.769742 9.61393 1.13475 9.63143 1.50753C9.64893 1.88031 9.81047 2.23173 10.082 2.48774L18.719 10.0877C18.7569 10.1213 18.7837 10.1657 18.7958 10.2148C18.8079 10.264 18.8048 10.3157 18.787 10.3631C18.7691 10.4104 18.7372 10.4512 18.6956 10.4801C18.654 10.509 18.6046 10.5246 18.554 10.5247H1.44C1.05809 10.5247 0.691819 10.6765 0.421766 10.9465C0.151714 11.2166 0 11.5828 0 11.9647C0 12.3467 0.151714 12.7129 0.421766 12.983C0.691819 13.253 1.05809 13.4047 1.44 13.4047H18.551C18.6016 13.4052 18.6509 13.421 18.6924 13.45C18.7339 13.479 18.7656 13.5199 18.7835 13.5672C18.8013 13.6146 18.8044 13.6663 18.7924 13.7154C18.7803 13.7646 18.7537 13.809 18.716 13.8427L10.079 21.4427C9.92795 21.5647 9.80313 21.716 9.71206 21.8875C9.62098 22.059 9.56552 22.2471 9.54902 22.4406C9.53253 22.6341 9.55532 22.8289 9.61604 23.0133C9.67677 23.1977 9.77416 23.368 9.90237 23.5138C10.0306 23.6596 10.187 23.778 10.3621 23.8618C10.5372 23.9457 10.7275 23.9932 10.9215 24.0016C11.1155 24.01 11.3092 23.9791 11.4909 23.9107C11.6726 23.8424 11.8387 23.7379 11.979 23.6037L23.16 13.7647C23.4154 13.5394 23.6201 13.2624 23.7605 12.9521C23.901 12.6419 23.9741 12.3053 23.975 11.9647Z" fill="#002440"/>
</svg>
</div>
                                </div>
                                <!-- If we need navigation buttons -->
                            

                                <!-- If we need scrollbar -->
                                <!-- <div class="swiper-scrollbar"></div> -->
                            </div>
                            <?php endif ;?>
                        </div>
                    </div>
                </div>
                                
            </section>
            <?php endif ;?>
            <!-- H.E.A.L.T.H. guidebook -->
                <?php echo get_template_part('template-parts/newsletter-sample') ;?>
            <!-- /H.E.A.L.T.H. guidebook -->


        </div><!-- #main -->
    </section><!-- #primary -->

<?php
// get_sidebar();
get_footer();
