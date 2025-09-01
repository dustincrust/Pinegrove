<?php
if (get_field('partner_section', get_the_ID())) {
    $partnerSection = get_field('partner_section', get_the_ID());
    $isSectionActive = $partnerSection['block_config_is_active'] ?? null;
    $heading = $partnerSection['heading_heading_group'] ?? null;
    $subHeading = $partnerSection['subheading'] ?? null;
    $description = $partnerSection['description'] ?? null;
    $cta = $partnerSection['cta'] ?? null;
    $image = $partnerSection['image'] ?? null;
}

?>

<?php if (isset($isSectionActive) && $isSectionActive === true): ?>

    <section class="partner-section section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="partner-content">
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
                        <?php if (!empty($description)): ?>
                            <div class="description">
                                <?= $description; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($cta)): ?>
                            <div class="cta ">
                                <a class="cta-link pinegrove-button --light" href="<?= $cta['url']; ?>" target="<?= $cta['target']; ?>">
                                    <?= $cta['title']; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <?php if (!empty($image)): ?>
                        <div class="partner-image">
                            <img src="<?= $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>