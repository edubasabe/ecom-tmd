<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo(title); ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <!-- <link rel="icon" type="image/png" href="<?php bloginfo(stylesheet_directory); ?>/favico.ico"> -->
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/assets/css/styles.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body  <?php body_class(); ?> id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
              <div class="navbar-header page-scroll">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand page-scroll navbar__logo-text" href="<?php bloginfo(siteurl); ?>/#page-top"><img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/tamed-2017.svg" alt="Tamed Logo" style="max-height:20px;"><span class="sr-only">FIBARO</span><span class="navbar__logo-subtext">Soporte</span></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <?php /*
              <div class="collapse navbar-collapse navbar-ex1-collapse">
                  <ul class="nav navbar-nav navbar-right">
                      <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
                      <li><a class="page-scroll" href="#soluciones-basicas">Soluciones Básicas</a></li>
                      <li><a class="page-scroll" href="#software">Software</a></li>
                      <li><a class="page-scroll" href="faq.html">FAQ's</a></li>
                      <li><a class="page-scroll" href="#ayuda">Ayuda</a></li>
                      <li><a class="page-scroll" href="#garantia">Garantía</a></li>
                  </ul>
              </div>
             */ ?>





             <?php
               wp_nav_menu(
                 array (
                   'theme_location' => 'top-menu',
                   'menu_class' => 'nav navbar-nav navbar-right',
                   'container_class' => 'collapse navbar-collapse navbar-ex1-collapse'
                   )
                 )
             ?>






          </div>
          <!-- /.container -->
      </nav>
