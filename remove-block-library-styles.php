<?php
/*
Plugin Name:    Remove Block Library Styles
Plugin URI:     https://rocketapps.com.au/
Description:    Prevent Gutenberg styles from loading on the front-end. Just activate the plugin, nothing to configure.
Version:        1.0.0
Author:         Rocket Apps
Author Email:   support@rocketapps.com.au
*/

/* Prevent Gutenberg Block Library CSS from loading on the frontend */
function kill_gutenberg_block_library_css() {
    wp_dequeue_style( 'wp-block-library' );             /* WP core */
    wp_dequeue_style( 'wp-block-library-theme' );       /* WP core */
    wp_dequeue_style( 'wc-blocks-style' );              /* WooCommerce */
    wp_dequeue_style( 'storefront-gutenberg-blocks' );  /* Storefront theme */
} 
add_action( 'wp_enqueue_scripts', 'kill_gutenberg_block_library_css', 100 );