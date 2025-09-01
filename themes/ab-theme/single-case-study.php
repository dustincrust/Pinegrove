<?php
/**
 * The template for displaying all posts with the category "Case Study"
 *
 */
$image_1 = get_field('image_1');
$picture_1 = $image_1['sizes']['large'];
$name_1 = get_field('name_1');
$quote_1 = get_field('main_quote_1');
$goal1_1 = get_field('goal_1-1');
$goal1_2 = get_field('goal_1-2');
$goal1_3 = get_field('goal_1-3');
$goal1_4 = get_field('goal_1-4');
$goal1_5 = get_field('goal_1-5');
$about1_1 = get_field('about_1-1');
$about1_2 = get_field('about_1-2');
$about1_3 = get_field('about_1-3');
$about1_4 = get_field('about_1-4');
$area_of_focus1_1 = get_field('area_of_focus_1-1');
$area_of_focus1_2 = get_field('area_of_focus_1-2');
$area_of_focus1_3 = get_field('area_of_focus_1-3');

// How we helped section
$logo = get_field('pine_grove_logo');
$logoPic = isset($logo['sizes']['large'])? $logo['sizes']['large']:'';
$step1 = get_field('step_1');
$step2 = get_field('step_2');
$step3 = get_field('step_3');
$step4 = get_field('step_4');
$results = get_field('the_result');

// Resources
$videoHeading = get_field('video_heading');
$videoSubHeading = get_field('video_subheading');
$video = get_field('video');
$guide = get_field('guide_download');
$guideHeading = get_field('guide_heading');
$guideSubHeading = get_field('guide_subheading');
$guideImg = get_field('guide_image');
$guidePic = $guideImg['sizes']['large'];

