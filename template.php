<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

 function snazzisweets_theme_links__menu_snazzi_navbar($vars)
{
	$vars['links']['menu-3221']['title'] = "<span class='fa fa-shopping-cart'></span>" . $vars['links']['menu-3221']['title'];
	$vars['links']['menu-3221']['html'] = true;
	
	return theme_links($vars);
}
/*function snazzisweets_theme_field__body__snazzi_cookie ($variables) {
  if ($variables['element']['#view_mode'] == 'snazzi_ubercart_cart_view'){
    $variables['classes_array'][] = 'col-xs-6';
  }
  
  
  $output = '';

  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<div class="field-label"' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</div>';
  }

  // Render the items.
  $output .= '<div class="field-items"' . $variables['content_attributes'] . '>';
  foreach ($variables['items'] as $delta => $item) {
    $classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even');
    $output .= '<div class="' . $classes . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</div>';
  }
  $output .= '</div>';

  // Render the top-level DIV.
  $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';

  
  
  return $output;
}*/

