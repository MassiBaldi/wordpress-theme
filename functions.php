<?php

  if (!function_exists('import_style')) {

    function import_style() {
      wp_enqueue_style('massi', get_template_directory_uri() . '/style.css');
    }

    add_action('wp_enqueue_scripts', 'import_style');
  }

  if (!function_exists('massi_setup')) {

    function massi_setup() {

      register_nav_menus(array(
        'header' => 'header'
      ));

      add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'massi_setup');
  }

  if (!function_exists('massi_widgets_init')) {

    function massi_widgets_init() {

      register_sidebar(array(
        'name'          => 'massi-sidebar',
        'id'            => 'massi-sidebar'
      ));
    }

    add_action('widgets_init', 'massi_widgets_init');
  }



?>
