<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>
<style media="screen">
	.wc-user-nav {
		float:none;
		display: inline-block;
	}
	.wc-user-nav li {
		padding-right: 1rem;
	}

	.wc-user-nav li:last-child {
		padding-right: 0;
	}

	.wc-user-nav .woocommerce-MyAccount-navigation-link--downloads {
		display: none;
	}


</style>
<nav class="nav navbar-default" style="overflow:auto;">
		<ul class="scrollmenu">
			<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
				<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
					<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
