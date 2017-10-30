<?php
/*
* Template Name: Página de Inicio
*/
 ?>

<?php get_header(); ?>

<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>


 <!-- Inicio Video -->
 <section class="inicio-tuhogar--homevideo" id="homevideo">
   <video autoplay loop muted class="inicio-tuhogar--homevideo__video img-responsive">
     <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/header-web-optimized.mp4" type="video/mp4">
       <!-- <source src="videos/FIBARO_Lili_No_HUD.mov" type="video/x-m4v"> -->
       <p>Tu navegador no implementa el elemento <code>video</code>.</p>
     </video>
     <div class="inicio-tuhogar--homevideo__title">
       <h2 class="text-center text-color-white">Tu Hogar Inteligente</h2>
       <p class="lead text-center text-color-white">Automatizamos tu casa con el sistema domótico líder en el mundo: FIBARO.</p>
       <br>
       <p class="text-center"><a href="#" class="button button-play" id="play-promo-video"><span>Play</span></a></p>
     </div>
 </section>

 <!-- Explora el sistema -->
 <!-- <section class="page-section section-explora-sistema" id="explora-sistema">
   <div class="container">
     <div class="row">
       <div class="col-xs-12">
         <h2 class="headline headline--nomargin inicio-tuhogar__smarthome--title">¿POR QUÉ FIBARO?</h2>
         <p class="lead text-center"><a href="<?php echo get_page_link(30493); ?>" class="link link--arrow">Explora el sistema</a></p>
       </div>
     </div>
   </div>
 </section> -->


 <!-- Porque FIBARO -->
 <section class="page-section inicio-tuhogar--por-que-fibaro" id="porque-fibaro">
   <div class="container">
     <div class="row">
       <div class="col-sm-12">
         <h2 class="headline text-center inicio-tuhogar--por-que-fibaro__title">¿Por qué con FIBARO?</h2>
         <!-- <p class="lead headline--subheadline inicio-tuhogar--por-que-fibaro__subtitle">Un departamento moderno une el diseño vanguardista con funcionalidad. Las soluciones innovadoras del sistema FIBARO permiten utilizar en su totalidad el potencial que ofrece el hogar inteligente, garantizando de esta forma el confort, seguridad y eficiencia energética.</p> -->
       </div>
     </div>
     <div class="row">
       <div class="col-xs-12">

         <div class="owl-carousel owl-theme" id="owl-why-fibaro">

           <!-- Seguridad -->
           <div class="item">
             <div class="text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_security.svg" class="img-responsive center-block">
               <h3>Seguridad</h3>
             </div>
           </div>

           <!-- Eficiencia energética -->
           <div class="item">
             <div class="text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_lightning-1.svg" class="img-responsive center-block">
               <h3>Eficiencia energética</h3>
             </div>
           </div>

           <!-- Confort -->
           <div class="item">
             <div class="text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_singleswitch.svg" class="img-responsive center-block">
               <h3>Confort</h3>
             </div>
           </div>

           <!-- Ecosistema -->
           <div class="item">
             <div class="text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_sensors.svg" class="img-responsive center-block">
               <h3>Ecosistema</h3>
             </div>
           </div>

           <!-- Diseño -->
           <div class="item">
             <div class="text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_motion.svg" class="img-responsive center-block">
               <h3>Diseño</h3>
             </div>
           </div>

           <!-- Inalámbrico -->
           <div class="item">
             <div class="text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_wireless-1.svg" class="img-responsive center-block">
               <h3>Inalámbrico</h3>
             </div>
           </div>

           <!-- Modular -->
           <div class="item">
             <div class="text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-modularity.svg" class="img-responsive center-block">
               <h3>Modular</h3>
             </div>
           </div>

           <!-- Ecoeficiente -->
           <div class="item">
             <div class="text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-ecosystem.svg" class="img-responsive center-block">
               <h3>Ecoeficiente</h3>
             </div>
           </div>

         </div>

       </div>
     </div>
     <div class="row">
       <div class="col-xs-12">
         <br>
         <!-- <h2 class="headline headline--nomargin inicio-tuhogar__smarthome--title">¿POR QUÉ FIBARO?</h2> -->
         <p class="lead text-center"><a href="<?php echo get_page_link(30493); ?>" class="link link--arrow">Explora el sistema</a></p>
       </div>
     </div>
     <!-- <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-4">
           <div class="thumbnail text-center">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_security.svg" alt="">
             <h3>Seguridad</h3>
             <p class="lead">El sistema FIBARO permite que controles y vigiles tu hogar desde cualquier parte del mundo. Protege tu casa y familia en todo instante.</p>
           </div>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-4">
           <div class="thumbnail text-center">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_lightning-1.svg" alt="Videos">
             <h3>Eficiencia energética</h3>
                 <p class="lead">Con nuestro sistema vas a lograr un importante ahorro en las cuentas de cada mes. Aporta sustentabilidad a tu vida.</p>
           </div>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-4">
           <div class="thumbnail text-center">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_singleswitch.svg" alt="Manuales">
             <h3>Confort</h3>
             <p class="lead">Podrás disfrutar de la satisfacción que te sólo te entrega un Hogar Inteligente. Gana tiempo y úsalo para compartir en familia.</p>
           </div>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-4">
           <div class="thumbnail text-center">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_sensors.svg" alt="Manuales">
             <h3>Ecosistema</h3>
             <p class="lead">Integrarás dispositivos de otras marcas fácilmente, gracias al protocolo de comunicación Z-Wave.</p>
           </div>
         </div>

       <div class="col-xs-6 col-sm-6 col-md-4">
         <div class="thumbnail text-center">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_motion.svg" alt="Manuales">
           <h3>Diseño</h3>
           <p class="lead">Basado en la naturaleza. Una mezcla perfecta entre elegancia y exclusividad.</p>
         </div>
       </div>

       <div class="col-xs-6 col-sm-6 col-md-4">
         <div class="thumbnail text-center">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_wireless-1.svg" alt="Manuales">
           <h3>Inalámbrico</h3>
           <p class="lead">Ya no debes romper tus paredes para tener un sistema inteligente.</p>
         </div>
       </div> -->
     </div>

     <!-- <div class="row">
       <div class="col-sm-12">
         <p class="text-center">
           <a href="#" class="lead link link--arrow">Visita nuestra tienda en línea</a>
         </p>
       </div>
     </div> -->
   </div>
 </section>



 <!-- Hogar Section -->
 <section class="page-section inicio-tuhogar__smarthome" id="smarthome">
 <!-- <div class="blacking-bg"></div> -->
 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hand-right.png" alt="fibaro-smartphone" class="fibaro-hand">
 <div class="container">
   <div class="row">
     <div class="col-sm-12">
       <h2 class="headline headline--nomargin inicio-tuhogar__smarthome--title">Comienza tu experiencia Smart aquí</h2>
       <p class="lead inicio-tuhogar__smarthome--subtitle">Tu punto de partida.</p>
     </div>
   </div>
   <div class="row">
     <div class="col-md-8 col-md-offset-2">
       <div class="col-xs-6">
         <div class="icon">
           <p class="text-center">
             <a href="#" class="button-bag"><span>Tienda</span></a>
           </p>
           <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/shopping-bag-white.svg" alt="Support" class="img-responsive center-block" style="transform:scale(1.2);"> -->
         </div>
         <br>
         <p class="btn-container text-center center-block">
           <a href="https://tuhogarinteligente.cl/comprar" class="btn btn-fibaro">Tienda en línea</a></p>
       </div>
       <div class="col-xs-6">
         <div class="icon" style="min-height: 8rem; padding: 2.95rem;">

           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/support-icon.png" width="50" alt="Support" class="img-responsive center-block">
         </div>
         <p class="btn-container text-center center-block">
           <a href="tel:+56228486547" class="btn btn-fibaro" id="consulta-experto">Consulta un experto</a>
           <!-- <a href="https://soporte.tuhogarinteligente.cl/" class="btn btn-block btn-lg btn-fibaro">Nuestros Servicios</a> -->
         </p>
       </div>
     </div>
   </div>
 </div>
 </section>



