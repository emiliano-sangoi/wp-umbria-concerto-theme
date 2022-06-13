<?php
function custom_enqueue_scripts()
{
  // * styles *



  // custom style
  wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', false, '1.0.0', null);
  wp_enqueue_style('custom');

  // * scripts *



  // custom script
  wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', false, '1.0.0', true);
  wp_enqueue_script('custom');
}

/**
 * Add scripts via wp_head()
 *
 * @return void
 * @author Keir Whitaker
 */

function bootstrap_script_init() {

    $template_dir = get_template_directory_uri();

    //css:
    //=========================================================================================================================

    //style:
    wp_register_style( 'screen', $template_dir . '/style.css', '', array(), 'screen' );
    wp_enqueue_style( 'screen' );

    //bootstrap icons
    wp_register_style( 'bootstrap_icons', $template_dir .'/node_modules/bootstrap-icons/font/bootstrap-icons.css', '', '1.8.3');
    wp_enqueue_style( 'bootstrap_icons' );


    //js:
    //=========================================================================================================================

    // remove jQuery
    wp_deregister_script('jquery');
    // add latest jQuery * uncomment to enable jQuery *
    // wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', false, '3.6.0', false);
    // wp_enqueue_script('jquery');

    wp_register_script('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js', false, '5.1.0', true);
    wp_enqueue_script('bootstrap5');




}

add_action('wp_enqueue_scripts', 'bootstrap_script_init', 100);