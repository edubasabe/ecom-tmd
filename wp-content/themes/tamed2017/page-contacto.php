<?php
/*
* Template Name: Página de Contacto
*/
 ?>

<?php get_header(); ?>

<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>



 <main class="contacto">
   <section class="page-section contacto__hero">
     <div class="container-fluid">
       <div class="row hidden-sm hidden-md hidden-lg">
         <div class="col-xs-12">
           <p class="text-center">Siéntete con libertad</p>
           <h2 class="headline headline--nomargin text-center"> para contactarnos</h2>
         </div>
       </div>

       <div class="row hidden-xs">
         <div class="col-xs-12">
           <h2 class="headline headline--nomargin text-center">Siéntete con libertad para contactarnos</h2>
         </div>
       </div>
     </div>
   </section>

   <section class="contacto__departamentos">
     <div class="container-fluid">

       <!-- Ventas -->
       <div class="row">
         <div class="col-xs-10 col-xs-offset-1 col-lg-12 col-lg-offset-0">
           <h2 class="headline headline--nomargin page-header">Ventas</h2>
         </div>
       </div>

       <div class="row">
         <div class="col-xs-10 col-xs-offset-1 col-lg-12 col-lg-offset-0">
           <div class="row">
             <div class="col-sm-6">
               <!-- Tamara -->
               <ul class="list-unstyled card-info">
                 <li><h4 class="azul">Business Lead & Market Development</h4></li>
                 <li><h3>Tamara Utman</h3></li>
                 <li><a href="tel:+56228486547" class=""> +56 2 2848 6547</a> ext. 302</li>
                 <li><a href="mailto:tutman@tamed.cl" class="">tutman@tamed.cl</a></li>
               </ul>
             </div>
             <div class="col-sm-6">
               <!-- Sebastian -->
               <ul class="list-unstyled card-info">
                 <li><h4 class="azul">Real Estate Development Manager</h4></li>
                 <li><h3>Sebastián Carrasco</h3></li>
                 <li><a href="tel:+56228486547"> +56 2 2848 6547 </a> ext. 311</li>
                 <li><a href="mailto:scarrasco@tamed.cl" class="">scarrasco@tamed.cl</a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>

       <!-- Operaciones -->
       <div class="row">
         <div class="col-xs-10 col-xs-offset-1 col-lg-12 col-lg-offset-0">
           <h2 class="headline headline--nomargin page-header">Operaciones</h2>
         </div>
       </div>
       <div class="row">
         <div class="col-xs-10 col-xs-offset-1 col-lg-12 col-lg-offset-0">
           <div class="row">
             <div class="col-sm-6">
               <ul class="list-unstyled card-info">
                 <li><h4 class="azul">Chief Operations Officer</h4></li>
                 <li><h3>Paola Lillo</h3></li>
                 <li><a href="tel:+56228486547" class=""> +56 2 2848 6547</a> ext. 305</li>
                 <li><a href="mailto:plillo@tamed.cl" class="">plillo@tamed.cl</a></li>
               </ul>
             </div>
             <div class="col-sm-6">
               <ul class="list-unstyled card-info">
                 <li><h4 class="azul">Quality Assurance</h4></li>
                 <li><h3>Izabela Wozniak</h3></li>
                 <li><a href="tel:+56228486547" class=""> +56 2 2848 6547</a> ext. 305</li>
                 <li><a href="mailto:iwozniak@tamed.cl" class="">iwozniak@tamed.cl</a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <!-- Fin de Operaciones -->

       <!-- Logística -->
       <div class="row">
         <div class="col-xs-10 col-xs-offset-1 col-lg-12 col-lg-offset-0">
           <h2 class="headline headline--nomargin page-header">Logística</h2>
         </div>
       </div>
       <div class="row">
         <div class="col-xs-10 col-xs-offset-1 col-lg-12 col-lg-offset-0">
           <div class="row">
             <div class="col-sm-6">
               <ul class="list-unstyled card-info">
                 <li><h4 class="azul">Chief Logistics Officer</h4></li>
                 <li><h3>Agnieszka Bartczak</h3></li>
                 <li><a href="tel:+56228486547" class=""> +56 2 2848 6547</a> ext. 304</li>
                 <li><a href="mailto:abart@tamed.cl" class="">abart@tamed.cl</a></li>
               </ ul>
             </div>
           </div>
         </div>
       </div>
     </div>
     </div>
   </section>



   <!-- Partners -->
   <section class="contacto__partners">
     <div class="container-fluid">
       <div class="row">
         <div class="col-xs-10 col-xs-offset-1 col-lg-12 col-lg-offset-0">
           <h2 class="headline headline--nomargin page-header">Partners</h2>
           <br>
         </div>
       </div>
       <div class="row">
         <div class="col-xs-10 col-xs-offset-1 col-lg-12 col-lg-offset-0">
           <div class="row">

             <div class="col-xs-6 col-sm-4 col-md-2">
               <div class="contacto__partners__item">
                 <a href="http://expertos.tuhogarinteligente.cl/" class="thumbnail" id="btn-dist-form">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_distributor_contact.svg" alt="Distribuidores" class="img-responsive">
                 <p class="text-center">Distribuidores</p>
               </a>
               </div>
             </div>

             <div class="col-xs-6 col-sm-4 col-md-2">
               <div class="contacto__partners__item">
                 <a href="http://expertos.tuhogarinteligente.cl/" class="thumbnail">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_installer_contact.svg" alt="Inmobiliaria" class="img-responsive">
                 <p class="text-center">Instaladores</p>
               </a>
               </div>
             </div>
             <div class="col-xs-6 col-sm-4 col-md-2">
               <div class="contacto__partners__item">
                 <a href="http://expertos.tuhogarinteligente.cl/" class="thumbnail">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_architect_contact.svg" alt="Inmobiliaria" class="img-responsive">
                 <p class="text-center">Arquitectos y Diseñadores</p>
               </a>
               </div>
             </div>

             <div class="col-xs-6 col-sm-4 col-md-2">
               <div class="contacto__partners__item">
                 <a href="http://proyectos.tuhogarinteligente.cl/" class="thumbnail">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_developer_contact.svg" alt="Inmobiliaria" width="70" class="img-responsive">
                 <p class="text-center">Inmobiliarias y Constructoras</p>
               </a>
               </div>
             </div>

             <div class="col-xs-6 col-sm-4 col-md-2">
               <div class="contacto__partners__item">
                 <a href="#" class="thumbnail" id="btn-telcos-form">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_sensors.svg" alt="Telco" class="img-responsive">
                 <p class="text-center">Telcos</p>
               </a>
               </div>
             </div>

             <div class="col-xs-6 col-sm-4 col-md-2">
               <div class="contacto__partners__item">
                 <a href="#" class="thumbnail" id="btn-retail-form">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_retail_bag.svg" alt="Retail" class="img-responsive">
               <p class="text-center">Retail</p>
             </a>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>


   <!-- Relaciones Públicas -->
   <section class="contacto__relaciones-publicas">
     <div class="container-fluid">
       <div class="row">
         <div class="col-xs-10 col-xs-offset-1 col-lg-12 col-lg-offset-0">
           <h2 class="headline headline--nomargin page-header">Relaciones Públicas</h2>
         </div>
       </div>
       <div class="row contacto__relaciones-publicas__contenedor">
         <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1 col-lg-12 col-lg-offset-0">
           <div class="row">
             <div class="col-sm-6 col-md-6">
               <div class="team">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/marketing-dept.svg" width="50" alt="marketing" class="float-icon">
                 <h3>Departamento de Marketing</h3>
                 <p><a href="mailto:adonofrio@tamed.cl" class="link">adonofrio@tamed.cl</a></p>
               </div>
             </div>

             <div class="col-sm-6 col-md-6">
               <div class="team">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/pr-dept.svg" width="50" alt="prensa" class="float-icon">
                 <h3>Departamento de Comunicaciones</h3>
                 <p><a href="mailto:cgarcia@tamed.cl" class="link">cgarcia@tamed.cl</a></p>
               </div>
             </div>
             <!-- <div class="col-md-4">
           <img src="./assets/images/icon/icon_mediadl.svg" alt="descarga" class="float-icon">
           <h3>Comunicados de prensa</h3>
           <a href="#" class="link" download>Descargar</a>
         </div> -->
           </div>
         </div>
       </div>
     </div>
   </section>

   <!-- Contact Info -->
   <section class="contacto__info">
     <div class="container-fluid">
       <div class="row">
         <div class="col-xs-10 col-xs-offset-1 col-lg-12 col-lg-offset-0">
           <h2 class="headline headline--nomargin page-header">Contacto</h2>
         </div>
       </div>
       <div class="row contacto__info__contenedor">
         <div class="col-xs-10 col-xs-offset-1 col-md-2 col-lg-2 col-lg-offset-0">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/tamed-logo-2017-large.svg" height="50" alt="TAMED" class="img-responsive">
         </div>
         <div class="col-xs-10 col-xs-offset-1 col-md-6 col-lg-6 col-lg-offset-0">
           <ul class="list-unstyled contacto__info__list">
             <li>
               <h4>TAMED SpA.</h4></li>
             <li>Distribuidor Oficial de FIBARO en Chile y Perú</li>
             <li><strong>HQ:</strong> Av. Las Condes, Las Condes 9460 Of. 1504. Santiago, Chile</li>
             <li><strong>Experience Center:</strong> Av. Las Condes 9765, Local 223-224. Las Condes, Santiago, Chile.</li>

           </ul>
         </div>
         <div class="col-xs-10 col-xs-offset-1 col-md-4 col-lg-4 col-lg-offset-0">
           <ul class="list-unstyled contacto__info__list">
             <li><strong>Email:</strong> <a href="mailto:contacto@tamed.cl">contacto@tamed.cl</a></li>
             <li><strong>Contact Center Chile:</strong> <a href="+56228486547">+56 2 2848 6547</a></li>
             <li><strong>Contact Center Perú:</strong> <a href="+5116419168">+51 1641 9168</a></li>
             <!-- <li><strong>R.U.T.:</strong> 76.295.486-9.</li> -->
             <li><strong>ZIP Code:</strong> 7591092</li>
             <!-- <li>09:00 - 17:00 UTC-3</li> -->
           </ul>
         </div>
       </div>
     </div>
   </section>
 </main>




    <!-- Contacto Form bottom right-->
    <div id="contacto-modal">
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
    </div>
    <!-- Contacto form bottom right  -->

<!-- telcos - distribuidores - retail  -->
<?php include_once 'includes/retail-modal-form.php'; ?>
<?php include_once 'includes/dist-modal-form.php'; ?>
<?php include_once 'includes/telcos-modal-form.php'; ?>

<!-- Modal video  -->
<?php include_once 'includes/video-modal.php'; ?>

<!-- Cookies  -->
<?php include_once 'includes/cookies.php'; ?>

<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Inicio de la Plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/typed.min.js"></script> -->
<?php get_footer(); ?>
