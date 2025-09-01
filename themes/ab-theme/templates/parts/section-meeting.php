<?php
if (get_field('meeting_section', get_the_ID())) {
    $meetingSection = get_field('meeting_section', get_the_ID());
    $isSectionActive = $meetingSection['block_config_is_active'] ?? null;
    $heading = $meetingSection['heading_heading_group'] ?? null;
    $subHeading = $meetingSection['subheading'] ?? null;
    $icon = $meetingSection['icon'] ?? null;
    $description = $meetingSection['description'] ?? null;
    $image = $meetingSection['image'] ?? null;
    $imageBG = $meetingSection['background_image'] ?? null;
    $imageBGMobile = $meetingSection['background_image_mobile'] ?? null;
    $cta = $meetingSection['cta'] ?? null;
}

?>

<?php if (isset($isSectionActive) && $isSectionActive === true): ?>

    <section class="meeting-section section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="meeting-content">
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
                                <a class="cta-link pinegrove-button " href="<?= $cta['url']; ?>"
                                   target="<?= $cta['target']; ?>">
                                    <?= $cta['title']; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-0 px-lg-2">
                    <div class="meeting-image__wrapper">
                        <?php if (!empty($imageBG)): ?>
                            <div class="meeting-image">
                                <img src="<?= $imageBG['url']; ?>" alt="<?php echo $imageBG['alt']; ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($image)): ?>
                            <div class="meeting-image-bg">
                                <img src="<?= $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($imageBGMobile)): ?>
                            <div class="meeting-image-mobile">
                                <img src="<?= $imageBGMobile['url']; ?>" alt="<?php echo $imageBGMobile['alt']; ?>">
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>