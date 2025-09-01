<?php
if (get_field('what_you_learn_section', get_the_ID())) {
    $learnSection = get_field('what_you_learn_section', get_the_ID());
    $isSectionActive = $learnSection['block_config_is_active'] ?? null;
    $heading = $learnSection['heading_heading_group'] ?? null;
    $subHeading = $learnSection['subheading'] ?? null;
    $featureBoxes = $learnSection['feature_boxes'] ?? null; // subfields - image, title
    $subHeading = $aboutSection['subheading'] ?? null;
}

?>

<?php if (isset($isSectionActive) && $isSectionActive === true): ?>

    <section class="learn-section section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="learn-content">
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
                        <?php if (!empty($featureBoxes)): ?>
                            <div class="learn-list">
                                <?php foreach ($featureBoxes as $box): ?>
                                    <div class="learn-item">
                                        <?php if ($box['image']): ?>
                                            <div class="learn-image">
                                                <img src="<?php echo esc_url($box['image']['url']); ?>" alt="<?php echo esc_attr($box['image']['alt']); ?>">
                                            </div>
                                        <?php endif; ?>

                                        <div class="learn-text">
                                            <?= $box['title']; ?>
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