get_header(); ?>

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content-notitle' );

	endwhile; // End of the loop.
	?>

	<section class="w-95 mx-auto">
		<div class="row w-80 mx-auto">
			<div class="col-12 col-md-4 d-flex justify-content-center">
				<div class="success-story-image-container">
					<?php if($image_1): ?>
						<img src="<?php echo $picture_1;?>" class="success-story-image">
					<?php endif;?> 
				</div>
			</div>
			<div class="col-12 col-md-8 pb-5">
				<?php if($name_1): ?>
					<p class="teal block-title general-ss-name"><?php echo $name_1 ;?></p>
				<?php endif;?>
				<?php if($quote_1): ?>
					<h1 class="block-heading font-weight-lighter"><?php echo $quote_1;?></h1>
				<?php endif;?>

				<!-- Goals -->
				<div class="pb-3">
					<?php if($goal1_1 || $goal1_2 || $goal1_3):?>
						<h3 class="goals">Goals</h3>
						<ul class="success-story-ul">
							<?php if($goal1_1):?>
								<li><?php echo $goal1_1;?></li>
							<?php endif;?>
							<?php if($goal1_2):?>
								<li><?php echo $goal1_2;?></li>
							<?php endif;?>
							<?php if($goal1_3):?>
								<li><?php echo $goal1_3;?></li>
							<?php endif;?>
							<?php if($goal1_4):?>
								<li><?php echo $goal1_4;?></li>
							<?php endif;?>
							<?php if($goal1_5):?>
								<li><?php echo $goal1_5;?></li>
							<?php endif;?>
						</ul>
					<?php endif;?>
				</div>
				<!-- / Goals -->

				<!-- About -->
				<div class="pb-3">
					<?php if($about1_1 || $about1_2 || $about1_3):?>
						<h3 class="goals">About</h3>
						<ul class="success-story-ul">
							<?php if($about1_1):?>
								<li><?php echo $about1_1;?></li>
							<?php endif;?>
							<?php if($about1_2):?>
								<li><?php echo $about1_2;?></li>
							<?php endif;?>
							<?php if($about1_3):?>
								<li><?php echo $about1_3;?></li>
							<?php endif;?>
							<?php if($about1_4):?>
								<li><?php echo $about1_4;?></li>
							<?php endif;?>
						</ul>
					<?php endif;?>
				</div>
				<!-- / About -->

				<!-- Areas of Focus -->
				<div class="pb-3">
					<?php if($area_of_focus1_1 || $area_of_focus1_2 || $area_of_focus1_3):?>
						<h3 class="goals">Areas of Focus</h3>
						<ul class="success-story-ul">
							<?php if($area_of_focus1_1):?>
								<li><?php echo $area_of_focus1_1;?></li>
							<?php endif;?>
							<?php if($area_of_focus1_2):?>
								<li><?php echo $area_of_focus1_2;?></li>
							<?php endif;?>
							<?php if($area_of_focus1_3):?>
								<li><?php echo $area_of_focus1_3;?></li>
							<?php endif;?>
						</ul>
					<?php endif;?>
				</div>
				<!-- Areas of Focus -->
				<div class="pb-3">
					<a href="/contact" class="pinegrove-button">Contact Us</a>
					</div>
			</div>
		</div>
	</section>

	<!-- How We Helped -->
	<?php if($step1):?>
		<section class="container py-5 bg-B2E8E5">
			<div class="row mb-4">
				<div class="col-3 pg-logo-col">
					<?php if($logo):?>
						<div class="pg-logo-container">
							<img class="pg-logo" src="<?php echo $logoPic;?>"/>
						</div> 
					<?php endif;?>
				</div>
				<div class="col-9 d-flex align-items-center how-we-helped-col">
					<h1 class="baskerville dk-teal-font heading-how-we-helped mb-0">How We Helped</h1>
				</div>
			</div>

			<!-- Step 1 -->
			<section>
				<div class="row">
					<?php if($step1):?>
						<div class="col-3 col-md-2">
							<h1 class="translucent-grn step-number">1</h1>
						</div>
						<div class="col-9 col-md-10">
							<p class="goals">Step 1</p>
							<div class="ltbl-text how-we-helped-subheading">
								<?php echo $step1;?>
							</div>
						</div>
					<?php endif;?>
				</div>
			</section>
			<!-- / Step 1 -->

			<!-- Step 2 -->
			<section>
				<div class="row">
					<?php if($step1 && $step2):?>
						<div class="col-3 col-md-2">
							<h1 class="translucent-grn step-number">2</h1>
						</div>
						<div class="col-9 col-md-10">
							<p class="goals">Step 2</p>
							<div class="ltbl-text how-we-helped-subheading">
								<?php echo $step2;?>
							</div>
						</div>
					<?php endif;?>
				</div>
			</section>
			<!-- / Step 2 -->

			<!-- Step 3 -->
			<section>
				<div class="row">
					<?php if($step2 && $step3):?>
						<div class="col-3 col-md-2">
							<h1 class="translucent-grn step-number">3</h1>
						</div>
						<div class="col-9 col-md-10">
							<p class="goals">Step 3</p>
							<div class="ltbl-text how-we-helped-subheading">
								<?php echo $step3;?>
							</div>
						</div>
					<?php endif;?>
				</div>
			</section>
			<!-- / Step 3 -->

			<!-- Step 4 -->
			<section>
				<div class="row">
					<?php if($step3 && $step4):?>
						<div class="col-3 col-md-2">
							<h1 class="translucent-grn step-number">4</h1>
						</div>
						<div class="col-9 col-md-10">
							<p class="goals">Step 4</p>
							<div class="ltbl-text how-we-helped-subheading">
								<?php echo $step4;?>
							</div>
						</div>
					<?php endif;?>
				</div>
			</section>
			<!-- / Step 4 -->

			<!-- The Result -->
			<?php if($results):?>
				<section class="my-3">
					<div class="row">
						<div class="col-9 col-md-10 offset-3 offset-md-2">
							<p class="goals">The Result</p>
							<p class="ltbl-text how-we-helped-subheading"><?php echo $results;?></p>
						</div>
					</div>
				</section>
			<?php endif;?>
			<!-- / The Result -->


		</section>
	<?php endif;?>
	<!-- / How We Helped -->

	<!-- Related Resources -->
	<section class="py-5">
		<p class="teal block-title general-ss-name text-center">Related Resources</p>

		<!-- Video Block -->
		<section class="pb-3 white-section section-padding d-flex justify-content-center">
			<div class="ss-video-block-container mx-auto">
				<div class="row bg-teal">
					<div class="col-12 col-md-6 video-column d-flex align-items-center experience-vid">
						<?php if($video): ?>
							<div class="resources-video-container d-flex align-items-center">
								<?php echo $video;?>
							</div>
						<?php endif;?> 
					</div>
					<div class="col-12 col-md-6 d-flex align-items-center video-teal-text-column d-flex justify-content-center">
						<div class="video-block-text-container ">
							<?php if($videoHeading): ?>
								<h1 class="dk-teal-font poppins-block-heading font-weight-lighter mb-0"> <?php echo $videoHeading;?></h1>
							<?php endif;?>
							<?php if($videoSubHeading): ?>
								<h3 class="video-block-subheading ltbl-text font-weight-lighter"><?php echo $videoSubHeading;?></h3>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- / Video Block -->

		<!-- Guide Block -->
		<section class="text-decoration-none pb-3 white-section section-padding d-flex justify-content-center">
				<div class="mx-auto ss-guidebook-container">
					<div class="row bg-teal">
							<div class="col-12 col-md-6 video-column d-flex align-items-center experience-vid">
								<?php if($guideImg): ?>
									<div class="guide-img-container">
										<img class="" src="<?php echo $guidePic;?>"/>
									</div>
								<?php endif;?> 
							</div>
					
								<div class="col-12 col-md-6 d-flex align-items-center video-teal-text-column d-flex justify-content-center">
									<div class="video-block-text-container ">
									<a href="<?php echo $guide['url']; ?>" download>
										<?php if($guideHeading): ?>
											<h1 class="dk-teal-font poppins-block-heading font-weight-lighter mb-0"> <?php echo $guideHeading;?></h1>
										<?php endif;?>
										<?php if($guideSubHeading): ?>
											<h3 class="video-block-subheading ltbl-text font-weight-lighter"><?php echo $guideSubHeading;?></h3>
										<?php endif;?>
										</a>
									</div>
								</div>
							
					</div>
				</div>
			</a>
		</section>
		<!-- / Guide Block -->

	</section>
	<!-- / Related Resources -->

	<!-- More Case Studies -->
	<section class="py-5">
		<div class="container wider">
			<p class="teal block-title general-ss-name text-center">More Case Studies</p>
			<div class="row lg-container mx-auto">
			<?php
				$currentID = get_the_ID();
				$args = array(
					'category_name' => 'case-study',
					'order' => 'ASC',
					'posts_per_page' => 3,
					'post__not_in' => array($currentID),
				);

				$post_query = new WP_Query($args);

				if($post_query->have_posts() ) {
					while($post_query->have_posts() ) {
						$post_query->the_post();
						?>
							
						<div class="col-sm-12 col-md-4 d-flex justify-content-center text-decoration-none">
							<div class="ss-container">
								<div class="team-member-about-us-container">
									<a href="<?php the_permalink();?>">
										<div class="ss-image-container-4 mx-auto">
											<?php $image = get_field('image_1', $post->ID); ?>
											<?php if($image): ?>
												<img class="success-story-image" src="<?php echo $image['sizes']['large']?>">
											<?php endif;?> 
										</div>
									</a>
									<?php $quote = get_field('main_quote_1', $post->ID); ?>
										<?php if($quote): ?>
											<a href="<?php the_permalink();?>"><h1 class="pt-3 mb-0 teal success-story-header"><?php echo $quote; ?></h1></a>
										<?php endif;?> 
									<h4 class="success-story-name mb-0"><?php the_title(); ?></h4> 
									<?php $listItem1 = get_field('list_item_1', $post->ID); ?>
									<?php if($listItem1): ?>
										<div class='row sm-med-px-3'>
											<div class="col-2 sm-med-pr">
												<i class="fa fa-check ss-check"></i>
											</div>
											<div class="col-9 px-0">
												<p class="success-story-list mb-0"><?php echo $listItem1?></p>
											</div>
										</div>
									<?php endif;?> 
									<?php $listItem2 = get_field('list_item_2', $post->ID); ?>
									<?php if($listItem2): ?>
										<div class='row sm-med-px-3'>
											<div class="col-2 sm-med-pr">
												<i class="fa fa-check ss-check"></i>
											</div>
											<div class="col-9 px-0">
												<p class="success-story-list mb-0"><?php echo $listItem2?></p>
											</div>
										</div>
									<?php endif;?> 
									<?php $listItem3 = get_field('list_item_3', $post->ID); ?>
									<?php if($listItem3): ?>
										<div class='row sm-med-px-3'>
											<div class="col-2 sm-med-pr">
												<i class="fa fa-check ss-check"></i>
											</div>
											<div class="col-9 px-0">
												<p class="success-story-list mb-0"><?php echo $listItem3?></p>
											</div>
										</div>
									<?php endif;?> 
								</div>
							</div>
						</div>
							
						<?php
						}
					}
			?>
			</div>
		</div>
	</section>
	<!-- / More Case Studies -->

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();