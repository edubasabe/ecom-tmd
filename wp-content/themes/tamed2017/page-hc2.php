<?php
/*
* Template Name: Página de HC2
*/
 ?>

<?php get_header(); ?>

<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>


 <!-- Hero -->
 <section class="hero single-product__hero hero__hc2">
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
         <h2>Home Center 2</h2>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-6">
         <div class="single-product__image">
           <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/products/hc2/hc2-device.jpg" alt="Home Center 2" class="img-responsive">
         </div>
       </div>

       <div class="col-sm-6">
         <div class="single-product__content">
           <h2>Home Center 2</h2>
           <p>El Home Center 2 es un sistema de gestión de edificios al que se accede a través de una interfaz gráfica basada en un navegador o a través de una aplicación móvil. Gestiona los dispositivos Z-Wave de FIBARO y otros productos certificados con Z-Wave. Una extensa biblioteca de complementos para televisores inteligentes de terceros, cámaras, termostatos, paneles de alarma, reproductores de medios y sistemas de control, vienen ya preinstalados. Es un constructor de escenas visuales fácil de usar que ahorra tiempo, mientras que los usuarios más avanzados pueden usar secuencias de comandos LUA para una automatización completa. El software FIBARO garantiza la privacidad y la continuidad de la funcionalidad, incluso si falla la conexión a Internet. La función de ubicación geográfica se puede utilizar para crear disparadores GPS para todos los usuarios dentro del hogar o en cualquier parte del mundo.</p>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-10 col-sm-offset-1">

         <div class="col-xs-6 col-sm-2">
           <a href="#" class="thumbnail">
             <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/icon/icon_security.svg" alt="">
             <p>Seguridad</p>
           </a>
         </div>

         <div class="col-xs-6 col-sm-2">
           <a href="#" class="thumbnail">
             <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/icon/icon_scenes.svg" alt="">
             <p>Escenas</p>
           </a>
         </div>

         <div class="col-xs-6 col-sm-2">
           <a href="#" class="thumbnail">
             <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/icon/icon_camera.svg" alt="">
             <p>Cámaras</p>
           </a>
         </div>

         <div class="col-xs-6 col-sm-2">
           <a href="#" class="thumbnail">
             <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/icon/icon_temperature-2.svg" alt="">
             <p>Clima</p>
           </a>
         </div>

         <div class="col-xs-6 col-sm-2">
           <a href="#" class="thumbnail">
             <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/icon/icon_notifications-2.svg" alt="">
             <p>Notificaciones</p>
           </a>
         </div>

         <div class="col-xs-6 col-sm-2">
           <a href="#" class="thumbnail">
             <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/icon/icon_music.svg" alt="">
             <p>Multimedia</p>
           </a>
         </div>

       </div>
     </div>
   </div>
 </section>

<!-- Video Section -->
<?php include_once 'includes/videos-section.php'; ?>

 <!-- Video  -->
<?php include_once 'includes/video-modal.php'; ?>

<!-- Modal Contacto Form -->
<div id="contacto-modal">
  <?php include_once 'includes/modal-contacto.php'; ?>
</div>

<!-- Btn mobile contacto form -->
<div class="inicio-tuhogar__icon-contact">
  <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/icon/icon-contact.svg" alt="Contacto">
</div>



<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>

<?php get_footer(); ?>
