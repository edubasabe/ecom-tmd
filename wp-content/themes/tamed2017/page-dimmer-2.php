<?php
/*
* Template Name: Página de Dimmer 2
*/
 ?>

<?php get_header('producto-editable'); ?>

<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>

 <?php
 while ( have_posts() ) : the_post();

   get_template_part( 'template-parts/page/content-dimmer-2', 'page' );

   // If comments are open or we have at least one comment, load up the comment template.
   if ( comments_open() || get_comments_number() ) :
     comments_template();
   endif;

 endwhile; // End of the loop.
 ?>

<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>

<?php get_footer(); ?>
