<?php 
    $showNewsletter = get_field('display_newsletter_on_virtual_courses','option');
    $newsletterId = get_field('short_code_for_newsletter_on_virtual_courses_page','option');
    $newsletterDesc = get_field('text_displayed_over_newsletter_on_virtual_courses','option'); 
    $financialPlanImg = get_field('sample_financial_plan_image',100);
    $fPPic = $financialPlanImg['sizes']['large'];
    
    ;?>
  <section class="linear-gradient pb-3">
      <div class="container">
          <div class="mb-4 row d-flex justify-content-center">
              <div class="health-guidebook-background row w-100">
                  <?php if ($financialPlanImg): ?>
                      <div class="col-12 col-md-4">
                          <div class="d-flex align-items-center health-guidebook__image--wrapper h-100">
                              <img src="<?php echo $fPPic; ?>" class="rect-logo-img">
                          </div>
                      </div>
                  <?php endif; ?>
                  <div class="col-12 col-md-8 d-flex align-items-center">
                      <div class="small-padding md-padding sample-newsletter">
                          <p class="block-heading dk-teal-font" style="font-weight:700">Get Your Sample Financial Plan</p>
                          <p class="number-subheading mb-0 dk-teal-font lg-w-80">Sign up for our newsletter and receive Your Financial H.E.A.L.T.H. Guidebook - a comprehensive guide designed to organize and secure your financial future.</p>
                          <!-- <?php echo do_shortcode('[3d-flip-book mode="link-lightbox" id="5337" classes="fb3d-h-500"]<button type="button" class="btn blue-btn-outline">View Here <i class="fas fa-arrow-right pl-2"></i></button>[/3d-flip-book]'); ?> -->
                          <?php if($showNewsletter && !empty($newsletterId)): ;?>
                          <div class="virtual-courses-newsletter">
                        
                              <script src="https://js.hsforms.net/forms/embed/50269108.js" defer></script>
<div class="hs-form-frame" data-region="na1" data-form-id="f59aa113-54ce-4b7f-b1ec-e3a3242b32ae" data-portal-id="50269108"></div>
                          </div>
                      <?php endif;?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>