<!-- Aquí estaba la seccion experience center -->

 <section class="inicio-tuhogar__experience-center" id="experience-center">
   <div class="container">
     <div class="row">
        <div class="col-xs-12 page-section--small">
          <div class="text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/frase.svg" style="max-height:2rem;"  height="20" alt="Ven a conocer nuestro" class="img-responsive center-block" />
            <h2 class="headline headline--nomargin inicio-tuhogar__experience-center__title">Experience Center</h2>
          </div>
          <p class="inicio-tuhogar__experience-center__horario text-center">Lunes a Viernes: 9:00 – 19:00 hrs. | Sábado: 10:00 – 19:00 hrs.</p>
        </div>
     </div>
   </div>

   <div class="container-fluid">
     <div class="row">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background/experience-center.jpg" alt="Experience Center" class="img-responsive ">
     </div>
   </div>

   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h3 class="text-center lead">Visítanos en Av. Las Condes 9765. <br> Las Condes, Santiago, Chile.</h3>
       </div>
     </div>
     <div class="row">
       <p class="text-center">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_lcd.png" alt="Las Condes Design" width="150" class="img-responsive center-block">
       </p>
     </div>
   </div>
 </section>



 <section class="visitanos">
   <div class="container">
     <div class="row">
       <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
         <table class="table" border="0" align="center" style="margin-bottom:0;">
           <tr>
             <td valign="middle" style="vertical-align:middle; border-top: 0;"><p class="lead link--arrow-black text-center" style="margin:0;">Llévame aquí</p></td>
             <td style="border-top: 0;">
               <a href="https://www.waze.com/es-419/livemap?zoom=17&lat=-33.38677&lon=-70.53826" class="" id="waze-link" target="_blank">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_waze.png" alt="Ir con Google Maps"  width="60" class="img-responsive center-block" style="padding-top:1rem;">
               </a>
             </td>
             <td style="border-top: 0;">
               <a href="https://www.google.cl/maps/place/Fibaro+Experience+Center/@-33.3869005,-70.5405292,17z/data=!3m1!4b1!4m5!3m4!1s0x9662cead7de2de31:0x2795ef3a9c5fe7d9!8m2!3d-33.3869005!4d-70.5383405" class="" id="maps-link" target="_blank">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_maps.png" alt="Ir con Waze" width="60" class="img-responsive center-block">
               </a>
             </td>
           </tr>
         </table>
       </div>
     </div>
   </div>
 </section>
 <hr class="divider">

 <!-- Proyectos Inmobiliarios -->
 <section class="inicio-tuhogar--proyectos" id="proyectos">
   <div class="container">
     <div class="row">
       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
         <h2 class="headline headline--nomargin text-center">Descubre los proyectos que ya son inteligentes en Chile</h2>
         <p class="lead headline--subheadline">Proyectos Inmobiliarios <i>Smart</i></p>
       </div>
     </div>
     <div class="row">
       <div class="col-xs-12 col-sm-6 col-sm-offset-3">
         <div class="row">
           <div class="col-xs-10 col-xs-offset-1">
             <p class="text-center"><a href="http://proyectos.tuhogarinteligente.cl/proyectos" class="btn btn-block btn-lg btn-fibaro">Ver Proyectos</a></p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

 <hr class="divider">




 <!-- Desarrollo de proyectos -->
 <!--section class="page-section inicio-tuhogar--desarrollo-de-proyectos" id="desarrollo-proyectos">
 <div class="container">
   <div class="row">
     <div class="col-sm-12">
       <h2 class="headline headline--nomargin text-center">Desarrolla tu proyecto</h2>
       <br><br>
     </div>
   </div>
   <div class="row">
       <div class="col-xs-6 col-sm-4 col-md-2">
         <a href="http://tuhogarinteligente.cl/comprar" class="thumbnail">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-client.svg" alt="Inmobiliaria" class="img-responsive">
           <p class="lead text-center">Clientes Particulares</p>
         </a>
       </div>

       <div class="col-xs-6 col-sm-4 col-md-2">
         <a href="http://proyectos.tuhogarinteligente.cl/" class="thumbnail">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-inmobiliaria.svg" alt="Inmobiliaria" class="img-responsive">
           <p class="lead text-center">Inmobiliarias y Constructoras</p>
         </a>
       </div>

       <div class="col-xs-6 col-sm-4 col-md-2">
         <a href="#" class="thumbnail" id="telcos">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-telco.svg" alt="Telco" class="img-responsive">
           <p class="lead text-center">Telcos</p>
         </a>
       </div>

     <div class="col-xs-6 col-sm-4 col-md-2">
       <a href="#" class="thumbnail" id="retail">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-retail.svg" alt="Retail" class="img-responsive">
         <p class="lead text-center">Retail</p>
       </a>
     </div>

     <div class="col-xs-6 col-sm-4 col-md-2">
       <a href="http://expertos.tuhogarinteligente.cl/" class="thumbnail">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-artist.svg" alt="Inmobiliaria" class="img-responsive">
         <p class="lead text-center">Arquitectos y Diseñadores</p>
       </a>
     </div>

     <div class="col-xs-6 col-sm-4 col-md-2">
       <a href="http://expertos.tuhogarinteligente.cl/" class="thumbnail">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-dist.svg" alt="Distribuidores" class="img-responsive">
         <p class="lead text-center">Distribuidores</p>
       </a>
     </div>
   </div>
 </div>
 </section -->

 <hr class="divider">


 <!-- Compatibilidad -->
 <section class="page-section inicio-tuhogar__nuestras-alianzas" id="nuestras-alianzas">
   <div class="container">
     <div class="row">
       <div class="col-sm-12">
         <h2 class="headline headline--nomargin text-center">Compatibilidad</h2>
         <p class="lead headline--subheadline">Importantes marcas se pueden conectar al sistema FIBARO</p>
       </div>
     </div>
     <div class="row">
       <div class="col-xs-12 col-sm-10 col-sm-offset-1">
         <!--div class="owl-carousel owl-theme" id="owl-alianzas">
           <div class="item" v-for="data in item">
             <a href="#">
                 <img v-bind:src="data.src" v-bind:srcset="data.srcset" class="img-responsive inicio-tuhogar__nuestras-alianzas__image center-block">
             </a>
           </div>
         </div-->

         <div class="col-xs-6 col-sm-3">
           <p class="text-center brand-item">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/philips-hue.jpg" alt="Philips Hue" class="img-responsive center-block">
           </p>
         </div>
         <div class="col-xs-6 col-sm-3">
           <p class="text-center brand-item">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/irobot.jpg" alt="iRobot" class="img-responsive center-block">
           </p>
         </div>

         <div class="col-xs-6 col-sm-3">
           <p class="text-center brand-item">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/sonos.jpg" alt="Sonos" class="img-responsive center-block">
           </p>
         </div>

         <div class="col-xs-6 col-sm-3">
           <p class="text-center brand-item">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/dlink.jpg" alt="Dlink" class="img-responsive center-block">
           </p>
         </div>
       </div>
     </div>
     <div class="row">
       <p class="text-center"><a href="<?php echo get_page_link(30491); ?>" class="link link--arrow">Más acerca de compatibilidad</a></p>
     </div>
   </div>
 </section>





    <!-- Contacto Form bottom right-->
    <!-- div id="contacto-modal">
      <div class="floating inicio-tuhogar__contact-form hidden">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/tamed-logo-2017.svg" height="20" alt="TAMED">
        <span class="close">
        <svg width="10" height="10">
          <line x1="0" y1="0" x2="10" y2="10" style="stroke:rgb(0,0,0);stroke-width:2"></line>
          <line x1="0" y1="10" x2="10" y2="0" style="stroke:rgb(0,0,0);stroke-width:2"></line>
        </svg>
        </span>
        <h4 class="lead text-center">Contáctanos</h4>
        <form class="form form-subscribe" action="https://s242003202.t.eloqua.com/e/f2" method="post" id="floating-subscribe">
          <input type="hidden" name="elqFormName" value="Gracias_Contacto">
          <input type="hidden" name="elqSiteID" value="242003202">
          <input type="hidden" name="elqCustomerGUID" value="">
          <input type="hidden" name="elqCookieWrite" value="0">
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="firstName" placeholder="Nombre">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="emailAddress" placeholder="E-mail">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="mensaje" name="message" placeholder="Mensaje"></textarea>
          </div>
          <input type="submit" class="btn btn-default btn-subscribe" value="Enviar" id="btn-subscripcion" onclick="setCookie()">
        </form>
      </div>
    </div-->
    <!-- Contacto form bottom right  -->

<!-- telcos - distribuidores - retail  -->
<?php include_once 'includes/modal-form-contact-business.php'; ?>

<!-- Modal video  -->
<?php include_once 'includes/video-modal.php'; ?>


<!-- Cookies  -->
<?php include_once 'includes/cookies.php'; ?>

<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>

<?php get_footer(); ?>
