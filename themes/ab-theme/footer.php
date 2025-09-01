<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if (is_page_template('templates/landing-page.php')): ?>
    <?php get_template_part('templates/parts/landing-footer'); ?>
<?php elseif (is_page_template('templates/landing-webinar.php')): ?>
    <?php get_template_part('templates/landing-webinar/landing-footer'); ?>
<?php elseif (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php') && !is_page_template('/templates/landing-page.php')): ?>
    </div><!-- .row -->
    </div><!-- .container -->
    </div><!-- #content -->
    <?php get_template_part('footer-widget'); ?>
    <footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
        <div class="container footer-divider">
            <div id="social-buttons">
                <a href="https://www.facebook.com/Pine-Grove-Financial-Group-1788246514552351/"><img src="/wp-content/uploads/2021/03/Fill-1@3x.png" alt="Facebook Button" width="30" height="30" /></a>
                <!-- <a href=""><img src="/wp-content/uploads/2021/02/Twitter@3x.png" alt="Twitter Button" width="30" height="30" /></a>
                <a href=""><img src="/wp-content/uploads/2021/03/Combined-Shape@3x.png" alt="Instagram Button" width="30" height="30" /></a> -->
            </div>
            <div class="site-info">
                &copy; <?php echo date('Y'); ?>     <?php echo '<a href="' . home_url() . '">' . get_bloginfo('name') . '</a>'; ?>
                <span class="sep"> | </span>
                <?php echo esc_html__('All Rights Reserved.'); ?>
            </div><!-- close .site-info -->
        </div>
        <div style="font-size: 0.7em;text-align:center;color: #fff; width: 60%;margin: 0 auto;margin-top: 70px">
            <p>Forbes Best-in-State Wealth Advisor and Forbes Top Next-Gen Wealth Advisors(2022). The Forbes
                Best-in-State Wealth Advisor is developed by SHOOK Research, is based on an algorithm of qualitative
                data, rating thousands of wealth advisors with a minimum of seven years’ experience and weighing factors
                like revenue trends, assets under management, compliance records, industry experience, and best
                practices learned through telephone and in-person interviews. Portfolio performance is not a criteria
                due to varying client objectives and lack of audited data. Neither Forbes nor SHOOK receive a fee in
                exchange for rankings. Listing in this publication and/or award is not a guarantee of future investment
                success. This recognition should not be construed as an endorsement of the advisor by any client.</p>

            <p>The Forbes Next-Gen Wealth Advisors rankings, developed by <a href="http://www.shookresearch.com/" target="_blank">SHOOK Research</a>, is
                based on an algorithm of qualitative criterion—mostly gained through telephone and in-person due
                diligence interviews—and quantitative data. Those advisors that are considered have a minimum of four
                years' experience, and the algorithm weighs factors like revenue trends, assets under management,
                compliance records, industry experience and those that encompass the highest standards of best
                practices. Portfolio performance is not a criterion due to varying client objectives and lack of audited
                data. Neither Forbes nor SHOOK receive a fee in exchange for rankings.</p>

            <p>Inc. 5000 Fasting Growing Private Company ranking. Companies on the 2021 Inc. 5000 are ranked according
                to percentage revenue growth from 2017 to 2020. To qualify, companies must have been founded and
                generating revenue by March 31, 2017. They must be U.S.-based, privately held, for-profit, and
                independent—not subsidiaries or divisions of other companies—as of December 31, 2020. (Since then, some
                on the list may have gone public or been acquired.) The minimum revenue required for 2017 is $100,000;
                the minimum for 2020 is $2 million. As always, Inc. reserves the right to decline applicants for
                subjective reasons. Growth rates used to determine company rankings were calculated to three decimal
                places. This ranking is not an endorsement, nor does the ranking imply investment success.</p>
        </div>
    </footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>