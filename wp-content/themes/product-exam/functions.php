<?php

/**
 * This function create path assets with enqueue
 *
 * @return void
 */
function create_assets() {

wp_enqueue_style( 'product-show', get_stylesheet_directory_uri() . '/assets/css/master.css', array(), filemtime(  get_template_directory() . '/assets/css/master.css' ) );
}
add_action( 'wp_enqueue_scripts', 'create_assets' );