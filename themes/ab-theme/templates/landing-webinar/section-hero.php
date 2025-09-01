<?php
if (get_field('hero_section', get_the_ID())) {
    $heroSection = get_field('hero_section', get_the_ID());
    $isSectionActive = $heroSection['block_config_is_active'] ?? null;
    $heading = $heroSection['heading_heading_group'] ?? null;
    $subheading = $heroSection['subheading'] ?? null;
    $description = $heroSection['description'] ?? null;
    $webinar_info = $heroSection['webinar_info'] ?? null;

    $bgImage = $heroSection['background_image'] ?? null;
    $bgImageMobile = $heroSection['background_image_mobile'] ?? null;
    $bgImageUrl = !empty($bgImage) ? esc_url($bgImage['url']) : '';
    $bgImageMobileUrl = !empty($bgImageMobile) ? esc_url($bgImageMobile['url']) : '';
    $formEmbed = $heroSection['hero_form'] ?? null;
}

?>

<?php if (isset($isSectionActive) && $isSectionActive === true): ?>

    <section class="hero-section">
        <div class="hero-bg">
            <picture>
                <!--                <source media=" (max-width: 991px)"-->
                <!--                        srcset="-->
                <?php //echo get_template_directory_uri(); ?><!--/inc/assets/img/hero-mobile-bg.png">-->
                <?php if ($bgImageMobileUrl): ?>
                    <source media=" (max-width: 991px)" srcset="<?php echo $bgImageMobileUrl; ?>">
                <?php endif; ?>
                <img class="home-testimonials-header__image" src="<?php echo $bgImageUrl ?>" alt="">
            </picture>
        </div>
        <!-- <div class="hero-bg-mobile" style="background-image: url('<?php echo $bgImageMobileUrl; ?>');"></div> -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-content">
                        <?php if (!empty($subheading)): ?>
                            <div class="sub-heading">
                                <?= $subheading; ?>
                            </div>
                        <?php endif; ?>
                        <div class="heading">
                            <?php if (!empty($heading)):
                                get_template_part('templates/parts/section', 'heading', [
                                        'data' => $heading,
                                        'class' => 'section-heading'
                                ]);
                            endif; ?>
                        </div>
                        <?php if (!empty($description)): ?>
                            <div class="description">
                                <?= $description; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($webinar_info)): ?>
                        <div class="hero-webinar-info">
                            <div class="hero-webinar-info__content">
                                <?php if ($webinar_info['heading']): ?>
                                    <p class="hero-webinar-info__contentTitle"><?php echo $webinar_info['heading'] ?></p>
                                <?php endif; ?>
                                <?php if ($webinar_info['date_time'] || $webinar_info['location']): ?>
                                    <div class="hero-webinar-info__contentDetails">
                                        <?php if ($webinar_info['date_time']): ?>
                                            <div class="hero-webinar-info__contentDate">
                                                <p>Date & Time:</p>
                                                <p><?php echo $webinar_info['date_time'] ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($webinar_info['location']): ?>
                                            <div class="hero-webinar-info__contentLocation">
                                                <p>Location:</p>
                                                <p><?php echo $webinar_info['location'] ?>
                                                    <?php if ($webinar_info['register_link']): ?>
                                                        <a href="<?php echo $webinar_info['register_link']['url'] ?>"><?php echo $webinar_info['register_link']['title'] ?></a>
                                                    <?php endif; ?>
                                                </p>
                                            </div>

                                        <?php endif; ?>

                                    </div>
                                <?php endif; ?>
                            </div>

                            <!--                            --><?php //if ($formEmbed): ?>
                            <div class="hero-webinar-info-form">
                                <?php echo do_shortcode('[wpforms id="6508"]	'); ?>
                            </div>
                            <!--                            --><?php //endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php endif; ?>