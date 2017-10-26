<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo(name); ?><?php if ( get_bloginfo('description') !== '' ) { ?> | <?php bloginfo( 'description' ); } ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="theme-color" content="#0090ff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <!-- <link rel="icon" type="image/png" href="<?php bloginfo(stylesheet_directory); ?>/favico.ico"> -->
    <!-- <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>"> -->
    <!-- <link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/assets/css/styles.min.css"> -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
    <body  <?php body_class(); ?> id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-fixed-top bg-white" role="navigation" id="nav">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll navbar__logo-text navbar-icon-center" href="#page-top">
                  <img src="<?php echo bloginfo(stylesheet_directory); ?>/assets/images/logo/tamed-2017-blanco-sl.svg" alt="TAMED" class="white-logo">
                </a>
                <button type="button" class="navbar-toggle fixed-left" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-ex1-collapse yamm">
                                <ul class="nav navbar-nav" id="menu-escrito">
                                    <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
                                    <li class="dropdown yamm-fullwidth">
                                      <a class="dropdown-toggle" href="#">Productos &nbsp;</a>
                                      <ul class="dropdown-menu--mobile list-unstyled">
                                        <!-- Sensores Mobile -->
                                        <li class="dropdown"><a href="#" class="dropdown-toggle menu-sub-toggle" data-toggle="dropdown">Sensores</a>
                                          <ul id="sensores-mobile" class="list-unstyled">
                                            <li class="product-nav">
                                              <a href="#">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-motion.jpg" alt="Motion Sensor" class="img-responsive">
                                                <span>Motion Sensor</span>
                                              </a>
                                            </li>

                                            <li class="product-nav">
                                              <a href="#">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-flood.jpg" alt="Flood Sensor" class="img-responsive">
                                                <span>Flood Sensor</span>
                                              </a>
                                            </li>

                                            <li class="product-nav">
                                              <a href="#">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-dws.jpg" alt="Door/Window Sensor" class="img-responsive">
                                                <span>Door/Window Sensor</span>
                                              </a>
                                            </li>

                                            <li class="product-nav">
                                              <a href="<?php echo get_permalink(17); ?>">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-smoke.jpg" alt="Smoke Sensor" class="img-responsive">
                                                <span>Smoke Sensor</span>
                                              </a>
                                            </li>

                                            <li class="product-nav">
                                              <a href="<?php echo get_permalink(15); ?>">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-ubs.jpg" alt="Universal Binary Sensor" class="img-responsive">
                                                <span>Universal Binary Sensor</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </li>

                                        <!-- Actuadores Mobile -->
                                        <li class="dropdown"><a href="#" class="dropdown-toggle menu-sub-toggle" data-toggle="dropdown">Actuadores</a>
                                          <ul id="actuadores-mobile" class="list-unstyled">
                                            <li class="product-nav">
                                              <a href="#">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-wallplug.jpg" alt="Wall Plug" class="img-responsive">
                                                <span>Wall Plug</span>
                                              </a>
                                            </li>

                                            <li class="product-nav">
                                              <a href="<?php echo get_permalink(19); ?>">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-dimmer.jpg" alt="Dimmer 2" class="img-responsive">
                                                <span>Dimmer 2</span>
                                              </a>
                                            </li>

                                            <li class="product-nav">
                                              <a href="<?php echo get_permalink(23); ?>">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-relay.jpg" alt="Switches 2" class="img-responsive">
                                                <span>Switches 2</span>
                                              </a>
                                            </li>

                                            <li class="product-nav">
                                              <a href="<?php echo get_permalink(25); ?>">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-roller.jpg" alt="Roller Shutter 2" class="img-responsive">
                                                <span>Roller Shutter 2</span>
                                              </a>
                                            </li>

                                            <li class="product-nav">
                                              <a href="<?php echo get_permalink(27); ?>">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-rgbw.jpg" alt="RGBW Controller" class="img-responsive">
                                                <span>RGBW Controller</p>
                                              </a>
                                            </li>
                                          </ul>
                                        </li>
                                        <!-- Remotos Mobile -->
                                        <li class="dropdown"><a href="#" class="dropdown-toggle menu-sub-toggle" data-toggle="dropdown">Remotos</a>
                                          <ul id="remotos-mobile" class="list-unstyled">
                                            <li class="product-nav">
                                              <a href="#">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-keyfob.jpg" alt="KeyFob" class="img-responsive">
                                                <span>KeyFob</p>
                                              </a>
                                            </li>
                                            <li class="product-nav">
                                              <a href="#">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-button.jpg" alt="The Button" class="img-responsive">
                                                <span>The Button</p>
                                              </a>
                                            </li>
                                            <li class="product-nav">
                                              <a href="#">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-swipe.jpg" alt="Swipe" class="img-responsive">
                                                <span>Swipe</p>
                                              </a>
                                            </li>
                                          </ul>
                                        </li>
                                        <!-- Puertas de Enlace Mobile -->
                                        <li class="dropdown"><a href="#" class="dropdown-toggle menu-sub-toggle" data-toggle="dropdown">Puertas de Enlace</a>
                                          <ul id="puertas-mobile" class="list-unstyled">
                                            <li class="product-nav">
                                              <a href="<?php echo get_permalink(33); ?>">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-hcl.jpg" alt="Home Center Lite" class="img-responsive">
                                                <span>Home Center Lite</p>
                                              </a>
                                            </li>

                                            <li class="product-nav">
                                              <a href="<?php echo get_permalink(29); ?>">
                                                <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-hc2.jpg" alt="Home Center 2" class="img-responsive">
                                                <span>Home Center 2</p>
                                              </a>
                                            </li>
                                          </ul>
                                        </li>
                                      </ul>
                                      <ul class="dropdown-menu dropdown-menu--desktop">
                                        <li>
                                          <div class="yamm-content container">
                                            <div class="row">
                                              <div class="span12">
                                                <ul class="nav nav-pills text-center">
                                                  <li><a data-toggle="tab" href="#sensores">Sensores</a></li>
                                                  <li><a data-toggle="tab" href="#actuadores">Actuadores</a></li>
                                                  <li><a data-toggle="tab" href="#remotos">Remotos</a></li>
                                                  <li><a data-toggle="tab" href="#puerta-de-enlace">Puerta de Enlace</a></li>
                                                </ul>
                                              </div>
                                              <div class="span12">
                                                <div class="tab-content">
                                                  <div class="tab-pane" id="sensores">
                                                    <ul class="nav-product-tab-list list-unstyled">

                                                      <li class="product-nav">
                                                        <a href="#">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-motion.jpg" alt="Motion Sensor" class="img-responsive">
                                                          <p>Motion Sensor</p>
                                                        </a>
                                                      </li>

                                                      <li class="product-nav">
                                                        <a href="#">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-flood.jpg" alt="Flood Sensor" class="img-responsive">
                                                          <p>Flood Sensor</p>
                                                        </a>
                                                      </li>

                                                      <li class="product-nav">
                                                        <a href="#">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-dws.jpg" alt="Door/Window Sensor" class="img-responsive">
                                                          <p>Door/Window Sensor</p>
                                                        </a>
                                                      </li>

                                                      <li class="product-nav">
                                                        <a href="<?php echo get_permalink(17); ?>">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-smoke.jpg" alt="Smoke Sensor" class="img-responsive">
                                                          <p>Smoke Sensor</p>
                                                        </a>
                                                      </li>

                                                      <li class="product-nav">
                                                        <a href="<?php echo get_permalink(15); ?>">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-ubs.jpg" alt="Universal Binary Sensor" class="img-responsive">
                                                          <p>Universal Binary Sensor</p>
                                                        </a>
                                                      </li>


                                                    </ul>
                                                  </div>
                                                  <div class="tab-pane" id="actuadores">
                                                    <ul class="nav-product-tab-list list-unstyled">
                                                      <li class="product-nav">
                                                        <a href="#">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-wallplug.jpg" alt="Wall Plug" class="img-responsive">
                                                          <p>Wall Plug</p>
                                                        </a>
                                                      </li>

                                                      <li class="product-nav">
                                                        <a href="<?php echo get_permalink(19); ?>">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-dimmer.jpg" alt="Dimmer 2" class="img-responsive">
                                                          <p>Dimmer 2</p>
                                                        </a>
                                                      </li>

                                                      <li class="product-nav">
                                                        <a href="<?php echo get_permalink(23); ?>">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-relay.jpg" alt="Switches 2" class="img-responsive">
                                                          <p>Switches 2</p>
                                                        </a>
                                                      </li>

                                                      <li class="product-nav">
                                                        <a href="<?php echo get_permalink(25); ?>">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-roller.jpg" alt="Roller Shutter 2" class="img-responsive">
                                                          <p>Roller Shutter 2</p>
                                                        </a>
                                                      </li>

                                                      <li class="product-nav">
                                                        <a href="<?php echo get_permalink(27); ?>">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-rgbw.jpg" alt="RGBW Controller" class="img-responsive">
                                                          <p>RGBW Controller</p>
                                                        </a>
                                                      </li>

                                                    </ul>
                                                  </div>
                                                  <div class="tab-pane" id="remotos">
                                                    <ul class="nav-product-tab-list list-unstyled">
                                                      <li class="product-nav">
                                                        <a href="#">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-keyfob.jpg" alt="KeyFob" class="img-responsive">
                                                          <p>KeyFob</p>
                                                        </a>
                                                      </li>
                                                      <li class="product-nav">
                                                        <a href="#">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-button.jpg" alt="The Button" class="img-responsive">
                                                          <p>The Button</p>
                                                        </a>
                                                      </li>
                                                      <li class="product-nav">
                                                        <a href="#">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-swipe.jpg" alt="Swipe" class="img-responsive">
                                                          <p>Swipe</p>
                                                        </a>
                                                      </li>
                                                    </ul>
                                                  </div>

                                                  <div class="tab-pane" id="puerta-de-enlace">
                                                    <ul class="nav-product-tab-list list-unstyled">
                                                      <li class="product-nav">
                                                        <a href="<?php echo get_permalink(33); ?>">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-hcl.jpg" alt="Home Center Lite" class="img-responsive">
                                                          <p>Home Center Lite</p>
                                                        </a>
                                                      </li>

                                                      <li class="product-nav">
                                                        <a href="<?php echo get_permalink(29); ?>">
                                                          <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/nav/nav-hc2.jpg" alt="Home Center 2" class="img-responsive">
                                                          <p>Home Center 2</p>
                                                        </a>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><a class="page-scroll" href="http://soporte.tuhogarinteligente.cl/instalacion">Instalación</a></li>
                                    <li><a class="page-scroll" href="http://www.proyectos.tuhogarinteligente.cl/">Proyectos</a></li>
                                    <li><a class="page-scroll" href="http://soporte.tuhogarinteligente.cl/">Soporte</a></li>
                                    <li><a class="page-scroll" href="http://expertos.tuhogarinteligente.cl/">Expertos</a></li>
                                    <li><a class="page-scroll" href="http://blog.tuhogarinteligente.cl">Blog</a></li>
                                </ul>
                            </div>
                          </div>

             <?php /*
               wp_nav_menu(
                 array (
                   'theme_location' => 'top-menu',
                   'menu_class' => 'nav navbar-nav navbar-right',
                   'container_class' => 'collapse navbar-collapse navbar-ex1-collapse'
                   )
                 )
            */ ?>






          </div>
          <!-- /.container -->
      </nav>
