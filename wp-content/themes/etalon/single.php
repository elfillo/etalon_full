<?php
  $post = $wp_query->post;
 
  if (is_singular('product')) { //slug  категории
      include(TEMPLATEPATH.'/single-product.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>