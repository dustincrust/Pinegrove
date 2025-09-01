<?php
/**
* Template Name: Landing Page
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<div id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

            <!-- Main Block -->
            <section class="main-landing-bg pt-5">
                <div class="row about-us-step-heading mx-auto">
                    <div class="col-12 col-md-6 col-lg-7 d-flex" id="second">
                        <div class="py-5">
                            <p class="block-heading mb-3">Start The Retirement H.E.A.L.T.H. Stress-test<span class="font-size-20">©</span> and Establish Your Financial H.E.A.L.T.H. Guidebook</p>
                            <h3 class="font-weight-lighter mb-1">Did you just attend one of our courses or maybe you're ready to take the next step?</h3>
                            <h3 class="font-weight-lighter">We are thrilled to have you here! <strong>Here’s what to expect and how to get started:</strong></h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5" id="first">
                        <div class="landing-page-img-container">
                            <img class="landing-page-img" src="/wp-content/uploads/2021/04/Updated-Blueprint-Transparent.png" alt="financial health guide">
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Main Block -->

            <!-- Three Icons Block -->
            <section class="my-5 pb-5 we-help-you-section">
                <p class="text-center teal block-title mb-4">We help you:</p>
                <div class="row d-flex justify-content-center mx-auto about-us-step-heading">
                    <div class="col-12 col-md-6 col-lg-4 mx-3 box-padding landing-box-border-shadow d-flex justify-content-center align-items-center">
                            <div class="row">
                                <div class="col-4 px-0">
                                    <div class="icon-container mx-auto">
                                        <img class="img-fluid" src="/wp-content/uploads/2021/03/Group-5@3x-1.png" alt="get organized">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <p class="bl-font font-size-24 mb-0">Get Organized</p>
                                </div>
                            </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mx-3 box-padding landing-box-border-shadow d-flex justify-content-center align-items-center">
                            <div class="row">
                                <div class="col-4 px-0">
                                    <div class="icon-container mx-auto">
                                        <img class="img-fluid" src="/wp-content/uploads/2021/03/Group-18@3x-1.png" alt="know where you stand">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <p class="bl-font font-size-24 mb-0">Know Where You Stand</p>
                                </div>
                            </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mx-3 box-padding landing-box-border-shadow d-flex justify-content-center align-items-center">
                            <div class="row">
                                <div class="col-4 px-0">
                                    <div class="icon-container mx-auto">
                                    <img class="img-fluid" src="/wp-content/uploads/2021/02/Group-27@3x.png" alt="Know What to do Next">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <p class="bl-font font-size-24 mb-0">Know What to do Next</p>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
            <!-- / Three Icons Block -->

            <!-- Is This You Block -->
            <section class="my-5">
                <div class="testimonial-container mx-auto">
                    <p class="text-center block-heading mb-3">Is this you?</p>
                    <p class="btn-text ltbl-text text-center mb-5">Having served clients in the Twin Cites for over two decades, we have established ourselves as experts at helping the following types of people:</p>
                </div>
                <div class="pb-3 container mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-4 mb-4">
                            <div class="about-us-img-container">
                                <img class="about-us-img" src="/wp-content/uploads/2021/03/shutterstock_1038814603@3x.png" alt="couple using tablet">
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <p class="goals">At or Nearing Retirement:</p>
                            <ul class="btn-text ltbl-text landing-step-ul mb-4">
                                <li>Investors age 50+ or those looking for optionality in their career.</li>
                            </ul>
                            <p class="goals">Well-established Nest Egg:</p>
                            <ul class="btn-text ltbl-text landing-step-ul mb-4">
                                <li>Diligence. Hard work. Discipline.  You have established a nest-egg in excess of $500,000.</li>
                            </ul>
                            <p class="goals">Value Expertise:</p>
                            <ul class="btn-text ltbl-text landing-step-ul mb-4">
                                <li>When the cost of being wrong is high and the complexity is beyond your skillset, you value an expert and advisor to guide you.</li>
                            </ul>
                            <p class="goals">Corporate-achiever:</p>
                            <ul class="btn-text ltbl-text landing-step-ul mb-4">
                                <li>We are established specialists in the benefits, 
                                    retirement and compensation packages of these companies.  
                                    With much of your wealth attached to your employer, 
                                    we help you manage the risk and organize your decisions.
                                </li>
                            </ul>
                            <img src="/wp-content/uploads/2021/03/Group-6@3x-1-1024x74.png" alt="corporate logos"/>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Is This You Block -->

            <!-- Start the Process Block -->
            <section class="py-5 bg-blue height-230 d-flex justify-content-center">
                <div class="py-4 text-center">
                    <p class="text-center contact-heading mb-4">Start the Process</p>
                    <a href="https://calendly.com/mgulbransen/30min" >
                        <button class="newsletter-subscribe-btn btn btn-text white-text">Schedule a Meeting</button>
                    </a>
                    </div>
            </section>
            <!-- / Start the Process Block -->

            <!-- Steps Block -->
            <section class="mb-5 py-5 ltbl-section">
                <!-- Step 1 -->
                <div class="py-5 container white-section lp-border-shadow">
                    <div class="px-3 row">
                        <div class="col-1 px-0 d-flex justify-content-end">
                            <h1 class="teal landing-page-number">1</h1>
                        </div>
                        <div class="col-10">
                            <p class="goals">Schedule Your Discovery Call <span class="light-weight">(approximately 15-20 minutes)</span></p>
                            <p class="ltbl-text btn-text mb-2">Congrats on taking the first step towards financial H.E.A.L.T.H.  </p>
                            <ul class="btn-text ltbl-text landing-step-ul">
                                <li>Use our online scheduler</li>
                                <li>Have a few questions?  Request a call from a member of our team here.  They would be delighted to answer any additional questions you may have and offer a convenient time for the initial Discovery Meeting.</li>
                                <li>Understand how we work with families and what to expect from our process.</li>
                            </ul>
                            <div class="step-border px-3 py-4">
                                <p class="goals">BONUS STEP: Prepare for the New You</p>
                                <p class="ltbl-text btn-text mb-0">You will receive a Welcome Packet to help you prepare for your Discovery meeting.  We will include a process for how to get both your thoughts and financials organized, some helpful info on the value of expert advice, and a free copy of our book.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Step 1 -->

                <!-- Step 2 -->
                <div class="mt-4 py-5 container white-section lp-border-shadow">
                    <div class="px-3 row">
                        <div class="col-1 px-0 d-flex justify-content-end">
                            <h1 class="teal landing-page-number">2</h1>
                        </div>
                        <div class="col-10">
                            <p class="goals">Discovery Meeting <span class="light-weight">(approximately 60 minutes)</span></p>
                            <p class="ltbl-text btn-text">
                                Before we can show you improvements, we need to establish a baseline of 
                                where you are today. These sessions will allow us to learn more about you, 
                                what is most important and if we are able to help. 
                            </p>
                            <p class="goals">Outcome</p>
                            <p class="ltbl-text btn-text mb-0">Your financial life organized in one place, accessible anytime.</p>
                        </div>
                    </div>
                </div>
                <!-- / Step 2 -->

                <!-- Step 3 -->
                <div class="mt-4 py-5 container white-section lp-border-shadow">
                    <div class="px-3 row">
                        <div class="col-1 px-0 d-flex justify-content-end">
                            <h1 class="teal landing-page-number">3</h1>
                        </div>
                        <div class="col-10">
                            <p class="goals">The Retirement H.E.A.L.T.H. Stress Test <span class="light-weight">(approximately 60 minutes)</span></p>
                            <p class="ltbl-text btn-text">
                                Don't worry, it is not like that stress-test! 
                                There is no running involved. We are trying to help you understand 
                                what financial decisions are most impactful to you. 
                            </p>
                            <p class="ltbl-text btn-text mb-2">
                                Through this process, we can test potential outcomes like:
                            </p>
                            <ul class="btn-text ltbl-text landing-step-ul">
                                <li>Can I retire now? What if I work one more year or one less?</li>
                                <li>Should I pay off my mortgage?</li>
                                <li>How much income can I take before it is too much?</li>
                                <li>What tax strategies work best for me?</li>
                            </ul>
                            <p class="goals">Outcome</p>
                            <p class="ltbl-text btn-text mb-0">You know exactly where you stand and what to do next.</p>
                        </div>
                    </div>
                </div>
                <!-- / Step 3 -->

                <!-- Step 4 -->
                <div class="mt-4 py-5 container white-section lp-border-shadow">
                    <div class="px-3 row">
                        <div class="col-1 px-0 d-flex justify-content-end">
                            <h1 class="teal landing-page-number">4</h1>
                        </div>
                        <div class="col-10 col-md-6">
                            <p class="goals">Schedule a Meeting</p>
                            <p class="ltbl-text btn-text">Don’t wait another day, get started now.</p>
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center justify-content-center">
                            <a href="https://calendly.com/mgulbransen/30min" >
                                <button class="px-4 py-2 newsletter-subscribe-btn btn btn-text white-text">Schedule a Meeting</button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- / Step 4 -->
            </section>
            <!-- / Steps Block -->

            <!-- Common Questions Block -->
            <section class="my-5">
                <div class="container mx-auto text-decoration-none">
                    <p class="text-center block-heading mb-5">Some common questions we tend to get:</p>
                
                    <!-- How do you charge? -->
                    <div class="my-3 common-questions-border">
                        <a class="w-100 p-0 common-questions" data-toggle="collapse" href="#charge" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="row w-100">
                                <div class="col-10 pr-0 d-flex align-items-center justify-content-start">
                                    <p class="mb-0 common-questions-title">How do you charge?</p>
                                </div>
                                <div class="col-2 px-0 d-flex align-items-center justify-content-end">
                                    <i class="fas fa-plus bl-font"></i>
                                </div>
                            </div>
                        </a>
                        <div class="collapse" id="charge">
                            <div class="card-body pt-0">
                                <p class="ltbl-text mb-0">
                                    We say transparency breeds trust and security.  You will always know how and what we are paid.  We often charge $750 for our initial planning engagement. As a fee-only RIA we are only paid by our clients.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- / How do you charge? -->

                    <!-- How often do we meet? -->
                    <div class="my-3 common-questions-border">
                        <a class="w-100 p-0 common-questions" data-toggle="collapse" href="#meet" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="row w-100">
                                <div class="col-10 pr-0 d-flex align-items-center justify-content-start">
                                    <p class="mb-0 common-questions-title">How often do we meet?</p>
                                </div>
                                <div class="col-2 px-0 d-flex align-items-center justify-content-end">
                                    <i class="fas fa-plus bl-font"></i>
                                </div>
                            </div>
                        </a>
                        <div class="collapse" id="meet">
                            <div class="card-body pt-0">
                                <p class="ltbl-text mb-0">
                                    In the beginning we meet more frequently to ensure we have a great understanding of what’s most important to you and your family.  From there we like to meet formally 1-2 times each year and as life happens or financial situations arise. The more going on, the more often we meet.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- / How often do we meet? -->

                    <!-- How long does it take? -->
                    <div class="my-3 common-questions-border">
                        <a class="w-100 p-0 common-questions" data-toggle="collapse" href="#long" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="row w-100">
                                <div class="col-10 pr-0 d-flex align-items-center justify-content-start">
                                    <p class="mb-0 common-questions-title">How long does it take?</p>
                                </div>
                                <div class="col-2 px-0 d-flex align-items-center justify-content-end">
                                    <i class="fas fa-plus bl-font"></i>
                                </div>
                            </div>
                        </a>
                        <div class="collapse" id="long">
                            <div class="card-body pt-0">
                                <p class="ltbl-text mb-0">
                                    We like to be diligent and efficient with all your assets; your time being one of your most important ones!  Our process is designed to ensure you are always aware of where you stand and what action to take next.  If we can accomplish that in a 15-minute phone call, great.  If it takes longer, we will be there to ensure you understand the choices you have in your financial life.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- / How long does it take? -->

                    <!-- How are you different from Vanguard or Fidelity? -->
                    <div class="my-3 common-questions-border">
                        <a class="w-100 p-0 common-questions" data-toggle="collapse" href="#different" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="row w-100">
                                <div class="col-10 pr-0 d-flex align-items-center justify-content-start">
                                    <p class="mb-0 common-questions-title">How are you different from Vanguard or Fidelity?</p>
                                </div>
                                <div class="col-2 px-0 d-flex align-items-center justify-content-end">
                                    <i class="fas fa-plus bl-font"></i>
                                </div>
                            </div>
                        </a>
                        <div class="collapse" id="different">
                            <div class="card-body pt-0">
                                <p class="ltbl-text mb-0">
                                    In many ways we are similar, offering the same low cost, tax efficient investment options.  However, our value is in understanding you very intimately and having an ability to deliver highly personalized and expert advice.  Think of it like joining one of the national fitness centers and attending a class vs. having a personal trainer that comes to your house and helps you with everything from the proper workout regimen, nutrition and sleep.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- / How are you different from Vanguard or Fidelity? -->

                    <!-- Do you only work with people at those companies? -->
                    <div class="my-3 common-questions-border">
                        <a class="w-100 p-0 common-questions" data-toggle="collapse" href="#companies" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="row w-100">
                                <div class="col-10 pr-0 d-flex align-items-center justify-content-start">
                                    <p class="mb-0 common-questions-title">Do you only work with people at those companies?</p>
                                </div>
                                <div class="col-2 px-0 d-flex align-items-center justify-content-end">
                                    <i class="fas fa-plus bl-font"></i>
                                </div>
                            </div>
                        </a>
                        <div class="collapse" id="companies">
                            <div class="card-body pt-0">
                                <p class="ltbl-text mb-0">
                                    No!  We work with people at many different companies.  We have specific knowledge of those, and most other large companies based in the Twin Cities
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- / Do you only work with people at those companies? -->

                    <!-- Can you work virtually? -->
                    <div class="my-3 common-questions-border">
                        <a class="w-100 p-0 common-questions" data-toggle="collapse" href="#virtual" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="row w-100">
                                <div class="col-10 pr-0 d-flex align-items-center justify-content-start">
                                    <p class="mb-0 common-questions-title">Can you work virtually, and do you work with people outside of Minnesota?</p>
                                </div>
                                <div class="col-2 px-0 d-flex align-items-center justify-content-end">
                                    <i class="fas fa-plus bl-font"></i>
                                </div>
                            </div>
                        </a>
                        <div class="collapse" id="virtual">
                            <div class="card-body pt-0">
                                <p class="ltbl-text mb-0">
                                    Of course! Time is one of your most valuable assets and even those who may live around the corner may decide a virtual meeting is sufficient.  
                                </p>
                                <br/>
                                <p class="ltbl-text mb-0">
                                    We have a number of clients in states across the country.
                                </p>   
                            </div>
                        </div>
                    </div>
                    <!-- Can you work virtually? -->

                </div>
            </section>
            <!-- / Common Questions Block -->

            <!-- Not Quite Ready Block -->
            <section class="my-5 d-flex justify-content-center">
                <div class="mx-auto container ">
                    <p class="text-center block-heading mb-0">Not quite ready?</p>
                    <p class="mb-5 btn-text ltbl-text text-center">We understand!  This in an impactful and important decision.  Here are some other ways to</p>
                    
                    <div class="px-0 row mx-auto container-lg d-flex justify-content-center">
                        <div class="px-0 col-12 col-md-6 text-decoration-none">
                            <a href="/virtual-courses">
                                <div class="row mb-4">
                                    <div class="px-0 col-3 d-flex justify-content-end">
                                        <div class="icon-container">
                                            <img class="about-us-img" src="/wp-content/uploads/2021/03/Group-20@3x.png"/>
                                        </div>
                                    </div>
                                    <div class="col-9 d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 bl-font not-quite-ready-title">Virtual Courses</p>
                                            <p class="mb-0 btn-text ltbl-text sm-size-14">On-Demand Education</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="px-0 col-12 col-md-6 text-decoration-none">
                            <a href="/our-process">
                                <div class="row mb-4">
                                    <div class="px-0 col-3 d-flex justify-content-end">
                                        <div class="icon-container">
                                            <img class="about-us-img" src="/wp-content/uploads/2021/02/Group-27@3x.png"/>
                                        </div>
                                    </div>
                                    <div class="col-9 d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 bl-font not-quite-ready-title">Our Process</p>
                                            <p class="mb-0 btn-text ltbl-text sm-size-14">A path to achieving your goals</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="px-0 row mx-auto container-lg d-flex justify-content-center">
                        <div class="px-0 col-12 col-md-6 text-decoration-none">
                            <a href="/events">
                                <div class="row mb-4">
                                    <div class="px-0 col-3 d-flex justify-content-end">
                                        <div class="icon-container">
                                            <img class="about-us-img" src="/wp-content/uploads/2021/03/Group-18-Copy@3x.png"/>
                                        </div>
                                    </div>
                                    <div class="col-9 d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 bl-font not-quite-ready-title">Events</p>
                                            <p class="mb-0 btn-text ltbl-text sm-size-14">Live or In-Person Classes</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="px-0 col-12 col-md-6 text-decoration-none">
                            <a href="/success-stories">
                                <div class="row mb-4">
                                    <div class="px-0 col-3 d-flex justify-content-end">
                                        <div class="icon-container">
                                            <img class="about-us-img" src="/wp-content/uploads/2021/03/Group@3x.png"/>
                                        </div>
                                    </div>
                                    <div class="col-9 d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 bl-font not-quite-ready-title">Success Stories</p>
                                            <p class="mb-0 btn-text ltbl-text sm-size-14">Real life stories of how we’ve helped</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Not Quite Ready Block -->

            <!-- Success Stories Block -->
            <section class="my-5">
                <p class="text-center block-heading mb-0">Already on their Way to Financial H.E.A.L.T.H.</p>
                <div class="container">
                    <div class="row mx-auto">
                        <?php
                            $currentID = get_the_ID();
                            $args = array(
                                'category_name' => 'case-study',
                                'order' => 'ASC',
                            );

                            $post_query = new WP_Query($args);

                            if($post_query->have_posts() ) {
                                while($post_query->have_posts() ) {
                                    $post_query->the_post();
                                    ?>
                                        
                                    <div class="col-sm-12 col-md-3 d-flex justify-content-center text-decoration-none">
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
                                                        <h1 class="pt-3 mb-0 teal success-story-header"><?php echo $quote; ?></h1>
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
            <!-- / Success Stories Block -->

		
        
        </div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
