<?php
function percetakan_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array('primary' => __('Primary Menu', 'percetakan')));
}
add_action('after_setup_theme', 'percetakan_setup');

function percetakan_assets() {
    // 1. Load stylesheet bawaan tema
    wp_enqueue_style('percetakan-style', get_stylesheet_uri(), array(), '1.0.0');

    // 2. Load CDN Tailwind CSS versi 3
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false);

    // 3. Load Google Material Symbols / Icons
    wp_enqueue_style('google-material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array(), null);

    // 4. Load Google Font (Plus Jakarta Sans)
    wp_enqueue_style('google-font-jakarta', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'percetakan_assets');