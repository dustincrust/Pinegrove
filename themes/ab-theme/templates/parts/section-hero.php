<?php
if (get_field('hero_section', get_the_ID())) {
    $heroSection = get_field('hero_section', get_the_ID());
    $isSectionActive = $heroSection['block_config_is_active'] ?? null;
    $heading = $heroSection['heading_heading_group'] ?? null;
    $description = $heroSection['description'] ?? null;
    $questionsImage = $heroSection['questions_image'] ?? null;
    $questions = $heroSection['questions'] ?? null;
    $bgImage = $heroSection['background_image'] ?? null;
    $bgImageMobile = $heroSection['background_image_mobile'] ?? null;
}

$bgImageUrl = !empty($bgImage) ? esc_url($bgImage['url']) : '';
$bgImageMobileUrl = !empty($bgImageMobile) ? esc_url($bgImageMobile['url']) : '';

?>

<?php if (isset($isSectionActive) && $isSectionActive === true): ?>

    <section class="hero-section">
        <div class="hero-bg">
            <picture>
                <source media=" (max-width: 991px)" srcset="<?php echo $bgImageMobileUrl; ?>">
                <img class="home-testimonials-header__image" src="<?php echo $bgImageUrl ?>" alt="">
            </picture>
        </div>
        <!-- <div class="hero-bg-mobile" style="background-image: url('<?php echo $bgImageMobileUrl; ?>');"></div> -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="hero-content">
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
                        <?php if (!empty($questions)): ?>
                            <div class="questions">
                                <?php foreach ($questions as $question): ?>
                                    <div class="question-item">
                                        <?php if (!empty($questionsImage)): ?>
                                            <div class="question-image">
                                                <img src="<?php echo esc_url($questionsImage['url']); ?>" alt="<?php echo esc_attr($questionsImage['alt']); ?>">
                                            </div>
                                        <?php endif; ?>

                                        <div class="question-text">
                                            <?= $question['question']; ?>
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