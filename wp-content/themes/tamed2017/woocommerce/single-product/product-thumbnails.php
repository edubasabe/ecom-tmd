<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product;

//Getting Field
$featured_video = get_field('featured_video', get_the_ID());

// Thumbnail Youtube API
$featured_video_thumbnail = 'https://img.youtube.com/vi/' . $featured_video . '/default.jpg';

$attachment_ids = $product->get_gallery_image_ids();

if ( $attachment_ids && has_post_thumbnail() ) {
	foreach ( $attachment_ids as $attachment_id ) {
		$full_size_image = wp_get_attachment_image_src( $attachment_id, 'full' );
		$thumbnail       = wp_get_attachment_image_src( $attachment_id, 'shop_thumbnail' );
		$attributes      = array(
			'title'                   => get_post_field( 'post_title', $attachment_id ),
			'data-caption'            => get_post_field( 'post_excerpt', $attachment_id ),
			'data-src'                => $full_size_image[0],
			'data-large_image'        => $full_size_image[0],
			'data-large_image_width'  => $full_size_image[1],
			'data-large_image_height' => $full_size_image[2],
		);

		$html  = '<div data-thumb="' . esc_url( $thumbnail[0] ) . '" class="woocommerce-product-gallery__image"><a href="' . esc_url( $full_size_image[0] ) . '">';
		$html .= wp_get_attachment_image( $attachment_id, 'shop_single', false, $attributes );
 		$html .= '</a></div>';

		// if ($featured_video) {
		// 	$html .= '<div data-thumb="' . esc_url( $featured_video_thumbnail ) . '" class="woocommerce-product-gallery__image">';
		// 	$html .= '<img src="' . $featured_video_thumbnail .'"/>'
		// 	$html .= '</div>';
		// }




		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $attachment_id );
	}
}


// Función para agregar videos a los thumbnails de los Productos
/*
if ( !function_exists('woocommerce_get_product_video') ) {
  // add_filter('woocommerce_single_product_image_thumbnail_html', 'woocommerce_get_product_video');

  function woocommerce_get_product_video($html) {
    $featured_video = get_field('featured_video', get_the_ID());

    if ( !empty(trim($featured_video)) ) {
      return '<iframe width="640" height="250" src="https://www.youtube.com/embed/' . $featured_video . '" frameborder="0" allowfullscreen></iframe>';
    } else {
      return $html;
    }
  }
}
*/
