<?php
/**
* Template Name: Our Process
 */

get_header(); 

$title = get_field('title');
$heading = get_field('heading');
$subheading = get_field('subheading');

$ourProcessImg = get_field('image');
$oPPicture = $ourProcessImg['sizes']['large'];

// $header1 = get_field('header_1');
// $subheading1 = get_field('subheading_1');
// $list1 = get_field('text_field_1');
// $image1 = get_field('image_1');
// $picture1 = $image1['sizes']['large'];

// $header2 = get_field('header_2');
// $subheading2 = get_field('subheading_2');
// $list2 = get_field('text_field_2');
// $image2 = get_field('image_2');
// $picture2 = $image2['sizes']['large'];

// $header3 = get_field('header_3');
// $subheading3 = get_field('subheading_3');
// $second_subheading_3 = get_field('second_subheading_3');
// $list3 = get_field('text_field_3');

// $header4 = get_field('header_4');
// $subheading4 = get_field('subheading_4');
// $quote = get_field('quote');
// $name = get_field('quote_name');
// $image4 = get_field('image_4');
// $picture4 = $image4['sizes']['large'];

$stepBoxes = get_field('our_process_steps_boxes');
$callImage = get_field('call_image');
$callPic = $callImage['sizes']['large'];
$callLink = get_field('call_link');


// HEALTH test description
$householdIncome = get_field('household_income_description');
$expenses = get_field('expenses_description');
$allocation = get_field('allocation_description');
$longevity = get_field('longevity_description');
$taxes = get_field('taxes_description');
$healthcare = get_field('healthcare_description');

