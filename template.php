<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

 //Set img-responsive on our images
function snazzisweets_theme_preprocess_image(&$variables) {
  if(isset($variables['style_name'])) {
    if($variables['style_name'] == 'snazzi_fancybox_banner_item') {
     $variables['attributes']['class'][] = "img-responsive";
		}
	}
}
