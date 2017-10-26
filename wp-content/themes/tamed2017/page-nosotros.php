<?php
/*
* Template Name: Página de Nosotros
*/
 ?>

<?php get_header(); ?>

<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>

 <section class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <h2 class="headline headline--nomargin text-center">Nuestra Misión</h2>
        <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</section>

<section class="page-section nosotros__quienes-somos">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-push-6 col-md-6">
        <div href="#" class="col-sm-6 col-sm-offset-3">
          <div class="nosotros__quienes-somos--image">
            <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nosotros/eduardo-nilo-ceo-tamed.png" alt="Eduardo Nilo" class="img-responsive">
          </div>
          <h3 class="text-center">Eduardo Nilo</h3>
          <p class="text-center">CEO TAMED - FIBARO Chile</p>
        </div>
      </div>

      <div class="col-sm-6 col-sm-pull-6 col-md-6">
        <h2>Quiénes Somos</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</section>

<section class="page-section nosotros__vision">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <h2 class="headline headline--nomargin text-center">Nuestra Visión</h2>
        <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="col-sm-4">
          <div class="nosotros__vision--logo-partners">
            <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/partners/partners-fibaro.jpg" srcset="<?php bloginfo(stylesheet_directory); ?>/assets/images/partners/partners-fibaro@2x.jpg 2x" alt="FIBARO" class="img-responsive">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="nosotros__vision--logo-partners">
            <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/partners/partners-zwave.jpg" srcset="<?php bloginfo(stylesheet_directory); ?>/assets/images/partners/partners-zwave@2x.jpg 2x" alt="Z-wave" class="img-responsive">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="nosotros__vision--logo-partners">
            <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/partners/partners-leed.jpg" srcset="<?php bloginfo(stylesheet_directory); ?>/assets/images/partners/partners-leed@2x.jpg 2x"alt="Leed" class="img-responsive">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
