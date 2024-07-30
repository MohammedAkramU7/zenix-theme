<?php
function my_basic_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'my-basic-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'my_basic_theme_setup' );

function my_basic_theme_scripts() {
    wp_enqueue_style( 'my-basic-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_basic_theme_scripts' );

/** here is the Github updater */
require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/MohammedAkramU7/zenix-theme',
	__FILE__,
	'zenix-theme'
);