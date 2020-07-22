<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

//Hide the admin bar for everyone except admins
if ( ! current_user_can( 'manage_options' ) ) {
   add_filter('show_admin_bar', '__return_false');
  }