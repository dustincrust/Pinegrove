<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) {?>
        <div id="footer-widget" class="row m-0 <?php if(!is_theme_preset_active()){ echo 'bg-green'; } ?>">
            <div class="container">
                <div class="row pb-5">
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-sm-12 col-md-3 footer-1"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-4 col-md-3 footer-2 left-divider"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div class="col-4 col-md-3 footer-3"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>
                    <!-- <?php if ( is_active_sidebar( 'footer-4' )) : ?>
                        <div class="col-4 col-md-2"><?php dynamic_sidebar( 'footer-4' ); ?></div>
                    <?php endif; ?> -->
                </div>
            </div>
        </div>

<?php }