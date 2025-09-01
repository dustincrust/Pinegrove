<?php

if (get_field('about_experts', get_the_ID())) {
    $learnSection = get_field('about_experts', get_the_ID());
    $isSectionActive = $learnSection['block_config_is_active'] ?? null;
    $heading = $learnSection['heading_heading_group'] ?? null;
    $subHeading = $learnSection['subheading'] ?? null;
    $featureBoxes = $learnSection['experts'] ?? null; // subfields - image, fullname, title, background_image

}

?>

<?php if (isset($isSectionActive) && $isSectionActive === true): ?>

    <section class="experts-section section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="experts-content">
                        <?php if (!empty($subHeading)): ?>
                            <div class="sub-heading">
                                <?= $subHeading; ?>
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
                        <?php if (!empty($ctaLink)): ?>
                            <div class="cta-sign-up__wrapper">
                                <a class="cta-sign-up pine-button-v2" href="<?= $ctaLink['url']; ?>">
                                    <?= $ctaLink['title']; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($featureBoxes)): ?>
                            <div class="experts-list">
                                <?php foreach ($featureBoxes as $box): ?>
                                    <div class="experts-item">
                                        <?php if ($box['image']): ?>
                                            <div class="experts-image" <?php if ($box['background_image']): ?> style="background-image: url(<?php echo $box['background_image']['url'] ?>)" <?php endif ?>>
                                                <img src="<?php echo esc_url($box['image']['url']); ?>" alt="<?php echo esc_attr($box['image']['alt']); ?>">
                                            </div>
                                        <?php endif; ?>

                                        <div class="experts-desc">
                                            <?php if (!empty($box['fullname'])): ?>
                                                <p class="experts-desc__name">
                                                    <?= $box['fullname']; ?>
                                                </p>
                                            <?php endif; ?>
                                            <?php if (!empty($box['title'])): ?>
                                                <p class="experts-desc__title">
                                                    <?= $box['title']; ?>
                                                </p>
                                            <?php endif; ?>
                                            <?php if (!empty($box['description'])): ?>
                                                <div class="experts-desc__description">
                                                    <?= $box['description']; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>