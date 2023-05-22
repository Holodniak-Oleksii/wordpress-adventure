<?php

if(!function_exists('band_digital_setup')){
   function band_digital_setup(){
      add_theme_support('custom-logo', [
         'height'      => 50,
         'width'       => 50,
         'flex-width'  => false,
         'flex-height' => false,
         'header-text' => '',
      ]);
   }
   // мініатури картинок
   add_theme_support('post-thumbnails');
   add_theme_support('menus');

}

function add_css_index(){
   wp_register_style('index', get_template_directory_uri() . '/assets/css/index.css', false,'1.1','all');
   wp_register_style('travel-card', get_template_directory_uri() . '/assets/css/components/travel-card.css', false,'1.1','all');
   wp_register_style('helper-block', get_template_directory_uri() . '/assets/css/components/helper-block.css', false,'1.1','all');
   wp_register_style('slider', get_template_directory_uri() . '/assets/css/components/slider.css', false,'1.1','all');
   wp_register_style('hotels', get_template_directory_uri() . '/assets/css/components/hotels.css', false,'1.1','all');
   wp_register_style('main-banner', get_template_directory_uri() . '/assets/css/components/main-banner.css', false,'1.1','all');
   wp_register_style('maps', get_template_directory_uri() . '/assets/css/components/maps.css', false,'1.1','all');
   wp_register_style('detail', get_template_directory_uri() . '/assets/css/components/detail.css', false,'1.1','all');
   wp_register_style('hotels', get_template_directory_uri() . '/assets/css/components/hotels.css', false,'1.1','all');
   wp_register_style('contact', get_template_directory_uri() . '/assets/css/components/contact.css', false,'1.1','all');
   
   wp_enqueue_style('index');
   wp_enqueue_style('travel-card');
   wp_enqueue_style('helper-block');
   wp_enqueue_style('slider');
   wp_enqueue_style('hotels');
   wp_enqueue_style('main-banner');
   wp_enqueue_style('maps');
   wp_enqueue_style('detail');
   wp_enqueue_style('hotels');
   wp_enqueue_style('contact');
}

add_action('wp_enqueue_scripts', 'add_css_index');
