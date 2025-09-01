<?php
if (get_field('form_section', get_the_ID())) {
    $formSection = get_field('form_section', get_the_ID());
    $isSectionActive = $formSection['block_config_is_active'] ?? null;
    $heading = $formSection['heading_heading_group'] ?? null;
    $subHeading = $formSection['sub_heading'] ?? null;
    $icons = $formSection['icons'] ?? null;
    $description = $formSection['description'] ?? null;
    $formEmbed = $formSection['form_embed'] ?? null;

}

?>

<?php if (isset($isSectionActive) && $isSectionActive === true): ?>

    <section class="form-section section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-12">
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
                    <?php if (!empty($icons)): ?>
                        <div class="form-list">
                            <?php foreach ($icons as $box): ?>
                                <div class="form-item">
                                    <?php if ($box['icon']): ?>
                                        <div class="form-image">
                                            <img src="<?php echo esc_url($box['icon']['url']); ?>" alt="<?php echo esc_attr($box['icon']['alt']); ?>">
                                        </div>
                                    <?php endif; ?>

                                    <div class="form-text">
                                        <?= $box['title']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-12">

                    <?php if ($formEmbed): ?>
                        <div class="contact-form-container contactForm__form">
                            <?php echo do_shortcode($formEmbed) ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>