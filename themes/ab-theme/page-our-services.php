<?php
/**
* Template Name: Our Services
 */

get_header(); 

$title = get_field('title');
$heading = get_field('heading');
$subheading = get_field('subheading');


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
				<div class="container">

				
                <div class="row text-center d-flex justify-content-center">
                    <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center about-us-col-text about-us-text-block">
                        <div class="about-us-text-container">
							<?php if($title): ?>
                                <h1 class="teal block-title general-ss-name"><?php echo $title;?></h1>
                            <?php endif;?>
                            <?php if($heading): ?>
                                <h2 class="main-heading dk-teal-font"> <?php echo $heading;?></h2>
                            <?php endif;?>
                            <?php if($subheading): ?>
                                <p class="ltbl-text main-subheading lead font-weight-lighter"><?php echo $subheading;?></p>
                            <?php endif;?>
                        </div>
                    </div>
				
                </div>
								</div>
            </section>
            <!-- / Main Block -->

			<!-- Our Services -->
			<section id="who-we-help" class="our-services py-5">
        <div class="container">
					<?php if( have_rows('our_services') ): ?>
							<?php while( have_rows('our_services') ): the_row(); 
									$our_services_image = get_sub_field('image');
									$our_services_heading = get_sub_field('heading');
									$our_services_subheading = get_sub_field('subheading');
									$our_services_list = get_sub_field('who_we_help_list');
									$our_services_link = get_sub_field('link');
									$our_services_section_id = get_sub_field('section_id');
									?>
								<div class="row pb-5" id="<?php echo $our_services_section_id?:''?>">
									<div class="col d-flex">
										<div class="who-we-help-img-container about-us-img-container mb-3">
											<?php if($our_services_image): ?>
												<img src="<?php echo $our_services_image['url'];?>" class="ss-img-fluid">
											<?php endif;?> 
										</div>
									</div>
									<div class="col">
										<?php if($our_services_heading): ?>
											<h2 class="secondary-heading block-heading bottom-margin-0 dk-teal-font mb-0"> <?php echo $our_services_heading;?></h2>
										<?php endif;?>
										<?php if($our_services_subheading): ?>
												<p class="ltbl-text font-weight-lighter our-services-page-subheading"><?php echo $our_services_subheading;?></p>
										<?php endif;?>
										<?php if($our_services_list): ?>
											<h3 class="bl-font mb-2 goals poppins">We help with</h3>
											<?php foreach( $our_services_list as $row ) : ;?>
																			<div class="ltbl-text secondary-subheading font-weight-lighter">
												<p class="mb-0">• <?php echo $row['list_item'];?></p>
											</div>
										<?php endforeach;endif;?>
										<?php if($our_services_link): ?>
												<p class="our-services-link-wrapper mt-3 mb-0"><a class="pinegrove-button" href="<?php echo $our_services_link['url'] ?>"><?php echo $our_services_link['title'];?></a></p>
										<?php endif;?>
									</div>
								</div>
							<?php endwhile; ?>
					<?php endif; ?>

				
					
                </div>
            </section>
			<!-- / Our Services -->

			
		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();