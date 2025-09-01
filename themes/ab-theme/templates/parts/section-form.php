<?php
$post_id        = get_the_ID();
$formSection    = get_field('form_section', $post_id);

// pull fields
$isActiveRaw    = $formSection['block_config_is_active'] ?? null;
$heading        = $formSection['heading_heading_group'] ?? null;
$subHeading     = $formSection['sub_heading'] ?? null;
$description    = $formSection['description'] ?? null;

/**
 * Get the HubSpot shortcode from (in order):
 * 1) page field "hubspot_sourcecode"
 * 2) inside group "form_section" as "hubspot_sourcecode"
 * 3) Options page field "hubspot_sourcecode"
 */
$formEmbed = get_field('hubspot_sourcecode', $post_id);
if (empty($formEmbed) && is_array($formSection) && isset($formSection['hubspot_sourcecode'])) {
    $formEmbed = $formSection['hubspot_sourcecode'];
}
if (empty($formEmbed)) {
    $formEmbed = get_field('hubspot_sourcecode', 'option');
}

// normalize ACF true/false
$isActive = in_array($isActiveRaw, [true, 1, '1'], true);

// Admin-only debug flag
$debug = current_user_can('administrator');
?>

<?php if ($isActive): ?>
<section id="landing-page-form" class="form-section section-spacing">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php if (!empty($subHeading)): ?>
          <div class="sub-heading"><?= $subHeading; ?></div>
        <?php endif; ?>
        <div class="heading">
          <?php if (!empty($heading)):
            get_template_part('templates/parts/section', 'heading', [
              'data'  => $heading,
              'class' => 'section-heading'
            ]);
          endif; ?>
        </div>
        <?php if (!empty($description)): ?>
          <div class="description"><?= $description; ?></div>
        <?php endif; ?>
      </div>

      <div class="col-12">
        <?php if (!empty($formEmbed)): ?>
          <div class="contact-form-container contactForm__form">
            <?php
              // in case the editor wrapped it in <p> tags
              echo do_shortcode('[hubspot type="form" portal="50269108" id="0ff9e5e9-7494-44e5-90fb-0a60cf6da042"]');
            ?>
          </div>
        <?php elseif ($debug): ?>
          <!-- DEBUG: No shortcode found. Tried:
               get_field('hubspot_sourcecode', $post_id),
               $formSection['hubspot_sourcecode'],
               get_field('hubspot_sourcecode', 'option').
               isActiveRaw=<?php echo esc_html(var_export($isActiveRaw, true)); ?> -->
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php elseif ($debug): ?>
  <!-- DEBUG: Section inactive. block_config_is_active=<?php echo esc_html(var_export($isActiveRaw, true)); ?> -->
<?php endif; ?>