<?php
//  Pour la sécurité, obligatoire ici ou sur functions.php
defined('ABSPATH') or die('');

/**
 * Prise en compte des différents éléments de Wordpress
 */
add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('html5');
    add_theme_support('post-thumbnails');
});

add_action('after_setup_theme', function () {
    set_post_thumbnail_size(250,250,true);
});