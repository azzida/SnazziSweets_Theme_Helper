<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function cdn_preprocess_node(&$variables) {
  
  if ($variables['type'] == 'snazzi_cookie' && $variables['view_mode'] == 'teaser'){
    //React to the Cookie Jar
    
    //Set the linked path to the page URL, with nid appended
    $variables['content']['field_snazzi_photo'][0]['#path']['path'] = 'cookies/'.$variables['nid'];
        
    //If the title is visible, hide it
    if(isset($variables['title'])){
      $variables['title'] = FALSE;
    }
  }      
  else if ($variables['type'] == 'snazzi_cake' && $variables['view_mode'] == 'teaser'){
    //React to the Cake Carousel
    
    //If the title is visible, hide it
    if(isset($variables['title'])){
      $variables['title'] = FALSE;
    }
  }
  else if ($variables['type'] == 'snazzi_cupcake' && $variables['view_mode'] == 'teaser'){
    //React to the Cupcake Carousel
    
    //Set the linked path to the page URL, with nid appended
    $variables['content']['field_snazzi_photo'][0]['#path']['path'] = 'cupcakes/'.$variables['nid'];
    
    //If the title is visible, hide it
    if(isset($variables['title'])){
      $variables['title'] = FALSE;
    }
  }
}
