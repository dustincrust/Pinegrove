<?php

$header = get_field('header');
?>

<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?> sticky-header sticky-header-page" role="banner">
    <nav class="navbar">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <div class="navbar-brand">
            </div>
        </a>
        <?php if ($header['download_cta']): ?>
            <a href="<?php echo $header['download_cta']['url']; ?>" class="pinegrove-button --light cta-download">
                <?php echo $header['download_cta']['title']; ?>
            </a>
        <?php endif; ?>
    </nav>
</header>