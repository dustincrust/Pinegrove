<?php
$level = match ($args['data']['heading_level'] ?? '') {
    'h1' => 'h1',
    'h2' => 'h2',
    'h3' => 'h3',
    'h4' => 'h4',
    'h5' => 'h5',
    'h6' => 'h6',
    'span' => 'span',
    'p' => 'p',
    default => 'div',
};
$heading_text = $args['data']['heading_text'] ?? '';
$heading_class = $args['class'] ?? '';

?>
<<?=$level;?> class="<?php echo esc_attr($heading_class); ?>"><?php echo esc_html($heading_text); ?></<?=$level;?>>
