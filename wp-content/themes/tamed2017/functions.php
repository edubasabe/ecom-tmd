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
  wp_enqueue_style( 'wp-style', get_stylesheet_uri(), array(), '3.8', 'all' );
  wp_enqueue_style( 'frameworks', get_template_directory_uri() . '/assets/css/frameworks.min.css', array(), '1.0', 'all' );
  wp_enqueue_style( 'custom-gulp-style', get_template_directory_uri() . '/assets/css/styles.css', array('frameworks'), '3.3', 'all' );
  // wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');

  // JS
  wp_enqueue_script('vendors', get_template_directory_uri() . '/assets/js/vendor/vendors.js', array('jquery'), '1.1', true );
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery', 'vendors'), '2.3', true );
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


// Aditional Fields Woocommerce

function wooc_extra_register_fields()
{
?>

  <div class="form-group">
    <!-- <label for="account_first_name"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label> -->
    <input type="text" class="form-control input-text" name="account_first_name" id="reg_first_name" placeholder="<?php _e( 'First name', 'woocommerce' ); ?>"  value="<?php if ( ! empty( $_POST['account_first_name'] ) ) esc_attr_e( $_POST['account_first_name'] ); ?>" />
  </div>

  <div class="form-group">
    <!-- <label for="account_last_name"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span></label> -->
    <input type="text" class="form-control input-text" name="account_last_name" id="reg_last_name" placeholder="<?php _e( 'Last name', 'woocommerce' ); ?>" value="<?php if ( ! empty( $_POST['account_last_name'] ) ) esc_attr_e( $_POST['account_last_name'] ); ?>" />
  </div>

  <div class="clear"></div>
<?php
}

add_action('woocommerce_register_form_start', 'wooc_extra_register_fields');



// add_action('woocommerce_before_shop_loop', 'texto_prueba');
add_action('woocommerce_shop_loop', 'texto_3');
function texto_3() {
  echo "<h1> TEXTO 3</h1>";
}

function texto_prueba() {
  echo "<h1> TEXTO DE PRUEBA </h1>";
}

// add_action('woocommerce_before_shop_loop_item','prueba_2');
function prueba_2() {
  echo "PRUEBA 2";
}

//Acortar titulos de los productos woocommerce_page_title
add_filter( 'the_title', 'shorten_woo_product_title', 10, 2 );
function shorten_woo_product_title( $title, $id ) {
  if ( is_shop() && get_post_type( $id ) === 'product' ) {
    if ( strlen($title) > 15 ) {
      return substr( $title, 0, 15 ) . '...';
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
  $cols = 35;
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
add_action('woocommerce_before_single_product', 'wc_categorias_productos');
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
