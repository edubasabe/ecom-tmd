<?php
/*
* Template Name: Página de Universal Sensor
*/
 ?>

<?php get_header(); ?>

<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>

 <!-- Hero -->
 <section class="hero single-product__hero hero__ubs">
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
         <h2>Universal Sensor</h2>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-6">
         <div class="single-product__image">
           <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/products/universal-sensor/ubs-device.jpg" alt="Universal Sensor" class="img-responsive">
         </div>
       </div>

       <div class="col-sm-6">
         <div class="single-product__content">
           <h2>Universal Sensor</h2>
           <p>El Universal Binary Sensor, es un módulo inalámbrico que permite mejorar la funcionalidad de cualquier sensor con salida binaria. Se comunica de manera inalámbrica con la red Z-Wave y con el sistema FIBARO. Se trata de un módulo que por lo general se utiliza para integrarse a FIBARO con sistemas de alarma inalámbricos y por cable. Básicamente es un adaptador para la seguridad del hogar compatible con la tecnología inalámbrica Z-Wave.</p>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-6 col-md-offset-3">

         <div class="col-xs-6 col-sm-4">
           <a href="#" class="thumbnail">
             <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/icon/icon_wireless-1.svg" alt="">
             <p>Comunicación Inalámbrica</p>
           </a>
         </div>

         <div class="col-xs-6 col-sm-4">
           <a href="#" class="thumbnail">
             <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/icon/icon_temperature-2.svg" alt="">
             <p>Soporta hasta 4 sensores de temperatura</p>
           </a>
         </div>

         <div class="col-xs-6 col-sm-4">
           <a href="#" class="thumbnail">
             <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/icon/icon_sensors.svg" alt="">
             <p>Soporta hasta 2 sensores binarios</p>
           </a>
         </div>

       </div>
     </div>
   </div>
 </section>




    <!-- Contacto Form bottom right-->
    <div id="contacto-modal">
      <modal-contacto></modal-contacto>
    </div>

    <!-- Btn mobile contacto form -->
    <div class="inicio-tuhogar__icon-contact">
      <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/icon/icon-contact.svg" alt="Contacto">
    </div>



<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>

<?php get_footer(); ?>
