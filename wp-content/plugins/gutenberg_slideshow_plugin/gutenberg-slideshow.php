<?php
/*
Plugin Name: Gutenberg Slideshow Block
Description: Custom Gutenberg block to display a slideshow of WordPress posts.
Version: 1.0
Author: Ghevaram Suthar
*/


function enqueue_block_assets() {
    wp_enqueue_script('gutenberg-slideshow-block-script', plugin_dir_url(__FILE__) . 'js/block.js', array('wp-blocks', 'wp-editor', 'wp-element'));
    wp_enqueue_style('gutenberg-slideshow-block-style', plugin_dir_url(__FILE__) . 'css/block.css');
}

add_action('enqueue_block_assets', 'enqueue_block_assets');
