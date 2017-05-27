
<div id="snazzi-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>  
  <div class="snazzi-details-row-title">
    <div class="snazzi-details-title">
    <?php if (!$page && !empty($title)): ?>
      <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
    <?php endif; ?>
    </div>
  </div>
  <div class="snazzi-details-row-body">
    <div class="snazzi-details-image col-xs-3">
      <?php print render($content['uc_product_image']); ?>
    </div>
    <div class="snazzi-details-body col-xs-6">
      <?php print render($content['body']); ?>
    </div>
    <div class="snazzi-details-price col-xs-3">
      <?php print render($content['display_price']); ?>
    </div>
  </div>
  <div class="snazzi-details-row-addtocart">
   <div class="snazzi-details-addtocart">
      <?php print render($content['add_to_cart']); ?>
   </div>
  </div>
</div>