?>

	<section id="primary" class="content-area">
		<div id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

            <!-- Main Block -->
            <section class="py-5">
                <div class="container text-center">
                    <?php if($title): ?>
                        <h1 class="teal block-title general-ss-name"><?php echo $title;?></h1> 
                    <?php endif;?>
                    <?php if($heading): ?>
                        <h2 class="center-main-heading mb-3"><?php echo $heading;?></h2> 
                    <?php endif;?>
                    <?php if($subheading): ?>
                        <p class="our-process-subheading lead font-weight-lighter ltbl-text"><?php echo $subheading;?></p> 
                    <?php endif;?>
                    <p><a class="pinegrove-button"href="/contact">Contact</a></p>
                </div>
            </section>
            <!-- Main Block -->

            <section class="py-5 d-flex justify-content-center ltbl-section">
                <div class="our-process-img-contaigner main-process-image">
                    <?php if($ourProcessImg): ?>
                        <img src="<?php echo $oPPicture;?>" class="financial-prosperity-img">
                    <?php endif;?> 
                </div>
            </section>

            <!-- Section steps -->
     
            <?php if( have_rows('our_process_steps_boxes') ): ?>
                <section class="our-process-step--wrapper py-5">
                    <div class="container">
                        <div class="row">
                            <?php $counter = 1; ;?>
                            <?php while( have_rows('our_process_steps_boxes') ): the_row();?>
                                <div class="col-12 col-lg-6 ">
                                    <div class="our-process-step">

                                    
                                    <?php if(get_sub_field('image_or_accordion') == 'accordion'): ;?>
                                        <?php if(get_sub_field('accordion')):;?>
                                            <?php $rows = get_sub_field('accordion');?>
                                            <div class="accordion">
                                                <div class="container">
                                                    <div class="row">

                                                    
                                                        <?php foreach ($rows  as $key => $row) : ;?>
                                                            <div class="col-12">
                                                                <a class="p-0" data-toggle="collapse" href="#allocation-<?php echo $key?>" role="button" aria-expanded="false" aria-controls="#allocation-<?php echo $key?>">
                                                                    <div class="health-row w-100 d-flex flex-row">
                                                                        <div class="health-letter-background d-flex align-items-center justify-content-center">
                                                                            <p class="health-letter mb-0"><?php echo substr($row['title'], 0, 1); ?></p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center justify-content-start">
                                                                            <p class="health-title  mb-0"><?php echo $row['title'] ;?></p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center justify-content-end">
                                                                            <i class="fas fa-plus teal"></i>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="collapse" id="allocation-<?php echo $key?>">
                                                                    <div class="card card-body health-card">
                                                                        <div class="health-card-text">
                                                                            <?php echo $row['content'];?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>  
                                                        <?php endforeach ;?>
                                                    </div>
                                                </div>
                                            </div>        
                                        <?php endif ;?>
                                    <?php else :;?>
                                        <div class="step-img">
                                            <div class="our-process-step-img-container">
                                                <?php if(get_sub_field('image')): ?>
                                                    <img src="<?php echo get_sub_field('image')['url'];?>" class="financial-prosperity-img">
                                                <?php endif;?> 
                                            </div>
                                        </div>
                                    <?php endif ;?>
                                    <div class="step-text our-process-step-content ">
                                        <div class="icon-container">
                                            <p class="process-numbers"><?php echo $counter ;?></p>
                                        </div>
                                        <?php if(get_sub_field('subheading')): ?>
                                            <p class="ltbl-text lead our-process-step__subheading teal"><?php echo get_sub_field('subheading');?></p>
                                        <?php endif;?>
                                        <?php if(get_sub_field('header')): ?>
                                            <h2 class="our-process-step-heading dk-teal-font block-heading font-weight-lighter"> <?php echo get_sub_field('header');?></h2>
                                        <?php endif;?>
                                            <?php if(get_sub_field('description')): ;?>
                                                <div class="our-process-step-description">
                                                    <?php echo get_sub_field('description');?>
                                                </div>
                                            <?php endif;?>
                                    </div>


                                <?php $counter++ ;?>
                                </div>
                            </div>
                         <?php endwhile; ?>
                         
                        </div>
                    </div>
                </section>
            <?php endif; ?>
                       



      
            <!-- / Section 1 -->

            <!-- Section 2 -->
            <!-- <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="financial-prosperity-img-container">
                                <?php if($image2): ?>
                                    <img src="<?php echo $picture2;?>" class="financial-prosperity-img">
                                <?php endif;?> 
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="icon-container mb-4">
                                <p class="process-numbers">2</p>
                            </div>
                            
                            <?php if($header2): ?>
                                <h2 class="our-process-step-heading dk-teal-font block-heading font-weight-lighter mb-0"> <?php echo $header2;?></h2>
                            <?php endif;?>
                            <?php if($subheading2): ?>
                                <p class="ltbl-text lead font-weight-lighter"><?php echo $subheading2;?></p>
                            <?php endif;?>
                            <ul class="our-process-list-item ltbl-text font-weight-lighter">
                                <?php if($list2): ?>
                                    <?php echo $list2;?>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- / Section 2 -->

            <!-- The Retirement H.e.a.l.t.h. Stress-Test -->
            <!-- <section id="health-stress-test" class="py-5 ltbl-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="icon-container mb-4">
                                <p class="process-numbers">3</p>
                            </div>
                            <p class="teal block-title general-ss-name">The Retirement H.E.A.L.T.H. Stress-Test&copy;</p>
                            
                            <?php if($header3): ?>
                                <h2 class="health-test-heading our-process-step-heading dk-teal-font block-heading font-weight-lighter mb-0"> <?php echo $header3;?></h2>
                            <?php endif;?>
                            <?php if($subheading3): ?>
                                <p class="health-test-subheading ltbl-text lead font-weight-lighter"><?php echo $subheading3;?></p>
                            <?php endif;?>
                            <?php if($second_subheading_3): ?>
                                <h3 class="health-test-subheading ltbl-text font-weight-lighter"><?php echo $second_subheading_3;?></h3>
                            <?php endif;?>
                            
                        </div>
                        <div class="col-12 col-md-5 d-flex align-items-center">
                            <div class="text-decoration-none financial-prosperity-img-container health-test-container"> -->

                                <!-- Household Income -->
                                <!-- <div>
                                    <a class="w-100 p-0" data-toggle="collapse" href="#householdIncome" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <div class="row w-100 health-row">
                                            <div class="col-3 health-letter-background top-left-border-radius d-flex align-items-center justify-content-center">
                                                <p class="health-letter mb-0">H</p>
                                            </div>
                                            <div class="col-8 d-flex align-items-center justify-content-start">
                                                <p class="health-title mb-0">Household Income</p>
                                            </div>
                                            <div class="col-2 d-flex align-items-center justify-content-end">
                                                <i class="fas fa-plus teal"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="collapse" id="householdIncome">
                                        <div class="card card-body health-card">
                                            <div class="health-card-text">
                                                <?php echo $householdIncome;?>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Household Income -->

                                <!-- Expenses -->
                                <!-- <div>
                                    <a class="w-100 p-0" data-toggle="collapse" href="#expenses" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <div class="health-row row w-100">
                                            <div class="col-3 health-letter-background d-flex align-items-center justify-content-center">
                                                <p class="health-letter mb-0">E</p>
                                            </div>
                                            <div class="col-8 d-flex align-items-center justify-content-start">
                                                <p class="health-title  mb-0">Expenses</p>
                                            </div>
                                            <div class="col-2 d-flex align-items-center justify-content-end">
                                                <i class="fas fa-plus teal"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="collapse" id="expenses">
                                        <div class="card card-body health-card">
                                            <div class="health-card-text">
                                                <?php echo $expenses;?>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Expenses -->

                                <!-- Allocation -->
                                <!-- <div>
                                    <a class="w-100 p-0" data-toggle="collapse" href="#allocation" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <div class="health-row row w-100">
                                            <div class="col-3 health-letter-background d-flex align-items-center justify-content-center">
                                                <p class="health-letter mb-0">A</p>
                                            </div>
                                            <div class="col-8 d-flex align-items-center justify-content-start">
                                                <p class="health-title  mb-0">Allocation</p>
                                            </div>
                                            <div class="col-2 d-flex align-items-center justify-content-end">
                                                <i class="fas fa-plus teal"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="collapse" id="allocation">
                                        <div class="card card-body health-card">
                                            <div class="health-card-text">
                                                <?php echo $allocation;?>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Allocation -->

                                <!-- Longetivy -->
                                <!-- <div>
                                    <a class="w-100 p-0" data-toggle="collapse" href="#longetivy" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <div class="health-row row w-100">
                                            <div class="col-3 health-letter-background d-flex align-items-center justify-content-center">
                                                <p class="health-letter mb-0">L</p>
                                            </div>
                                            <div class="col-8 d-flex align-items-center justify-content-start">
                                                <p class="health-title  mb-0">Longevity</p>
                                            </div>
                                            <div class="col-2 d-flex align-items-center justify-content-end">
                                                <i class="fas fa-plus teal"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="collapse" id="longetivy">
                                        <div class="card card-body health-card">
                                            <div class="health-card-text">
                                                <?php echo $longevity;?>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Longetivy -->

                                <!-- Taxes -->
                                <!-- <div>
                                    <a class="w-100 p-0" data-toggle="collapse" href="#taxes" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <div class="health-row row w-100">
                                            <div class="col-3 health-letter-background d-flex align-items-center justify-content-center">
                                                <p class="health-letter mb-0">T</p>
                                            </div>
                                            <div class="col-8 d-flex align-items-center justify-content-start">
                                                <p class="health-title  mb-0">Taxes</p>
                                            </div>
                                            <div class="col-2 d-flex align-items-center justify-content-end">
                                                <i class="fas fa-plus teal"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="collapse" id="taxes">
                                        <div class="card card-body health-card">
                                            <div class="health-card-text">
                                                <?php echo $taxes;?>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Taxes -->

                                <!-- Healthcare -->
                                <!-- <div>
                                    <a class="w-100 p-0" data-toggle="collapse" href="#healthcare" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <div class="health-row row w-100">
                                            <div class="col-3 bottom-left-border-radius health-letter-background d-flex align-items-center justify-content-center">
                                                <p class="health-letter mb-0">H</p>
                                            </div>
                                            <div class="col-8 d-flex align-items-center justify-content-start">
                                                <p class="health-title  mb-0">Healthcare</p>
                                            </div>
                                            <div class="col-2 d-flex align-items-center justify-content-end">
                                                <i class="fas fa-plus teal"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="collapse" id="healthcare">
                                        <div class="card card-body health-card">
                                            <div class="health-card-text">
                                                <?php echo $healthcare;?>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Healthcare -->

<!-- 
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- / The Retirement H.E.A.L.T.H. Stress-Test -->

            <!-- Section 4 -->
            <!-- <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="financial-prosperity-img-container">
                                <?php if($image4): ?>
                                    <img src="<?php echo $picture4;?>" class="financial-prosperity-img">
                                <?php endif;?> 
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="icon-container mb-4">
                                <p class="process-numbers">4</p>
                            </div>
                            
                            <?php if($header4): ?>
                                <h2 class="our-process-step-heading dk-teal-font block-heading font-weight-lighter mb-0"> <?php echo $header4;?></h2>
                            <?php endif;?>
                            <?php if($subheading4): ?>
                                <p class="ltbl-text lead font-weight-lighter"><?php echo $subheading4;?></p>
                            <?php endif;?>
                            <?php if($quote): ?>
                                <p class="teal number-subheading font-weight-lighter pb-2 mb-0"><?php echo $quote;?></p>
                                <p class="teal font-weight-lighter">-<?php echo $name;?></p>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </section> -->
            <!--  Section 4 -->

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

            <?php echo get_template_part('template-parts/newsletter-sample');?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
