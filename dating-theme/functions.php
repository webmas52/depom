<?php
function dating_theme_scripts() {
    wp_enqueue_style('dating-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'dating_theme_scripts');
