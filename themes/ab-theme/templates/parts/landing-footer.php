<?php
if (get_field('footer', get_the_ID())) {
    $footerSettings = get_field('footer', get_the_ID());
    $logo = $footerSettings['logo'] ?? null;
    $links = $footerSettings['links'] ?? null;
    $description = $footerSettings['description'] ?? null;
}
?>
<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
    <div class="container">
        <div class="footer-content-top">
            <?php if (!empty($logo)) : ?>
                <div class="footer-logo">
                    <a href="<?= home_url(); ?>">
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                    </a>
                </div>
            <?php endif; ?>

            <?php if (!empty($description)) : ?>
                <div class="footer-description">
                    <?php echo wp_kses_post($description); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="container footer-content-bottom">
        <div class="footer-content-bottom-inner-wrapper">
            <?php if (!empty($links)) : ?>
                <div class="footer-links">
                    <ul>
                        <?php foreach ($links as $link) :
                            $link_url = $link['link']['url'] ?? '#';
                            $link_title = $link['link']['title'] ?? '';
                            $link_target = !empty($link['link']['target']) ? ' target="_blank" rel="noopener noreferrer"' : '';
                            ?>
                            <li>
                                <a href="<?php echo esc_url($link_url); ?>" <?php echo $link_target; ?>>
                                    <?php echo esc_html($link_title); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="copyright">
                &copy; <?php echo date('Y'); ?>
                <a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
                <span class="sep"> | </span>
                <?php echo esc_html__('All Rights Reserved.', 'text-domain'); ?>
            </div>
        </div>
    </div>
</footer>
