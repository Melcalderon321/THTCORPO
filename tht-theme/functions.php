<?php
/**
 * THT Corporation — Divi Child Theme
 * functions.php
 */

// 1. Enqueue parent (Divi) stylesheet + child stylesheet
function tht_child_enqueue_styles() {
    // Parent Divi stylesheet
    wp_enqueue_style(
        'divi-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Child theme stylesheet
    wp_enqueue_style(
        'tht-child-style',
        get_stylesheet_uri(),
        array( 'divi-parent-style' ),
        wp_get_theme()->get( 'Version' )
    );

    // Google Fonts
    wp_enqueue_style(
        'tht-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Poppins:wght@300;400;600;700;800;900&display=swap',
        array(),
        null
    );
}
add_action( 'wp_enqueue_scripts', 'tht_child_enqueue_styles' );

// 2. Enqueue scripts
function tht_child_enqueue_scripts() {
    // Tailwind (utility classes used across templates)
    wp_enqueue_script(
        'tailwind',
        'https://cdn.tailwindcss.com',
        array(),
        null,
        false // load in <head> so Tailwind JIT processes the page
    );

    // GSAP core
    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',
        array(),
        '3.12.2',
        true
    );

    // GSAP ScrollTrigger
    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js',
        array( 'gsap' ),
        '3.12.2',
        true
    );

    // Child theme inline scripts (animations, carousel logic, etc.)
    wp_enqueue_script(
        'tht-inline-scripts',
        get_stylesheet_directory_uri() . '/inline-scripts.js',
        array( 'gsap', 'gsap-scrolltrigger' ),
        wp_get_theme()->get( 'Version' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'tht_child_enqueue_scripts' );

// 3. Theme support
function tht_child_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'menus' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'tht_child_setup' );
