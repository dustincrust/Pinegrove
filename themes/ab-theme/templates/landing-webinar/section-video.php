<?php
if (get_field('video_section', get_the_ID())) {
    $video = get_field('video_section', get_the_ID());
    $isSectionActive = $video['block_config_is_active'] ?? null;
    $heading = $video['heading_heading_group'] ?? null;
    $videoIframe = $video['video'] ?? null;
}

?>

<?php if (isset($isSectionActive) && $isSectionActive === true): ?>

    <section class="video section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <?php if (!empty($heading)):
                            get_template_part('templates/parts/section', 'heading', [
                                    'data' => $heading,
                                    'class' => 'section-heading'
                            ]);
                        endif; ?>
                    </div>
                    <?php if (!empty($videoIframe)): ?>
                        <div class="videoWrapper">
                            <?= $videoIframe; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>