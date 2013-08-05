<?php

add_filter( 'wp_title', 'special_wp_title',11 );

  function special_wp_title( $title ) {
    $title = 'I Am Awesome';
    return $title;
  }

?>