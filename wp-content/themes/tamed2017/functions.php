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
  wp_enqueue_style( 'wp-style', get_stylesheet_uri(), array(), '3.9.2', 'all' );
  wp_enqueue_style( 'frameworks', get_template_directory_uri() . '/assets/css/frameworks.min.css', array(), '1.0', 'all' );
  wp_enqueue_style( 'custom-gulp-style', get_template_directory_uri() . '/assets/css/styles.css', array('frameworks'), '4.8.5', 'all' );
  // wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');

  // JS
  wp_enqueue_script('vendors', get_template_directory_uri() . '/assets/js/vendor/vendors.js', array('jquery'), '1.1', true );
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery', 'vendors'), '3.1.3', true );
  // wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu.js', array('jquery', 'main'), '1.7', true );
  // wp_enqueue_script('carruseles', get_template_directory_uri() . '/assets/js/carruseles.js', array('jquery', 'main'), false, true );
}
add_action('wp_enqueue_scripts','add_theme_scripts');


function typed_compatibilidad() {
  $page_selected = 'compatibilidad';
  if ( is_page($page_selected) ) {
    wp_enqueue_script('typed', get_template_directory_uri() . '/assets/js/vendor/typed.min.js', array('jquery'), '1.1', true );
    wp_enqueue_script('typed-code', get_template_directory_uri() . '/assets/js/typed-code.js', array('jquery'), '1.7', true );
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





//----- Integrando woocommerce -------------------------------------------------
// remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
// remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
//
// add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
// add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

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


/**
 * To add WooCommerce registration form custom fields.
 */

function text_domain_woo_reg_form_fields() {
    ?>
    <div class="form-group">
        <!-- <label for="billing_first_name"><?php _e('First name', 'woocommerce'); ?><span class="required">*</span></label> -->
        <input type="text" class="form-control input-text" name="billing_first_name" placeholder="<?php _e('First name', 'woocommerce'); ?>" id="billing_first_name" value="<?php if (!empty($_POST['billing_first_name'])) esc_attr_e($_POST['billing_first_name']); ?>" />
    </div>
    <div class="form-group">
        <!-- <label for="billing_last_name"><?php _e('Last name', 'woocommerce'); ?><span class="required">*</span></label> -->
        <input type="text" class="form-control input-text" name="billing_last_name" placeholder="<?php _e('Last name', 'woocommerce'); ?>" id="billing_last_name" value="<?php if (!empty($_POST['billing_last_name'])) esc_attr_e($_POST['billing_last_name']); ?>" />
    </div>
    <div class="clear"></div>
    <?php
}

add_action('woocommerce_register_form_start', 'text_domain_woo_reg_form_fields');

/**
 * To save WooCommerce registration form custom fields.
 */
function text_domain_woo_save_reg_form_fields($customer_id) {
    //First name field
    if (isset($_POST['billing_first_name'])) {
        update_user_meta($customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']));
        update_user_meta($customer_id, 'billing_first_name', sanitize_text_field($_POST['billing_first_name']));
    }
    //Last name field
    if (isset($_POST['billing_last_name'])) {
        update_user_meta($customer_id, 'last_name', sanitize_text_field($_POST['billing_last_name']));
        update_user_meta($customer_id, 'billing_last_name', sanitize_text_field($_POST['billing_last_name']));
    }
}

add_action('woocommerce_created_customer', 'text_domain_woo_save_reg_form_fields');

//Acortar titulos de los productos woocommerce_page_title
add_filter( 'the_title', 'shorten_woo_product_title', 10, 2 );
function shorten_woo_product_title( $title, $id ) {
  if ( is_shop() && get_post_type( $id ) === 'product' ) {
    if ( strlen($title) > 22 ) {
      return substr( $title, 0, 22 ) . '...';
    } else {
      return $title;
    }

  } else {
    return $title;
  }
}

// add to cart link  esconder en el loop
add_filter('woocommerce_loop_add_to_cart_link', false);
// Remove the product rating display on product loops
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );



// Productos por página
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 40;
  return $cols;
}

// Breadcrumb Function
function the_breadcrumb() {
  echo '<ol class="breadcrumb">';
  echo "<li>";
	if (!is_home()) {
		    echo '<a href="';
		      echo get_option('home');
        echo '">';
	      bloginfo('name');
		echo "</a>  ";
    echo "</li>";

		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo "  ";
				the_title();
			}
		} elseif (is_page()) {
      echo "<li>";
      echo "<a href='" . get_page_link() . "'> ";
			echo the_title();
      echo "</a>  ";
      echo "</li>";
      echo "</ol>";
		}
	}
}

