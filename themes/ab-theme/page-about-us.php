<?php
/**
* Template Name: About Us
 */

get_header(); 

$backgroundImg = get_field('background_image');
$backgroundPic = $backgroundImg['sizes']['large'];
$heading = get_field('heading');
$subheading = get_field('subheading');
$image1 = get_field('image_1');
$picture1 = $image1['sizes']['large'];
$image2 = get_field('image_2');
$picture2 = $image2['sizes']['large'];

$takeActionTitle = get_field('take_action_title');
$takeActionHeading = get_field('take_action_heading');
$takeActionSubheading = get_field('take_action_subheading');
$sacImage = get_field('schedule_a_call_image');
$sacPicture = $sacImage['sizes']['large'];
$sacLink = get_field('schedule_a_call_link');
$dogImage = get_field('download_our_guide_image');
$dogPicture = $dogImage['sizes']['large'];
$guideLink = get_field('guide_link');

$historySuperscription = get_field('history_superscription');
$historyTitle = get_field('history_title');
$historyDesc = get_field('history_description');
$historyLink = get_field('history_link');
$historyImage = get_field('history_image');
?>

	<section id="primary" class="content-area">
		<div id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

			<!-- Main Block -->
			<section 
				class="section-padding bottom-padding">
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex align-items-center about-us-col-text about-us-text-block">
                        <div class="about-us-text-container">
                            <p class="teal block-title general-ss-name">About Us</p>
                            <?php if($heading): ?>
                                <h1 class="main-heading dk-teal-font"> <?php echo $heading;?></h1>
                            <?php endif;?>
                            <?php if($subheading): ?>
                                <p class="ltbl-text main-subheading lead font-weight-lighter"><?php echo $subheading;?></p>
                            <?php endif;?>
							<div class="text-center-sm sm-btn-padding">
								<a href="/our-process#health-stress-test">
									<button type="button" class="btn btn-outline"><?= __('Learn more about Our Process', 'ab-theme'); ?></button>
								</a>
							</div>
                        </div>
                    </div>
					<div class="col-12 col-lg-6 about-us-col-img"
						style="
							background-image: url('<?php echo $backgroundPic;?>'); 
							background-repeat: no-repeat;
							background-position: right;
							background-size: cover;"
						>
						<div class="row my-5">
							<div class="col-6">
								<div class="about-us-main-img-container d-flex justify-content-end">
									<?php if($image1): ?>
										<img src="<?php echo $picture1;?>" class="about-us-main-img ">
									<?php endif;?> 
								</div>
							</div>
							<div class="col-6">
								<div class="about-us-main-img-container d-flex justify-content-end mt-10">
									<?php if($image2): ?>
										<img src="<?php echo $picture2;?>" class="about-us-main-img mr-45">
									<?php endif;?> 
								</div>
							</div>
						</div>
                    </div>
                </div>
            </section>
            <!-- / Main Block -->
			<section id="history" class="history">
				 <div class="container">
					<div class="row">
						<div class="col-lg-6 order-1 order-lg-2 ">
							<div class="history-content">
								<?php if($historySuperscription): ;?>
								<p class="history__supserscription teal block-title"><?php echo $historySuperscription ;?></p>
								<?php endif ;?>
								<?php if($historyTitle): ;?>
								<p class="history__title"><?php echo $historyTitle ;?></p>
								<?php endif ;?>
								<?php if($historyDesc): ;?>
								<div class="history__desc"><?php echo $historyDesc ;?></div>
								<?php endif ;?>
								<?php if($historyLink && isset($historyLink['title'])): ;?>
								<a href="<?php echo $historyLink['url'] ;?>" class="rightAction__barContact ml-0 history__link"><?php echo $historyLink['title'] ;?></a>
								<?php endif ;?>
							</div>
							</div>
							<?php if($historyImage): ;?>
							<div class="col-lg-6 order-lg-1  mb-3 mb-lg-0">
										<img src="<?php echo $historyImage['url']?>" alt="<?php echo $historyImage['alt']?:$historyImage['title']?>">
							</div>
							<?php endif ;?>
						</div>
					</div>
		
			</section>
			<!-- Who We Help Section -->
			<section id="who-we-help" class="py-3 py-lg-4" class="who-we-help">
                <div class="container">
                    <h2 class="teal text-center block-title ">Who We Help</h2> 
										<?php if( have_rows('who_we_help_blocks') ): ?>
											<div class="who-we-help-list">
											<?php while( have_rows('who_we_help_blocks') ): the_row(); 
													$whoWeHelpImage = get_sub_field('image');
													$whoWeHelpHeading = get_sub_field('heading');
													$whoWeHelpSubheading = get_sub_field('description');
													$whoWeHelpLink = get_sub_field('link');
													$whoWeHelpCaseStudy= get_sub_field('case_study_link');
													
													?>
													
														<div class="who-we-help-list-item">
															
																<div class="who-we-help-img-container about-us-img-container mb-3">
																	<?php if($whoWeHelpImage): ?>
																		<img src="<?php echo $whoWeHelpImage['sizes']['medium_large'];?>" class="about-us-img">
																	<?php endif;?> 
																</div>
															
													
																<div class="who-we-help-content">
																	<?php if($whoWeHelpHeading): ?>
																			<h2 class="secondary-heading block-heading bottom-margin-0 dk-teal-font mb-0"> <?php echo $whoWeHelpHeading;?></h2>
																	<?php endif;?>
																	<?php if($whoWeHelpSubheading): ?>
																			<div class="ltbl-text lead font-weight-lighter who-we-help-desc"><?php echo $whoWeHelpSubheading;?></div>
																	<?php endif;?>
																	<?php if($whoWeHelpLink || $whoWeHelpCaseStudy) :;?>
																		<div class="who-we-help-links">
																			<?php if($whoWeHelpLink && isset($whoWeHelpLink['title'])): ;?>
																			<a href="<?php echo $whoWeHelpLink['url'] ;?>" class="rightAction__barContact ml-0 who-we-help__link"><?php echo $whoWeHelpLink['title'] ;?></a>
																			<?php endif;?>
																			
																			<?php if($whoWeHelpCaseStudy && isset($whoWeHelpCaseStudy['title'])): ;?>
																			<a href="<?php echo $whoWeHelpCaseStudy['url'] ;?>" class="who-we-help__link--case-study"><?php echo $whoWeHelpCaseStudy['title'] ;?></a>
																			
																			<?php endif;?>
																		</div>
																	<?php endif ;?>
																</div>
														
														</div>
											<?php endwhile; ?>
											</div>
									<?php endif; ?>
										

				

			

                </div>
            </section>
			<!-- Who We Help Section -->

			<!-- Take Action Section -->
			<section class="py-3 py-lg-5">
                <div class="container text-center">
                    <?php if($takeActionTitle): ?>
                        <h2 class="teal block-title general-ss-name"><?php echo $takeActionTitle;?></h2> 
                    <?php endif;?>
                    <?php if($takeActionHeading): ?>
                        <p class="secondary-heading block-heading mb-3"><?php echo $takeActionHeading;?></p> 
                    <?php endif;?>
                    <?php if($takeActionSubheading): ?>
                        <p class="take-action-subheading secondary-subheading mx-auto lead font-weight-lighter ltbl-text"><?php echo $takeActionSubheading;?></p> 
                    <?php endif;?>
					<div class="row">
						<div class="col-12 col-md-6">
							<?php if($sacImage): ?>
								<a href="<?php echo $sacLink;?>">
									<div class="overlay-container mb-3">
										<div class="take-action-img-container call-to-action-overlay about-us-img-container">
											<img src="<?php echo $sacPicture;?>" class="about-us-call-to-action">
										</div>
										<div class="bottom-left">
											<p class="text-overlay">Schedule a call</p>
										</div>
									</div>
								</a>
							<?php endif;?> 
						</div>
						<div class="col-12 col-md-6">
							<?php if($dogImage): ?>
								<a href="<?php echo $guideLink;?>" download>
									<div class="overlay-container mb-3">
										<div class="text-decoration-none take-action-img-container call-to-action-overlay about-us-img-container">
											<img src="<?php echo $dogPicture;?>" class="about-us-call-to-action">
											<div class="bottom-left text-decoration-none">
												<p class="text-overlay">Download our guide</p>
											</div>
											
										</div>
									</div>
								</a>
							<?php endif;?> 
						</div>
					</div>
                </div>
            </section>
			<!-- / Take Action Section -->

			<?php echo get_template_part('template-parts/newsletter-sample');?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
