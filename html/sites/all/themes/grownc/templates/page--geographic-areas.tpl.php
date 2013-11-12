<?php 
/**
 * @file
 * Alpha's theme implementation to display a single Drupal page.
 */
?>
<?php
  drupal_add_css(drupal_get_path('theme', 'grownc') . '/css/regions-map.css');
  drupal_add_js(drupal_get_path('theme', 'grownc') . '/js/regions-map.js');
?>
<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>
  
  <?php if (isset($page['content'])) : ?>
    <?php print render($page['content']); ?>
  <?php endif; ?>  
  
  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>