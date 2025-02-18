<?php
function theme_enqueue_assets() {
    // メインのCSS（共通スタイル）
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), '1.0', 'all');

    // フロントページ用のCSS
    if (is_front_page()) {
        wp_enqueue_style('front-page-style', get_template_directory_uri() . '/css/front-page-style.css', array('theme-style'), '1.0', 'all');
    }

    // シングルページ用のCSS
    if (is_single()) {
        wp_enqueue_style('single-page-style', get_template_directory_uri() . '/css/single-page-style.css', array('theme-style'), '1.0', 'all');
    }

    // JavaScriptの読み込み（共通）
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'), // メインメニューの登録
        )
    );
}
add_action('init', 'register_my_menus');

function enqueue_family_spring_styles() {
    if (is_page_template('family-spring.php')) { // 固定ページテンプレートを指定
        wp_enqueue_style('family-spring-style', get_template_directory_uri() . '/css/family-spring.css', array(), '1.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_family_spring_styles');

function enqueue_onsen_guide_styles() {
    if (is_page_template('onsen-guide.php')) { // 固定ページテンプレートを指定
        wp_enqueue_style('onsen-guide-style', get_template_directory_uri() . '/css/onsen-guide.css', array(), '1.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_onsen_guide_styles');

function enqueue_onsen_quality_styles() {
    if (is_page_template('onsen-quality.php')) { // 固定ページテンプレートを指定
        wp_enqueue_style('onsen-quality-style', get_template_directory_uri() . '/css/onsen-quality.css', array(), '1.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_onsen_quality_styles');

// アイキャッチ画像のサポートを追加
function add_featured_image_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_featured_image_support');


function enqueue_new_styles() {
    if (is_page_template('news.php')) { // 固定ページテンプレートを指定
        wp_enqueue_style('news-style', get_template_directory_uri() . '/css/news.css', array(), '1.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_new_styles');
