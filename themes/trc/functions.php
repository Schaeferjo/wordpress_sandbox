<?php
add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_styles' );
function theme_slug_enqueue_styles() {
  wp_enqueue_style(
    'theme-slug-style',
    get_stylesheet_uri()
  );
}
?>