// Menu de categorias en el single product
//add_action('woocommerce_before_single_product', 'wc_categorias_productos');
function wc_categorias_productos() {
  $taxonomy     = 'product_cat';
  $orderby      = 'name';
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no
  $title        = '';
  $empty        = 0;

  $args = array(
  			 'taxonomy'     => $taxonomy,
  			 'orderby'      => $orderby,
  			 'show_count'   => $show_count,
  			 'pad_counts'   => $pad_counts,
  			 'hierarchical' => $hierarchical,
  			 'title_li'     => $title,
  			 'hide_empty'   => $empty
  );
  $all_categories = get_categories( $args );
  echo '<ul class="scrollmenu">';
  foreach ($all_categories as $cat) {
  	if($cat->category_parent == 0) {
  			$category_id = $cat->term_id;

  			echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></li>';

  			$args2 = array(
  							'taxonomy'     => $taxonomy,
  							'child_of'     => 0,
  							'parent'       => $category_id,
  							'orderby'      => $orderby,
  							'show_count'   => $show_count,
  							'pad_counts'   => $pad_counts,
  							'hierarchical' => $hierarchical,
  							'title_li'     => $title,
  							'hide_empty'   => $empty
  			);
  			$sub_cats = get_categories( $args2 );
  			if($sub_cats) {
  					foreach($sub_cats as $sub_category) {
  							echo  $sub_category->name ;
  					}
  			}
  	}
  }
  echo "</ul>";
}



//Agregar Buscador y cuenta antes del single product
// add_action('woocommerce_before_single_product', 'buscador_cuenta');
// add_action('woocommerce_before_main_content', 'buscador_cuenta');
function buscador_cuenta() {
  //return get_product_search_form();
  // echo "Hola";
  echo '<!-- Form de busqueda -->
  <div class="row sub-nav-mobile">
    <div class="col-xs-12">
      <div class="col-xs-10">'
        . get_product_search_form() .
      '</div>
      <div class="col-xs-2 text-center" style="">
        <a href="' . get_page_link(12) . '" class="btn-login azul"><img src="'. get_template_directory_uri() . '/assets/images/icon/icon-user-login.svg" alt="User" height="20" width="20" /></a>
      </div>
    </div>
  </div>';
}


// Añadiendo BS Classes a los resultados
add_action('woocommerce_before_main_content','archive_bs_header');
function archive_bs_header() {
  echo '<div class="container">
        <div class="row">
        <div class="col-xs-12">';
}

add_action('woocommerce_after_main_content','archive_bs_footer');
function archive_bs_footer() {
  echo "</div><!-- col --></div><!-- row --></div><!-- container -->";
}

// Detectar Browser
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $agent = $_SERVER['HTTP_USER_AGENT'];
}

// Detectar si el browser es Firefox
function isFirefox() {
  if (strlen(strstr($agent, 'Firefox')) > 0) {
      $browser = 'firefox';
  }
  return $browser;
}

//Eliminando titulos del loop de la tienda
remove_action('woocommerce_before_shop_loop','woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering', 30);


// Mover oferta despues de la imagen en el loop
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash', 10);
add_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash', 15);

//Mover oferta antes del titulo en el single product
remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_sale_flash', 10);
// add_action('woocommerce_before_single_product','woocommerce_show_product_sale_flash', 15);
add_action('woocommerce_before_single_product_summary','woocommerce_show_product_sale_flash', 15);




// Insertando buscador y icono de usuario antes del loop
add_action('woocommerce_before_shop_loop', 'adding_buscador');




function adding_buscador() {
  if ( !wp_is_mobile() ) {
     echo '
    <!-- Form de busqueda -->
    <div class="container">
    <div class="row sub-nav-mobile">
      <div class="col-xs-12">
        <div class="col-xs-10">';

        get_product_search_form();

    echo'</div>
        <div class="col-xs-2 text-center">
          <a href="' . get_page_link(12) .'" class="btn-login azul"><img src="' . get_template_directory_uri() . '/assets/images/icon/icon-user-login.svg" alt="User" height="20" width="20" /></a>
        </div>
      </div>
    </div>
    </div>';
  }
}

//

add_action('woocommerce_before_shop_loop_item_title', 'taggear_producto');
function taggear_producto(){
  if ( has_term('homekit', 'product_tag') ) {
    echo "<p><span class='btn btn-xs btn-outline-rojo'>Homekit</span></p>";
  }
}


// Usuarios loggeados para poder ver los productos
function woocommerce_user_logged()
{


    if ( !is_user_logged_in() && is_woocommerce() || is_product() || is_shop() )
    {

          wp_redirect( site_url('mi-cuenta/'));
          exit;
    }
}
add_action('init', 'woocommerce_user_logged');


function add_sidebar_wc() {
  return get_sidebar('ecommerce');
}
add_action('woocommerce_before_single_product', 'add_sidebar_wc');
