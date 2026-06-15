<?php
/**
 * X10 Kiáº¿n Táº¡o Háº¡nh PhÃºc Theme functions
 */
add_action( 'after_setup_theme', 'x10_theme_setup' );
function x10_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}