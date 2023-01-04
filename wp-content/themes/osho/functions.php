<?php 
// Enqueue of styles
function osho_styles(){
    wp_register_style('custom_style' , get_template_directory_uri() . '/style.css');
    wp_enqueue_style('custom_style');

    wp_register_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('slick' , get_template_directory_uri() .'/css/slick.css');
    wp_enqueue_style('slick');

    wp_register_style('slick-theme' , get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('slick-theme');

    wp_register_style('animate' , get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('animate');

    wp_register_style('style' , get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('style');

    wp_register_style('responsive' , get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('responsive');

    wp_register_style('fancybox' , get_template_directory_uri() . '/css/jquery.fancybox.min.css');
    wp_enqueue_style('fancybox');

    wp_register_style('cloudflare' , 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css?ver=5.8.1');
    wp_enqueue_style('cloudflare');

    wp_register_style('jsdelivr' , 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');
    wp_enqueue_style('jsdelivr');

    wp_register_style('googleapis' , 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap');
    wp_enqueue_style('googleapis');

    wp_register_style('fonts-googleapis' , 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    wp_enqueue_style('fonts-googleapis');

}
add_action("wp_enqueue_scripts","osho_styles");

// Enqueue of scripts
function osho_script(){

  wp_register_script('cloudflarejs' , 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' , array(),1,1,1);
  wp_enqueue_script('jquery');
  wp_enqueue_script('cloudflarejs');

  wp_register_script('bootstarpjs' , get_template_directory_uri() . '/js/bootstrap.min.js' ,array(),1,1,1);
  wp_enqueue_script('bootstarpjs');

  wp_register_script('slickjs', get_template_directory_uri() . '/js/slick.min.js' ,array(),1,1,1);
  wp_enqueue_script('slickjs');

  wp_register_script('fancyboxjs' , get_template_directory_uri() . '/js/jquery.fancybox.min.js' , array(),1,1,1);
  wp_enqueue_script('fancyboxjs');

  wp_register_script('waypointsjs' , get_template_directory_uri() . '/js/jquery.waypoints.min.js' , array(),1,1,1);
  wp_enqueue_script('waypointsjs');

  wp_register_script('wowjs' , get_template_directory_uri() . '/js/wow.min.js' , array(),1,1,1);
  wp_enqueue_script('wowjs');

  wp_register_script('scriptsjs' , get_template_directory_uri() . '/js/scripts.js' , array(),1,1,1);
  wp_enqueue_script('scriptsjs');

  wp_register_script('counterupjs' , 'https://unpkg.com/jquery.counterup@2.1.0/jquery.counterup.js' ,array(),1,1,1);
  wp_enqueue_script('counterupjs');

}
add_action("wp_enqueue_scripts","osho_script");


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

// Menu Function for dropdown
function get_menu_id( $location ){
  //get all the location....
  $locations =get_nav_menu_locations();

  //get object id by location.....
  $menu_id = $locations[$location];
  
  return !empty($menu_id) ? $menu_id : '';
}
function get_child_menu_items($menu_array , $parent_id){
  $child_menu = [];
  if(!empty($menu_array) && is_array($menu_array)){
      foreach($menu_array as $menu){
          if( intval($menu->menu_item_parent) === $parent_id){
              array_push($child_menu , $menu);
          }
      }
  }
  return $child_menu;
}

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



// Gallery CPT
  
function gallery_custom_post_type() {
  
  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Galleries', 'Post Type General Name', 'osho' ),
          'singular_name'       => _x( 'Gallery', 'Post Type Singular Name', 'osho' ),
          'menu_name'           => __( 'Galleries', 'osho' ),
          'parent_item_colon'   => __( 'Parent Gallery', 'osho' ),
          'all_items'           => __( 'All Galleries', 'osho' ),
          'view_item'           => __( 'View Gallery', 'osho' ),
          'add_new_item'        => __( 'Add New Gallery', 'osho' ),
          'add_new'             => __( 'Add New', 'osho' ),
          'edit_item'           => __( 'Edit Gallery', 'osho' ),
          'update_item'         => __( 'Update Gallery', 'osho' ),
          'search_items'        => __( 'Search Gallery', 'osho' ),
          'not_found'           => __( 'Not Found', 'osho' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'osho' ),
      );
        
  // Set other options for Custom Post Type
        
      $args = array(
          'label'               => __( 'galleries', 'osho' ),
          'description'         => __( 'Gallery news and reviews', 'osho' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy. 
          'taxonomies'          => array( 'genres' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'menu_icon'           => 'dashicons-format-gallery',
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
          'show_in_rest' => true,
    
      );
        
      // Registering your Custom Post Type
      register_post_type( 'galleries', $args );
    
  }
    
  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */
    
  add_action( 'init', 'gallery_custom_post_type', 0 );

  // ******************************************************************
// Event CPT
function event_custom_post_type() {
  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Our Events', 'Post Type General Name', 'osho' ),
            'singular_name'       => _x( 'Our Event', 'Post Type Singular Name', 'osho' ),
            'menu_name'           => __( 'Our Events', 'osho' ),
            'parent_item_colon'   => __( 'Parent Our Event', 'osho' ),
            'all_items'           => __( 'All Our Events', 'osho' ),
            'view_item'           => __( 'View Our Event', 'osho' ),
            'add_new_item'        => __( 'Add New Our Event', 'osho' ),
            'add_new'             => __( 'Add New', 'osho' ),
            'edit_item'           => __( 'Edit Our Event', 'osho' ),
            'update_item'         => __( 'Update Our Event', 'osho' ),
            'search_items'        => __( 'Search Our Event', 'osho' ),
            'not_found'           => __( 'Not Found', 'osho' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'osho' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'ourevents', 'osho' ),
            'description'         => __( 'Our Event news and reviews', 'osho' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title','excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-calendar-alt',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        // Registering your Custom Post Type
        register_post_type( 'ourevent', $args );
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'event_custom_post_type', 0 );
  

//   *******************************************************************************
// Album CPT
function album_custom_post_type() {
  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Albums', 'Post Type General Name', 'osho' ),
            'singular_name'       => _x( 'Album', 'Post Type Singular Name', 'osho' ),
            'menu_name'           => __( 'Albums', 'osho' ),
            'parent_item_colon'   => __( 'Parent Movie', 'osho' ),
            'all_items'           => __( 'All Albums', 'osho' ),
            'view_item'           => __( 'View Album', 'osho' ),
            'add_new_item'        => __( 'Add New Album', 'osho' ),
            'add_new'             => __( 'Add New', 'osho' ),
            'edit_item'           => __( 'Edit Album', 'osho' ),
            'update_item'         => __( 'Update Album', 'osho' ),
            'search_items'        => __( 'Search Album', 'osho' ),
            'not_found'           => __( 'Not Found', 'osho' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'osho' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'albums', 'osho' ),
            'description'         => __( 'Album news and reviews', 'osho' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title','editor','excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
           
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 25,
            'menu_icon'           => 'dashicons-playlist-audio',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        // Registering your Custom Post Type
        register_post_type( 'albums', $args );
      
    }
  
    add_action( 'init', 'album_custom_post_type', 0 );


    // remove span in cf7
    add_filter('wpcf7_form_elements', function($content) {
$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
return $content; });

