<?php
  $post = $wp_query->post;
 
  if (is_category('product-category')) { //slug  категории
      include(TEMPLATEPATH.'/single-product.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>