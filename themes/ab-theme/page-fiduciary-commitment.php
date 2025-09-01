<?php
/**
* Template Name: Fiduciary Commitment
 */

$title = get_field('title');
$heading = get_field('heading');
$subheading = get_field('subheading');

$fcheader = get_field("fc_header");
$fc1 = get_field('fiduciary_commitment_1');
$fc2 = get_field('fiduciary_commitment_2');
$fc3 = get_field('fiduciary_commitment_3');
$fc4 = get_field('fiduciary_commitment_4');
$fc5 = get_field('fiduciary_commitment_5');
$fcBoxes = get_field('fiduciary_commitment_box');

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<div id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

            <!-- Main Block -->
			<section class="section-padding bottom-padding">
                <div class="mx-auto">
                    <?php if($title): ?>
                        <h2 class="text-center teal block-title general-ss-name"><?php echo $title;?></h2>
                    <?php endif;?>

                    <h1 class="text-center main-heading dk-teal-font mb-0 pb-0">Statement of</h1>
                    <h1 class="text-center main-heading dk-teal-font mb-0">Fiduciary Commitment</h1>
                    
                    <?php if($subheading): ?>
                        <p class="lg-w-65 mx-auto text-center ltbl-text lead ont-weight-lighter"><?php echo $subheading;?></p>
                    <?php endif;?>

                    <div class="fc-new-section">
                        <div class="fc-new-section-contact__link--wrapper">
                            <a href="/contact" class="fc-new-section-contact__link ">Contact</a>
                        </div>
                        <?php if($fcheader): ?>
                            <p class="fc-new-section__heading"><?php echo $fcheader;?></p>
                        <?php endif;?>
                 
                        <?php if(isset($fcBoxes) && !empty($fcBoxes)): ;?>
                            <div class="fiduciary-commitment-boxes">
                                <?php foreach( $fcBoxes as $box ) : ;?>
                                <div class="fiduciary-commitment-single-box">
                                    <?php if($box['view'] == "full_column"): ;?>
                                        <div class="box__icon">
                                            <?php if($box['icon_type'] == 'svg'): ;?>
                                                <?php  echo $box['icon_svg_code'];?>
                                            <?php else: ;?>
                                                <img src="<?php echo $box['icon_image']['url']?>" alt="<?php echo $box['icon_image']['alt']?:$box['icon_image']['title']?>">
                                            <?php endif ;?>
                                        </div>
                                        <?php if($box['title']):;?>
                                            <p class="box__title"><?php echo $box['title'] ;?></p>
                                        <?php endif; ;?>
                                        <?php if($box['text']): ;?>
                                            <div class="box__text">
                                            <?php echo wp_kses_post( wpautop($box['text'])) ;?>
                                            </div>
                                        <?php endif ;?>
                                    <?php else: ;?>
                                        <div class="fiduciary-commitment-single-box__row">
                                            <div class="box__icon">
                                                <?php if($box['icon_type'] == 'svg'): ;?>
                                                    <?php  echo $box['icon_svg_code'];?>
                                                <?php else: ;?>
                                                    <img src="<?php echo $box['icon_image']['url']?>" alt="<?php echo $box['icon_image']['alt']?:$box['icon_image']['title']?>">
                                                <?php endif ;?>
                                            </div>
                                            <?php if($box['title']):;?>
                                                <p class="box__title"><?php echo $box['title'] ;?></p>
                                            <?php endif; ;?>

                                         
                                        </div>
                                        <?php if($box['text']): ;?>
                                            <div class="box__text">
                                            <?php echo wp_kses_post( wpautop($box['text'])) ;?>
                                            </div>
                                        <?php endif ;?>
                                    <?php endif ;?>
                                   
                                </div>
                                <?php endforeach ;?>
                            </div>
                        <?php endif ;?>
                        <!-- <div class="take-action-subheading mx-auto md-w-80">
                            <?php if($fc1): ?>
                                <div class="row">
                                    <div class="col-1 text-right pr-0">
                                        <span class="ltbl-text h4 font-weight-bold">1) </span>
                                    </div>
                                    <div class="col-11">
                                        <p class="ltbl-text main-subheading font-weight-lighter"><?php echo $fc1;?></p>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if($fc2): ?>
                                <div class="row">
                                    <div class="col-1 text-right pr-0">
                                        <span class="ltbl-text h4 font-weight-bold">2) </span>
                                    </div>
                                    <div class="col-11">
                                        <p class="ltbl-text main-subheading lead font-weight-lighter"><?php echo $fc2;?></p>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if($fc3): ?>
                                <div class="row">
                                    <div class="col-1 text-right pr-0">
                                        <span class="ltbl-text h4 font-weight-bold">3) </span>
                                    </div>
                                    <div class="col-11">
                                        <p class="ltbl-text main-subheading lead font-weight-lighter"><?php echo $fc3;?></p>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if($fc4): ?>
                                <div class="row">
                                    <div class="col-1 text-right pr-0">
                                        <span class="ltbl-text h4 font-weight-bold">4) </span>
                                    </div>
                                    <div class="col-11">
                                        <p class="ltbl-text main-subheading lead font-weight-lighter"><?php echo $fc4;?></p>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if($fc5): ?>
                                <div class="row">
                                    <div class="col-1 text-right pr-0">
                                        <span class="ltbl-text h4 font-weight-bold">5) </span>
                                    </div>
                                    <div class="col-11">
                                        <p class="ltbl-text main-subheading lead font-weight-lighter"><?php echo $fc5;?></p>
                                    </div>
                                </div>
                            <?php endif;?>
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- / Main Block -->

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
