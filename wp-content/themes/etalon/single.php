<?php
    $post = $wp_query->post;
  if (is_singular('designers')) { //slug  категории
      include(TEMPLATEPATH.'/single-dizajnery.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>