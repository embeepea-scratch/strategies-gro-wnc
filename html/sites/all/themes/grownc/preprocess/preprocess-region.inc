<?php

/**
 * Allows the region__content.tpl.php file to be overridden.
 */
function grownc_alpha_preprocess_region(&$vars) {
  $menu_object = menu_get_object();
  if (isset($menu_object->type) && $vars['region'] == 'content') {
    if (isset($menu_object->type)) {
      $vars['theme_hook_suggestions'][] = 'region__content__' . $menu_object->type;
    }
  }
}