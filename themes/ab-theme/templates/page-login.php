<?php
/*
 * Template Name: Login Page
 */
get_header();?>


<?php
$contactPageID = 43;
$title = get_field('title', $contactPageID);
$heading = get_field('heading', $contactPageID);
$subheading = get_field('subheading', $contactPageID);

$icon = get_field('email_icon', $contactPageID);
$iconPic = $icon['sizes']['large'];
$email = get_field('email', $contactPageID);
$image = get_field('contact_img', $contactPageID);

$contactFormId = get_field('wpforms_id', $contactPageID);

if(get_field('left_column', get_the_ID())) {
    $leftColumn = get_field('left_column', get_the_ID());
    $lHeading = $leftColumn['heading'];
    $lDesc = $leftColumn['description'];
    $lCTA = $leftColumn['cta'];
}
if(get_field('right_column', get_the_ID())) {
    $rightColumn = get_field('right_column', get_the_ID());
    $rHeading = $rightColumn['heading'];
    $rDesc = $rightColumn['description'];
    $rCTA = $rightColumn['cta'];
}
?>

<section class="login-page">
    <div class="container">
        <div class="row login-page__wrapper">
            <div class="col-12 col-lg-6 login-page__column login-page__column--left">
                <?php if(isset($lHeading)): ?>
                    <h2 class="login-page__heading"> <?php echo $lHeading; ?> </h2>
                <?php endif; ?>
                <?php if(isset($lDesc)): ?>
                    <div class="login-page__description"> <?php echo $lDesc; ?> </div>
                <?php endif; ?>
                <?php if(isset($lCTA)): ?>
                    <a href="<?php echo esc_url($lCTA['url']); ?>" target="<?php echo esc_attr($lCTA['target']); ?>" class="login-page__cta">
                        <?php echo esc_html($lCTA['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-6 login-page__column login-page__column--right">
                <?php if(isset($rHeading)): ?>
                    <h2 class="login-page__heading"> <?php echo $rHeading; ?> </h2>
                <?php endif; ?>
                <?php if(isset($rDesc)): ?>
                    <div class="login-page__description"> <?php echo $rDesc; ?> </div>
                <?php endif; ?>
                <?php if(isset($rCTA)): ?>
                    <a href="<?php echo esc_url($rCTA['url']); ?>" target="<?php echo esc_attr($rCTA['target']); ?>" class="login-page__cta">
                        <?php echo esc_html($rCTA['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
<section class="py-5 client-page-contact">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <h1 class="teal block-title general-ss-name block-page__name">Contact Us</h1>
                <p class="dk-teal-font heading-48 mb-1 lead baskerville  block-page__title">Talk to us about </br>your situation & goals</p>
                <p class="block-subheading w-85 ltbl-text block-page__subtitle">
                    We would love to hear about your current financial situation
                    and discuss if we can help. Please fill out the form or email us
                    to start the conversation.</p>
                <div class="row d-none d-lg-flex">
                    <div class="col-12">
                        <div class="contact__image--wrapper">
                            <?php if($image): ;?>
                                <picture>
                                    <source srcset="<?php echo $image['sizes']['medium_large']?>">
                                    <img class="contact__image" src="<?php echo $image['sizes']['medium_large']?>" width="<?php echo $image['sizes']['medium_large-width']?>" height="<?php echo $image['sizes']['medium_large-height']?>" title="<?php echo $image['title']?:$image['alt']?>" alt="<?php echo $image['alt']?:$image['title']?>"/>
                                </picture>
                            <?php endif;?>
                        </div>
                        <div class="contact-email">
                            <div class="row">
                                <div class="col-3 col-md-2">
                                    <?php if($icon): ?>
                                        <div class="icon-container ">
                                            <img src="<?php echo $iconPic;?>" class="financial-prosperity-img">
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="col-9 col-md-10 sm-less-left-padding d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 light-weight poppins-block-smaller-heading contact__email--title">Email Us</h3>
                                    <h3 class="teal sm-fs-16 contact__email--wrapper"><a class="contact__email" href="mailto:<?php echo $email;?>"><?php echo $email;?></a></h3>
                                </div>

                            </div>

                        </div>

                    </div>
                    <?php if($email): ?>

                    <?php endif;?>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="contact-form-container contactForm__form">
                    <?php echo do_shortcode('[wpforms id="' . $contactFormId .'" title="false"]'); ?>
                </div>
            </div>


            <div class="col-12 d-lg-none">
                <div class="contact__image--wrapper">
                    <?php if($image): ;?>
                        <picture>
                            <source srcset="<?php echo $image['sizes']['medium_large']?>">
                            <img class="contact__image" src="<?php echo $image['sizes']['medium_large']?>" width="<?php echo $image['sizes']['medium_large-width']?>" height="<?php echo $image['sizes']['medium_large-height']?>" title="<?php echo $image['title']?:$image['alt']?>" alt="<?php echo $image['alt']?:$image['title']?>"/>
                        </picture>
                    <?php endif;?>
                </div>
                <div class="contact-email">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <?php if($icon): ?>
                                <div class="icon-container ">
                                    <img src="<?php echo $iconPic;?>" class="financial-prosperity-img">
                                </div>
                            <?php endif;?>
                        </div>
                        <div class="col-9 col-md-10 sm-less-left-padding d-flex flex-column justify-content-center">
                            <h3 class="mb-0 light-weight poppins-block-smaller-heading contact__email--title">Email Us</h3>
                            <h3 class="teal sm-fs-16 contact__email--wrapper"><a class="contact__email" href="mailto:<?php echo $email;?>"><?php echo $email;?></a></h3>
                        </div>

                    </div>

                </div>

            </div>
            <?php if($email): ?>

            <?php endif;?>

        </div>
    </div>
</section>
<!-- / Contact Us Section -->

<?php get_footer();?>
