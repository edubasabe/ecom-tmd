<?php
/*
* Template Name: Página de Smoke Sensor
*/
 ?>

<?php get_header('producto-editable'); ?>

<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>

 <?php
 // Advanced Custom Fields
 //$product_acf_id = 30373; // Con el id busca el producto en la página de los plugins
 $description = get_field("product_description", $product_acf_id);
 $link_producto_ecommerce = get_field('link_producto_ecommerce', $product_acf_id);
 $youtube_video_link = get_field('youtube_video_link', $product_acf_id);
 $youtube_id = get_field('youtube_id', $product_acf_id);
 $bg_youtube_video = get_field('bg_youtube_video', $product_acf_id);
 $hero_image = get_field('hero_image_product', $product_acf_id);
 $manual = get_field('manual_del_producto', $product_acf_id);
 ?>

 <div class="single-product"><!-- Single Product -->


   <!-- Hero -->
   <?php if ( !empty($hero_image) ) { ?>
  <section class="hero single-product__hero hero__smoke" style="background:url(<?php $hero_image['url']; ?>) no-repeat;">
   <?php } else { ?>
   <section class="hero single-product__hero hero__smoke">
   <?php } ?>
   <div class="container">
    <div class="row">
      <div class="col-xs-12">
      </div>
    </div>
  </div>
  </section>

 <section class="page-section single-product single-product__section">
   <div class="container">
     <div class="row single-product__title--mobile">
       <div class="col-sm-12">
         <h2><?php echo the_title(); ?></h2>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-6">
         <div class="single-product__image">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/smoke-sensor/smoke-device.jpg" alt="<?php echo the_title(); ?>" class="img-responsive">
         </div>
       </div>

       <div class="col-sm-6">
         <div class="single-product__content">
           <h2><?php echo the_title(); ?></h2>
           <p><?php echo $description; ?></p>

           <?php if ( !empty($link_producto_ecommerce) ) { ?>
           <br>
           <p class="text-center" style="text-align:center!important;">
             <a href="https://tuhogarinteligente.cl/producto/<?php echo $link_producto_ecommerce; ?>" class="lead btn btn-lg btn-fibaro btn-tienda"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_cart_wtb.svg" alt="Shopping Cart" width="30" height="30">Ver en la Tienda</a>
           </p>
           <?php } ?>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-10 col-md-offset-1">

         <div class="col-xs-6 col-sm-2">
           <a href="#" class="thumbnail">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_smoke.svg" alt="Smoke">
             <p>Sensor de humo</p>
           </a>
         </div>

         <div class="col-xs-6 col-sm-2">
           <a href="#" class="thumbnail">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_temperature-2.svg" alt="">
             <p>Sensor de temperatura</p>
           </a>
         </div>

         <div class="col-xs-6 col-sm-2">
           <a href="#" class="thumbnail">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_light-indicator.svg" alt="">
             <p>Indicador de luz</p>
           </a>
         </div>

         <div class="col-xs-6 col-sm-2">
           <a href="#" class="thumbnail">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_sound.svg" alt="">
             <p>Alarma acústica</p>
           </a>
         </div>

         <div class="col-xs-6 col-sm-2">
           <a href="#" class="thumbnail">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_notifications-2.svg" alt="">
             <p>Notificaciones móviles</p>
           </a>
         </div>

         <div class="col-xs-6 col-sm-2">
           <a href="#" class="thumbnail">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_battery.svg" alt="">
             <p>La barería dura 2 años</p>
           </a>
         </div>

       </div>
     </div>
   </div>
 </section>


</div><!-- Fin de Single Product -->









<?php if ( !empty($youtube_id) ) { ?>

 <!-- Video Section -->
 <section class="single-product__video">
   <div class="container">
     <div class="row single-product__title--mobile">
       <h2>Ver video</h2>
     </div>
   </div>
   <div class="container-fluid">
     <?php if ( !empty($bg_youtube_video) ) { ?>
     <div class="row single-product__video__container single-product__video__container--dimmer" style="background-image: url(<?php echo $bg_youtube_video['url']; ?>);background-position:center -5rem;">
     <?php } else { ?>
       <div class="row single-product__video__container single-product__video__container--dimmer">
     <?php } ?>

       <div class="col-xs-12">
         <p class="text-center">
           <a href="#" class="button button-play" id="play-smoke-sensor"><span>Play</span></a>
         </p>
       </div>
     </div>
   </div>
 </section>

<!-- Modal Video -->
 <div id="video-modal" class="modal fade modal-video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                   <span class="cerrar">
                     <svg width="20" height="20">
                      <line x1="0" y1="0" x2="20" y2="20" style="stroke:rgb(255,255,255);stroke-width:2"></line>
                       <line x1="0" y1="20" x2="20" y2="0" style="stroke:rgb(255,255,255);stroke-width:2"></line>
                     </svg>
                   </span>
                 </button>
             </div>
             <div class="modal-body">
               <div class="embed-responsive embed-responsive-16by9">
               <iframe width="560" height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>" frameborder="0" allowfullscreen=""></iframe>
               </div>
             </div>
         </div>
     </div>
 </div>
<?php } ?>


<?php if ( !empty($manual)) { ?>

<section class="manuales">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 col-md-offset-2">
        <div class="col-xs-6">
          <p class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/manuals.svg"  width="80" alt=""></p>
          <p class="text-center"><a href="<?php echo $manual['url']; ?>" class="link link--arrow">Descargar Manual</a></p>
        </div>
        <div class="col-xs-6">
          <p class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/knowledge-base.svg" width="80" alt=""></p>
          <p class="text-center"><a href="http://e-learning.fibaro.com/" class="link link--arrow">Conocimientos Básicos</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>


<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>

<?php get_footer(); ?>
