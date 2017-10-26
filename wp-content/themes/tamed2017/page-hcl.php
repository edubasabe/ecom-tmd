<?php
/*
* Template Name: Página de HCL
*/
 ?>

<?php get_header(); ?>

<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>


<!-- Hero -->
<section class="hero single-product__hero hero__hcl">
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
        <h2>Home Center Lite</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="single-product__image">
          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/products/hcl/hcl-device.jpg" alt="Home Center Lite" class="img-responsive">
        </div>
      </div>

      <div class="col-sm-6">
        <div class="single-product__content">
          <h2>Home Center Lite</h2>
          <p>Home Center Lite es un cerebro increíblemente compacto de nuestro sistema FIBARO. Al diseñar HCL, nos enfocamos en las soluciones ya probadas que nos entrega el Home Center 2. Diseñado para cumplir con las necesidades que tienes en mente, HCL se integra con una gran cantidad de sistemas multimedia y electrónicos de tu hogar. Con un diseño compacto para tu comidad, HCL permite administrar el hogar inteligente a través de una interfaz, de fácil uso, a través de una comunicación inalámbrica.</p>
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
