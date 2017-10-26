<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container" style="margin-top:10rem;">
	<div class="row">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php woocommerce_content(); ?>

				</main><!-- #main -->
			</div><!-- #primary -->
	</div>
</div><!-- .container -->

<?php get_footer();
