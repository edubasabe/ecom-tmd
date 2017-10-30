<?php
/*
* Template Name: Página de Compatibilidad
*/
 ?>

<?php get_header(); ?>

<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>

 <!-- Hero -->
 <section class="page-section compatibilidad__hero">
   <div class="container">
     <!-- mobile -->
     <div class="row hidden-sm hidden-md hidden-lg">
       <h2 class="headline headline--nomargin text-center">conecta tu</h2>
       <div class="owl-carousel owl-theme" id="owl-compatibilidad">
         <div class="item">
           <a href="#">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-multimedia.svg"  class="img-responsive compatibilidad__hero__image center-block">
               <p class="compatibilidad__hero__text">Multimedia</p>
           </a>
         </div>
         <div class="item">
           <a href="#">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-security.svg"  class="img-responsive compatibilidad__hero__image center-block">
               <p class="compatibilidad__hero__text">Seguridad</p>
           </a>
         </div>
         <div class="item">
           <a href="#">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-temperature.svg"  class="img-responsive compatibilidad__hero__image center-block">
               <p class="compatibilidad__hero__text">Temperatura</p>
           </a>
         </div>
         <div class="item">
           <a href="#">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-lights.svg"  class="img-responsive compatibilidad__hero__image center-block">
               <p class="compatibilidad__hero__text">Luces</p>
           </a>
         </div>
         <div class="item">
           <a href="#">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-home.svg"  class="img-responsive compatibilidad__hero__image center-block">
               <p class="compatibilidad__hero__text">Hogar</p>
           </a>
         </div>
       </div>
     </div>
     <!-- fin de mobile -->
     <!-- desktop -->
     <div class="row hidden-xs">
       <div class="col-xs-12">
         <h2 class="headline headline--nomargin text-center">conecta tu <span id="type-word"></span></h2>
       </div>
     </div>
     <!-- fin desktop -->
   </div>
 </section>

 <!-- Sistema de soporte -->
 <section class="page-section compatibilidad__homekit-zwave">
   <div class="container">
     <div class="row">
       <div class="col-xs-12">
         <h2 class="headline text-center">Sistema de soporte</h2>
       </div>
     </div>
     <div class="row">
         <div class="col-sm-6 compatibilidad__homekit-zwave__protocolo">
           <div class="row">
             <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/homekit-logo-new.svg" alt="Homekit" class="img-responsive center-block">
               <p class="lead">Controla los accesorios habilitados para el Homekit hechos por FIBARO, utilizando Siri en tu iPhone, iPad y en iPod Touch.</p>
             </div>
           </div>
         </div>

         <div class="col-sm-6 compatibilidad__homekit-zwave__protocolo">
           <div class="row">
             <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/z-wave-logo.svg" alt="Z-wave" class="img-responsive center-block">
               <p class="lead">Z - Wave es tecnología inalámbrica líder en Hogares Inteligentes y está integrada en accesorios cotidianos como luces, cerraduras, calefactores y mucho más.</p>
             </div>
           </div>
         </div>
     </div>
   </div>
 </section>

 <!-- Todo está conectado -->
 <section class="page-section compatibilidad__todo-conectado">
   <div class="container">
     <div class="row">
       <div class="col-xs-12">
         <h2 class="headline headline--nomargin text-center">Todo está conectado</h2>
         <p class="text-center"><a href="#" class="button button-play" id="todo-conectado"><span>Play</span></a></p>
       </div>
     </div>
   </div>
 </section>

 <!-- Control de voz para el hogar -->
 <section class="page-section compatibilidad__control-voz">
   <div class="container">
     <div class="row">
       <div class="col-xs-8 col-xs-offset-2">
         <h2 class="headline headline--nomargin text-center">Control de voz para el hogar</h2>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-6">
         <div class="row">
           <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 compatibilidad__control-voz__marca">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/alexa-logo.svg" alt="Amazon Alexa" class="img-responsive center-block">
             <p class="lead text-center">Alexa es un servicio de voz basado en la nube de Amazon. Controla tu hogar con la integración de Amazon Alexa en nuestro Home Center de Fibaro.</p>
           </div>
         </div>

       </div>
       <div class="col-sm-6">
         <div class="row">
           <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 compatibilidad__control-voz__marca">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/siri-wave.svg" alt="Control de voz" class="img-responsive center-block">
             <p class="lead text-center">Como FIBARO es compatible con el HomeKit de Apple, ahora puedes controlar tu hogar a través del asistente de voz Siri, directamente desde el iPhone, iPad o iPod touch.</p>
           </div>
         </div>

       </div>
     </div>
   </div>
 </section>

 <!-- Revisa el video -->
 <section class="page-section compatibilidad__revisa-video">
   <div class="container">
     <div class="row">
       <div class="col-xs-12">
         <h2 class="headline headline--nomargin text-center">Revisa el video</h2>
         <p class="text-center"><a href="#" class="button button-play" id="play-alexa"><span>Play</span></a></p>
       </div>
     </div>
   </div>
 </section>



 <!-- Más posibilidades con dispositivos conectados -->
 <section class="page-section compatibilidad__devices">
   <div class="container">
     <div class="row">
       <div class="col-xs-10 col-xs-offset-1 col-xs-12">
         <h2 class="headline text-center">Más posibilidades con dispositivos conectados</h2>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-10 col-sm-offset-1">
         <div class="row hidden-xs hidden-sm ">
           <div class="col-sm-4">
             <div class="thumbnail center-block">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/dev-philips.jpg" alt="Philips" class="img-responsive" />
               <div class="caption">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/philips-logo.png" alt="Philips" class="img-responsive center-block" />
                 <p class="text-center">Controla, automatiza y monitorea tus luces desde cualquier parte.</p>
               </div>
             </div>
           </div>
           <div class="col-sm-4">
             <div class="thumbnail center-block">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/dev-netatmo.jpg" alt="Netatmo" class="img-responsive" />
               <div class="caption">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/netatmo-logo.png" alt="Netatmo" class="img-responsive center-block" />
                 <p class="text-center">Los módulos de meteorología que están al interior de tu Hogar, te brindan toda la información que necesitas.</p>
               </div>
             </div>
           </div>
           <div class="col-sm-4">
             <div class="thumbnail center-block">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/dev-sonos.jpg" alt="Sonos" class="img-responsive" />
               <div class="caption">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/sonos-logo.png" alt="Sonos" class="img-responsive center-block" />
                 <p class="text-center">Activa tu playlist favorito y controla los parlantes automáticamente.</p>
               </div>
             </div>
           </div>
           <div class="col-sm-4">
             <div class="thumbnail center-block">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/dev-dlink.jpg" alt="D-Link" class="img-responsive" />
               <div class="caption">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/dlink-logo.png" alt="D-Link" class="img-responsive center-block" />
                 <p class="text-center">Transmite videos en vivo desde tu teléfono o recibe notificaciones con video cuando suceda algo inesperado en tu Hogar.</p>
               </div>
             </div>
           </div>
           <div class="col-sm-4">
             <div class="thumbnail center-block">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/dev-yale.jpg" alt="Yale" class="img-responsive" />
               <div class="caption">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/yale-logo.png" alt="Yale" class="img-responsive center-block" />
                 <p class="text-center">La cerradura inteligente te da la libertad para asegurar tu Hogar sin la necesidad de una llave.</p>
               </div>
             </div>
           </div>
           <div class="col-sm-4">
             <div class="thumbnail center-block">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/dev-dsc.jpg" alt="DSC" class="img-responsive" />
               <div class="caption">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/dsc-logo.png" alt="DSC" class="img-responsive center-block" />
                 <p class="text-center">Líder mundial en alarmas electrónicas. Desde sus inicios, los expertos de DSC han liderado el rubro.</p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="row hidden-md hidden-lg">
       <div class="col-xs-10 col-xs-offset-1">
         <div class="row hidden-md hidden-lg">
         <!-- Mobile -->
         <div class="col-xs-6 col-sm-3">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/dev-philips-mobile.jpg" alt="Philips" class="img-responsive compatibilidad__devices__brands" />
         </div>
         <div class="col-xs-6 col-sm-3">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/dev-sonos-mobile.jpg" alt="Sonos" class="img-responsive compatibilidad__devices__brands" />
         </div>
         <div class="col-xs-6 col-sm-3">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/dev-dlink-mobile.jpg" alt="D-Link" class="img-responsive compatibilidad__devices__brands" />
         </div>
         <div class="col-xs-6 col-sm-3">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/dev-netatmo-mobile.jpg" alt="Netatmo" class="img-responsive compatibilidad__devices__brands" />
         </div>
         <!-- Fin de Mobile -->
         </div>
       </div>
     </div>

   </div>
 </section>

 <!-- Interfaces móviles y de escritorio -->
 <section class="page-section compatibilidad__interfaces">
   <div class="container">
     <div class="row">
       <div class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">
         <h2 class="headline headline--nomargin text-center">Interfaces móviles y de escritorio</h2>
         <p class="lead text-center">Configura y controla el sistema FIBARO desde cualquier lugar, mediante aplicaciones móviles y desde un computador.</p>
       </div>
     </div>
     <div class="row">
         <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
           <div class="row">
               <div class="col-xs-10 col-xs-offset-1">
                 <a href="https://itunes.apple.com/us/developer/fibar-group-sp.-z-o.o./id440193370">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/appstore-download.svg" alt="App Store Download">
                 </a>
                 <a href="https://play.google.com/store/apps/developer?id=Fibar+Group+S.A.">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/google-play-badge.svg" alt="Google Play Download">
                 </a>
               </div>
           </div>
         </div>
     </div>

   </div>
 </section>

 <!-- Plugins -->
 <section class="page-section compatibilidad__plugins">
   <div class="content typo-light">
       <div class="col-xs-12">
         <p class="headline headline--nomargin text-center">Más de</p>
         <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="140" viewBox="0 0 400 140">
           <defs>
             <linearGradient id="grad1" x1="0%" y1="30%" x2="0%" y2="90%">
                   <stop offset="0%" style="stop-color:#01f7d9;stop-opacity:1"></stop>
                   <stop offset="70%" style="stop-color:#05aee2;stop-opacity:1"></stop>
                 </linearGradient>
           </defs>
           <style> .c{fill:url(#grad1)}.p tspan{fill:url(#grad1)}</style>
           <text class="c hidden-sm hidden-md hidden-lg" x="50%" y="70%">165</text>
           <text class="c hidden-xs" x="20%" y="62%">165</text>
           <text class="p hidden-xs" x="50%" y="12%">
             <tspan x="205" dy="0.65em">PLUGINS</tspan>
             <tspan x="205" dy="1em">INTELIGENTES</tspan>
           </text>
         </svg>
         <p class="hidden-sm hidden-md hidden-lg">plugins inteligentes</p>
         <p class="lead">para muchas más posibilidades</p>
       </div>
   </div>
 </section>

<!-- Modal video  -->
<?php include_once 'includes/video-modal.php'; ?>

<!-- Cookies  -->
<?php include_once 'includes/cookies.php'; ?>

<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/typed.min.js"></script> -->
<?php get_footer(); ?>
