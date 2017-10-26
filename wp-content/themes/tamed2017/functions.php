<?php

// Agregar thumbnail a los posts
add_theme_support( 'post-thumbnails' );

// Agregar mcrypt_enc_get_supported_key_sizes
function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __('Menú Superior'),
      'bottom-menu' => __('Menú Footer')
      )
  );

  // Registrando el Sidebar
  register_sidebar(
      array(
        'name' => 'Sidebar Principal',
        'id' => 'sidebar-1',
        'description' => 'Sidebar para elementos del ecommerce'
      )
    );
}
add_action('init', 'register_my_menus');

//Registando el Sidebar
// if ( function_exists('register_sidebar') ) {
//   register_sidebar(
//     array(
//       'before_widget' => '<li id="%1$s" class="widget %2$s">',
//       'after_widget' => '</li>', 'before_title' => '<h2 class="widgettitle">',
//       'after_title' => '</h2>', ));
//     }

if ( function_exists('register_sidebar') ) {
   register_sidebar(
     array(
       'name' => 'Ecommerce Sidebar',
       'id' => 'ecommerce-sidebar',
       'description' => 'Appears as the sidebar on the ecommerce page',
       'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>',
       'before_title' => '<h2 class="widgettitle">',
       'after_title' => '</h2>',
     )
   ); }

if ( function_exists('register_sidebar') ) {
   register_sidebar(
     array(
       'name' => 'Buscador Sidebar',
       'id' => 'buscador-sidebar',
       'description' => 'Appears as the sidebar on the ecommerce page como buscador',
       'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>',
       'before_title' => '<h2 class="widgettitle">',
       'after_title' => '</h2>',
     )
   ); }


// Registrando CSS y JS
function add_theme_scripts() {
  // CSS
  wp_enqueue_style( 'wp-style', get_stylesheet_uri(), array(), '3.7', 'all' );
  wp_enqueue_style( 'frameworks', get_template_directory_uri() . '/assets/css/frameworks.min.css', array(), '1.0', 'all' );
  wp_enqueue_style( 'custom-gulp-style', get_template_directory_uri() . '/assets/css/styles.css', array('frameworks'), '2.3', 'all' );
  // wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');

  // JS
  wp_enqueue_script('vendors', get_template_directory_uri() . '/assets/js/vendor/vendors.js', array('jquery'), '1.1', true );
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery', 'vendors'), '2.2', true );
  // wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu.js', array('jquery', 'main'), '1.7', true );
  // wp_enqueue_script('carruseles', get_template_directory_uri() . '/assets/js/carruseles.js', array('jquery', 'main'), false, true );
}
add_action('wp_enqueue_scripts','add_theme_scripts');


function typed_compatibilidad() {
  $page_selected = 'compatibilidad';
  if ( is_page($page_selected) ) {
    wp_enqueue_script('typed', get_template_directory_uri() . '/assets/js/vendor/typed.min.js', array('jquery'), '1.1', true );
    wp_enqueue_script('typed-code', get_template_directory_uri() . '/assets/js/typed-code.js', array('jquery'), '1.3', true );
  }
} add_action('wp_enqueue_scripts', 'typed_compatibilidad');



// Username
// Add Shortcode
function show_username() {
  global $current_user, $user_login;
      get_currentuserinfo();


      if ($user_login) {
        return 'Welcome ' . $current_user->display_name . '!';
      }

      else {
        return '<a href="' . wp_login_url() . ' ">Login</a>';
      }
}
add_shortcode( 'username', 'show_username' );





// Integrando woocommerce
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

// Declaracion de compatibilidad del tema con woocommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


// Funciones del ecommerce

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );


// Aditional Fields Woocommerce

function wooc_extra_register_fields()
{
?>

  <div class="form-group">
    <label for="account_first_name"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label>
    <input type="text" class="form-control input-text" name="account_first_name" id="reg_first_name" value="<?php if ( ! empty( $_POST['account_first_name'] ) ) esc_attr_e( $_POST['account_first_name'] ); ?>" />
  </div>

  <div class="form-group">
    <label for="account_last_name"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span></label>
    <input type="text" class="form-control input-text" name="account_last_name" id="reg_last_name" value="<?php if ( ! empty( $_POST['account_last_name'] ) ) esc_attr_e( $_POST['account_last_name'] ); ?>" />
  </div>

  <div class="clear"></div>
<?php
}

add_action('woocommerce_register_form_start', 'wooc_extra_register_fields');


function email_confirmation_code() {
  $headers = 'From: admin <noreply@admin>';
  $to = $_POST['email'];
  $subject = 'Confirmación de la cuenta';
  // The unique token can be inserted in the message with %s
  $message = 'Gracias. Por favor confirma este correo haciendo clic <a href="' . home_url('') . 'token=%s">aquí</a> para activar tu cuenta. Si no puedes acceder al link copia y pega este código en tu navegador %s';

  if ($isAllValid) {
  	EmailConfirmation::send($to, $subject, $message, $headers);
  }
}
add_action('woocommerce_register_form_start', 'email_confirmation_code');

//add_action( 'woocommerce_review_comment_text', 'woocommerce_review_display_comment_text', 10 );

// add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
// function woo_remove_product_tabs( $tabs ) {
//     unset( $tabs['reviews'] );  // Removes the reviews tab
//     unset( $tabs['additional_information'] );  // Removes the additional information tab
//     return $tabs;
// }
// add_action( 'woocommerce_after_single_product_summary', 'comments_template', 50 );
