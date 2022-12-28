<?php 
// Enqueue of styles
function osho_styles(){
    wp_register_style('custom_style' , get_template_directory_uri() . '/style.css');
    wp_enqueue_style('custom_style');
}
add_action("wp_enqueue_scripts","osho_styles");

// Enqueue of scripts


// Essential theme Settings
function osho_essential_theme_setup(){
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action("after_setup_theme","osho_essential_theme_setup");

// Register Menu
function osho_menus(){
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu','osho'),
        'footer-menu'  => __('Footer Menu','osho'),
        'quick-links'  => __('Quick Links','osho'),
    ));

}
add_action("after_setup_theme","osho_menus");

// Theme option settings
if( function_exists('acf_add_options_page') ) {
    
  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));
   
}

// svg support image
// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );
?>