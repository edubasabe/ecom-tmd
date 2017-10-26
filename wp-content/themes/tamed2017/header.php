<?php
if ( is_shop() || is_product()) {
      include_once 'header-shop.php';
} else { ?>



  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php bloginfo(name); ?><?php if ( get_bloginfo('description') !== '' ) { ?> | <?php bloginfo( 'description' ); } ?></title>
      <meta name="theme-color" content="#0090ff">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
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
                <!-- Cambiado -->
                <div class="container">
                  <div class="row">
                    <div class="">
                      <div class="navbar-header">
                        <a class="navbar-brand navbar__logo-text navbar-icon-center" href="<?php echo home_url(); ?>">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/tamed-2017-blanco-sl.svg" alt="TAMED" class="white-logo">
                        </a>
                        <button type="button" class="navbar-toggle fixed-left" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                      </div>

                      <div class="collapse navbar-collapse navbar-ex1-collapse yamm">
                          <ul class="nav navbar-nav" id="menu-escrito">
                              <li class="hidden"><a class="page-scroll" href="#page-top" ></a></li>

                              <li class="dropdown yamm-fullwidth level-1">
                                <a class="dropdown-toggle" href="#" id="productos">Productos &nbsp;</a>
                                <!-- Menu Mobile ++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                                <!-- Sensores Mobile -->
                                <ul class="dropdown-menu--mobile list-unstyled collapse">
                                  <li class="dropdown level-2"><a href="#" class="dropdown-toggle menu-sub-toggle" data-toggle="dropdown">Sensores</a>
                                    <ul id="sensores-mobile" class="list-unstyled collapse">
                                      <li class="level-3">
                                        <a href="<?php echo home_url(); ?>/motion-sensor">
                                          <table border="0">
                                            <tbody>
                                              <tr>
                                                <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-motion.jpg" alt="Motion Sensor" class="img-responsive"></th>
                                                <th><span class="titulo">Motion Sensor</span><br> <span class="subtitulo">(Sensor de Movimiento)</span></th>
                                              </tr>
                                              <tr>
                                                <td></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </a>
                                      </li>


                                      <li class="level-3">
                                          <a href="<?php echo home_url(); ?>/flood-sensor">
                                              <table border="0">
                                                  <tbody>
                                                      <tr>
                                                          <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-flood.jpg" alt="Flood Sensor" class="img-responsive"></th>
                                                          <th><span class="titulo">Flood Sensor</span><br> <span class="subtitulo">(Sensor de Inundación)</span></th>
                                                      </tr>
                                                      <tr>
                                                          <td></td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </a>
                                      </li>
                                      <li class="level-3">
                                          <a href="<?php echo home_url(); ?>/door-window-sensor">
                                              <table border="0">
                                                  <tbody>
                                                      <tr>
                                                          <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-dws.jpg" alt="Door/Window Sensor" class="img-responsive"></th>
                                                          <th><span class="titulo">Door/Window Sensor</span><br> <span class="subtitulo">(Sensor de Puerta/Ventana)</span></th>
                                                      </tr>
                                                      <tr>
                                                          <td></td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </a>
                                      </li>
                                      <li class="level-3">
                                          <a href="<?php echo home_url(); ?>/smoke-sensor">
                                              <table border="0">
                                                  <tbody>
                                                      <tr>
                                                          <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-smoke.jpg" alt="Smoke Sensor" class="img-responsive"></th>
                                                          <th><span class="titulo">Smoke Sensor</span><br> <span class="subtitulo">(Sensor de Humo)</span></th>
                                                      </tr>
                                                      <tr>
                                                          <td></td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </a>
                                      </li>

                                      <li class="level-3">
                                          <a href="<?php echo home_url(); ?>/co-sensor">
                                              <table border="0">
                                                  <tbody>
                                                      <tr>
                                                          <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-co.jpg" alt="CO Sensor" class="img-responsive"></th>
                                                          <th><span class="titulo">CO Sensor</span><br> <span class="subtitulo">(Sensor de CO)</span></th>
                                                      </tr>
                                                      <tr>
                                                          <td></td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </a>
                                      </li>
                                      <li class="level-3">
                                          <a href="<?php echo home_url(); ?>/universal-sensor">
                                              <table border="0">
                                                  <tbody>
                                                      <tr>
                                                          <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-ubs.jpg" alt="Universal Binary Sensor" class="img-responsive"></th>
                                                          <th><span class="titulo">Universal Binary Sensor</span><br> <span class="subtitulo">(Sensor Binario Universal)</span></th>
                                                      </tr>
                                                      <tr>
                                                          <td></td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </a>
                                      </li>
                                      </ul>
                                  </li>
                                  <!-- Actuadores Mobile -->
                                  <li class="dropdown level-2"><a href="#" class="dropdown-toggle menu-sub-toggle" data-toggle="dropdown">Actuadores</a>
                                      <ul id="actuadores-mobile" class="list-unstyled collapse">
                                          <li class="level-3">
                                              <a href="<?php echo home_url(); ?>/wall-plug">
                                                  <table border="0">
                                                      <tbody>
                                                          <tr>
                                                              <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-wallplug.jpg" alt="Wall Plug" class="img-responsive"></th>
                                                              <th><span class="titulo">Wall Plug</span><br> <span class="subtitulo">(Enchufe inteligente)</span></th>
                                                          </tr>
                                                          <tr></tr>
                                                      </tbody>
                                                  </table>
                                              </a>
                                          </li>
                                          <li class="level-3">
                                              <a href="<?php echo home_url(); ?>/dimmer-2">
                                                  <table border="0">
                                                      <tbody>
                                                          <tr>
                                                              <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-dimmer.jpg" alt="Dimmer 2" class="img-responsive"></th>
                                                              <th><span class="titulo">Dimmer 2</span><br> <span class="subtitulo">(Control de iluminación)</span></th>
                                                          </tr>
                                                          <tr></tr>
                                                      </tbody>
                                                  </table>
                                              </a>
                                          </li>
                                          <li class="level-3">
                                              <a href="<?php echo home_url(); ?>/switches-2">
                                                  <table border="0">
                                                      <tbody>
                                                          <tr>
                                                              <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-relay.jpg" alt="Switches 2" class="img-responsive"></th>
                                                              <th><span class="titulo">Switches 2</span><br> <span class="subtitulo">(Interruptores inteligentes)</span></th>
                                                          </tr>
                                                          <tr></tr>
                                                      </tbody>
                                                  </table>
                                              </a>
                                          </li>
                                          <li class="level-3">
                                              <a href="<?php echo home_url(); ?>/roller-shutter-2">
                                                  <table border="0">
                                                      <tbody>
                                                          <tr>
                                                              <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-roller.jpg" alt="Roller Shutter 2" class="img-responsive"></th>
                                                              <th><span class="titulo">Roller Shutter 2</span><br> <span class="subtitulo">(Control de cortinas y motores)</span></th>
                                                          </tr>
                                                          <tr></tr>
                                                      </tbody>
                                                  </table>
                                              </a>
                                          </li>
                                          <li class="level-3">
                                              <a href="<?php echo home_url(); ?>/rgbw-controller">
                                                  <table border="0">
                                                      <tbody>
                                                          <tr>
                                                              <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-rgbw.jpg" alt="RGBW Controller" class="img-responsive"></th>
                                                              <th><span class="titulo">RGBW Controller</span><br> <span class="subtitulo">(Control de cintas LED RGBW)</span></th>
                                                          </tr>
                                                          <tr></tr>
                                                      </tbody>
                                                  </table>
                                              </a>
                                          </li>
                                      </ul>
                                  </li>
                                  <!-- Remotos Mobile -->
                                  <li class="dropdown level-2"><a href="#" class="dropdown-toggle menu-sub-toggle" data-toggle="dropdown">Actuadores Remotos</a>
                                      <ul id="remotos-mobile" class="list-unstyled collapse">
                                          <li class="level-3">
                                              <a href="<?php echo home_url(); ?>/keyfob">
                                                  <table border="0">
                                                      <tbody>
                                                          <tr>
                                                              <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-keyfob.jpg" alt="KeyFob" class="img-responsive"></th>
                                                              <th><span class="titulo">KeyFob</span><br> <span class="subtitulo">(Control remoto personal)</span></th>
                                                          </tr>
                                                          <tr></tr>
                                                      </tbody>
                                                  </table>
                                              </a>
                                          </li>
                                          <li class="level-3">
                                              <a href="<?php echo home_url(); ?>/the-button">
                                                  <table border="0">
                                                      <tbody>
                                                          <tr>
                                                              <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-button.jpg" alt="The Button" class="img-responsive"></th>
                                                              <th><span class="titulo">The Button</span><br> <span class="subtitulo">(Interruptor inalámbrico)</span></th>
                                                          </tr>
                                                          <tr></tr>
                                                      </tbody>
                                                  </table>
                                              </a>
                                          </li>
                                          <li class="level-3">
                                              <a href="<?php echo home_url(); ?>/swipe">
                                                  <table border="0">
                                                      <tbody>
                                                          <tr>
                                                              <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-swipe.jpg" alt="Swipe" class="img-responsive"></th>
                                                              <th><span class="titulo">Swipe</span><br> <span class="subtitulo">(Control por gestos)</span></th>
                                                          </tr>
                                                          <tr></tr>
                                                      </tbody>
                                                  </table>
                                              </a>
                                          </li>
                                      </ul>
                                  </li>
                                  <!-- Puertas de Enlace Mobile -->
                                  <li class="dropdown level-2"><a href="#" class="dropdown-toggle menu-sub-toggle" data-toggle="dropdown">Controladores</a>
                                      <ul id="puertas-mobile" class="list-unstyled collapse">
                                          <li class="level-3">
                                              <a href="<?php echo home_url(); ?>/home-center-lite">
                                                  <table border="0">
                                                      <tbody>
                                                          <tr>
                                                              <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-hcl.jpg" alt="Home Center Lite" class="img-responsive"></th>
                                                              <th><span class="titulo">Home Center Lite</span></th>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                              </a>
                                          </li>
                                          <li class="level-3">
                                              <a href="<?php echo home_url(); ?>/home-center-2">
                                                  <table border="0">
                                                      <tbody>
                                                          <tr>
                                                              <th rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-hc2.jpg" alt="Home Center 2" class="img-responsive"></th>
                                                              <th><span class="titulo">Home Center 2</span></th>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                              </a>
                                          </li>
                                      </ul>
                                  </li>
                                </ul>


                                <!-- Menu Desktop ++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                                <ul class="dropdown-menu dropdown-menu--desktop collapse">
                                  <li>
                                    <div class="yamm-content container">
                                      <div class="row">
                                        <div class="span12">
                                          <ul class="nav nav-pills text-center" id="desktop_lista">
                                            <li class=""><a data-toggle="tab" href="#sensores" aria-expanded="true">Sensores</a></li>
                                            <li><a data-toggle="tab" href="#actuadores" aria-expanded="true">Actuadores</a></li>
                                            <li><a data-toggle="tab" href="#remotos" aria-expanded="true">Actuadores Remotos</a></li>
                                            <li><a data-toggle="tab" href="#puerta-de-enlace" aria-expanded="true">Controladores</a></li>
                                          </ul>
                                        </div>
                                        <div class="span12">
                                          <div class="tab-content">
                                            <div id="sensores" class="tab-pane">
                                                <ul class="nav-product-tab-list list-unstyled">
                                                    <li class="product-nav"><a href="<?php echo home_url(); ?>/motion-sensor"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-motion.jpg" alt="Motion Sensor" class="img-responsive"> <p>Motion Sensor</p></a></li>
                                                    <li class="product-nav"><a href="<?php echo home_url(); ?>/flood-sensor"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-flood.jpg" alt="Flood Sensor" class="img-responsive"> <p>Flood Sensor</p></a></li>
                                                    <li class="product-nav"><a href="<?php echo home_url(); ?>/door-window-sensor"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-dws.jpg" alt="Door/Window Sensor" class="img-responsive"> <p>Door/Window Sensor</p></a></li>
                                                    <li class="product-nav"><a href="<?php echo home_url(); ?>/smoke-sensor"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-smoke.jpg" alt="Smoke Sensor" class="img-responsive"> <p>Smoke Sensor</p></a></li>
                                                    <li class="product-nav"><a href="<?php echo home_url(); ?>/co-sensor"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-co.jpg" alt="CO Sensor" class="img-responsive"> <p>CO Sensor</p></a></li>
                                                    <li class="product-nav"><a href="<?php echo home_url(); ?>/universal-sensor"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-ubs.jpg" alt="Universal Binary Sensor" class="img-responsive"> <p>Universal Binary Sensor</p></a></li>
                                                </ul>
                                            </div>

                                            <div id="actuadores" class="tab-pane">
                                                <ul class="nav-product-tab-list list-unstyled">
                                                    <li class="product-nav"><a href="<?php echo home_url(); ?>/wall-plug"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-wallplug.jpg" alt="Wall Plug" class="img-responsive"> <p>Wall Plug</p></a></li>
                                                    <li class="product-nav"><a href="<?php echo home_url(); ?>/dimmer-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-dimmer.jpg" alt="Dimmer 2" class="img-responsive"> <p>Dimmer 2</p></a></li>
                                                    <li class="product-nav"><a href="<?php echo home_url(); ?>/switches-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-relay.jpg" alt="Switches 2" class="img-responsive"> <p>Switches 2</p></a></li>
                                                    <li class="product-nav"><a href="<?php echo home_url(); ?>/roller-shutter-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-roller.jpg" alt="Roller Shutter 2" class="img-responsive"> <p>Roller Shutter 2</p></a></li>
                                                    <li class="product-nav"><a href="<?php echo home_url(); ?>/rgbw-controller"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-rgbw.jpg" alt="RGBW Controller" class="img-responsive"> <p>RGBW Controller</p></a></li>
                                                </ul>
                                            </div>


                                            <div id="remotos" class="tab-pane">
                                                <ul class="nav-product-tab-list list-unstyled">
                                                    <li class="product-nav remotos"><a href="<?php echo home_url(); ?>/keyfob"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-keyfob.jpg" alt="KeyFob" class="img-responsive"> <p>KeyFob</p></a></li>
                                                    <li class="product-nav remotos"><a href="<?php echo home_url(); ?>/the-button"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-button.jpg" alt="The Button" class="img-responsive"> <p>The Button</p></a></li>
                                                    <li class="product-nav remotos"><a href="<?php echo home_url(); ?>/swipe"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-swipe.jpg" alt="Swipe" class="img-responsive"> <p>Swipe</p></a></li>
                                                </ul>
                                            </div>

                                            <div id="puerta-de-enlace" class="tab-pane">
                                                <ul class="nav-product-tab-list list-unstyled">
                                                    <li class="product-nav puerta-de-enlace"><a href="<?php echo home_url(); ?>/home-center-lite"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-hcl.jpg" alt="Home Center Lite" class="img-responsive"> <p>Home Center Lite</p></a></li>
                                                    <li class="product-nav puerta-de-enlace"><a href="<?php echo home_url(); ?>/home-center-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/nav-hc2.jpg" alt="Home Center 2" class="img-responsive"> <p>Home Center 2</p></a></li>
                                                </ul>
                                            </div>

                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                                <!-- Fin del Menu Desktop ++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                              </li>
                              <!-- <li><a class="page-scroll" href="http://soporte.tuhogarinteligente.cl/instalacion">Instalación</a></li> -->
                              <li class="level-1"><a class="page-scroll" href="<?php echo get_page_link(30493); ?>" >Por qué FIBARO</a></li>
                              <li class="level-1"><a class="page-scroll" href="<?php echo get_page_link(30491); ?>" >Compatibilidad</a></li>
                              <li class="dropdown casas-deptos level-1"><a class="dropdown-toggle" href="#" >Inmobiliarias <i>Smart</i>&nbsp;&nbsp;</a>

                                <!-- Desplegable Mobile -->
                                <ul class="dropdown-menu--mobile list-unstyled collapse">
                                  <li class=""><a href="http://proyectos.tuhogarinteligente.cl/" class="">Inicio</a></li>
                                  <li class=""><a href="http://proyectos.tuhogarinteligente.cl/proyectos/" class="menu-sub-toggle">Casas</a></li>
                                  <li class=""><a href="http://proyectos.tuhogarinteligente.cl/proyectos/" class="menu-sub-toggle">Departamentos</a></li>
                                  <li class=""><a href="http://proyectos.tuhogarinteligente.cl/proyectos/" class="menu-sub-toggle">Oficinas</a></li>
                                </ul>

                                  <!-- Desplegable Desktop -->
                                  <ul class="dropdown-menu dropdown-menu--desktop list-unstyled collapse">
                                    <li class=""><a href="http://proyectos.tuhogarinteligente.cl/" class="">Inicio</a></li>
                                    <li class=""><a href="http://proyectos.tuhogarinteligente.cl/proyectos/" class="menu-sub-toggle">Casas</a></li>
                                    <li class=""><a href="http://proyectos.tuhogarinteligente.cl/proyectos/" class="menu-sub-toggle">Departamentos</a></li>
                                    <li class=""><a href="http://proyectos.tuhogarinteligente.cl/proyectos/" class="menu-sub-toggle">Oficinas</a></li>
                                  </ul>

                              </li>
                              <!-- <li><a class="page-scroll" href="http://expertos.tuhogarinteligente.cl/">Expertos</a></li> -->
                              <li class="dropdown yamm blog level-1"><a class="dropdown-toggle" href="#" >Blog&nbsp;&nbsp;</a>
                                <!-- Desplegable Mobile -->
                                <ul class="dropdown-menu--mobile list-unstyled collapsed">
                                  <li class=""><a href="http://blog.tuhogarinteligente.cl/" class="">Inicio</a></li>
                                  <li class=""><a href="http://blog.tuhogarinteligente.cl/category/mundo-inmobiliario/" class="menu-sub-toggle">Mundo Inmobiliario</a></li>
                                  <li class=""><a href="http://blog.tuhogarinteligente.cl/category/ideas-para-tu-hogar/" class="menu-sub-toggle">Ideas para tu hogar</a></li>
                                  <li class=""><a href="http://blog.tuhogarinteligente.cl/category/trucos-tecnicos/" class="menu-sub-toggle">Trucos Técnicos ;)</a></li>
                                </ul>

                                <!-- Desplegable Desktop -->
                                <ul class="dropdown-menu dropdown-menu--desktop list-unstyled collapsed">
                                  <li class=""><a href="http://blog.tuhogarinteligente.cl/" class="">Inicio</a></li>
                                  <li class=""><a href="http://blog.tuhogarinteligente.cl/category/mundo-inmobiliario/" class="menu-sub-toggle">Mundo Inmobiliario</a></li>
                                  <li class=""><a href="http://blog.tuhogarinteligente.cl/category/ideas-para-tu-hogar/" class="menu-sub-toggle">Ideas para tu hogar</a></li>
                                  <li class=""><a href="http://blog.tuhogarinteligente.cl/category/trucos-tecnicos/" class="menu-sub-toggle">Trucos Técnicos ;)</a></li>
                                </ul>
                              </li>

                              <li class="level-1"><a class="page-scroll" href="http://soporte.tuhogarinteligente.cl/">Soporte</a></li>

                                <?php
                                $current_user = wp_get_current_user();
                                $icon_login = get_template_directory_uri();


                                if ( is_user_logged_in() )
                                {
                                  if ( $current_user->user_firstname )
                                  {
                                    echo "<li class='dropdown yamm level-1'><a class='dropdown-toggle btn-login azul'> Hola, " . $current_user->user_firstname . "&nbsp;<img src='" . $icon_login . "/assets/images/icon/icon-user-login.svg' alt='User' height='20' width='20' />&nbsp;&nbsp;</a>";

                                  } else {
                                     echo "<li class='dropdown yamm level-1'><a class='dropdown-toggle btn-login azul'> Hola, " . $current_user->user_login . "&nbsp;<img src='" . $icon_login . "/assets/images/icon/icon-user-login.svg' alt='User' height='20' width='20' />&nbsp;&nbsp;</a>";
                                   }


                                   ?>

                                   <!-- Desplegable Mobile -->
                                   <ul class="dropdown-menu--mobile list-unstyled collapsed">
                                     <li class=""><a href="<?php echo get_page_link(12); ?>" class="">Mi cuenta</a></li>
                                     <li class=""><a href="<?php echo get_page_link(12) . '/pedidos/'; ?>" class="menu-sub-toggle">Pedidos</a></li>
                                     <li class=""><a href="<?php echo get_page_link(12) . '/editar-cuenta/'; ?>" class="menu-sub-toggle">Editar cuenta</a></li>
                                     <li class=""><a href="<?php echo wp_logout_url( get_page_link(12)  ); ?>" class="menu-sub-toggle">Cerrar sesión</a></li>
                                   </ul>

                                   <!-- Desplegable Desktop -->
                                   <ul class="dropdown-menu dropdown-menu--desktop list-unstyled collapsed">
                                     <li class=""><a href="<?php echo get_page_link(12); ?>" class="">Mi cuenta</a></li>
                                     <li class=""><a href="<?php echo get_page_link(12) . '/pedidos/'; ?>" class="menu-sub-toggle">Pedidos</a></li>
                                     <li class=""><a href="<?php echo get_page_link(12) . '/editar-cuenta/'; ?>" class="menu-sub-toggle">Editar cuenta</a></li>
                                     <li class=""><a href="<?php echo wp_logout_url( get_page_link(12)  ); ?>" class="menu-sub-toggle">Cerrar sesión</a></li>
                                   </ul>

                                   <?php

                                } else { ?>
                                    <li class="level-1"><a href="<?php echo get_page_link(12); ?>" class="btn-login azul">Login &nbsp;&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-user-login.svg" alt="User" height="20" width="20" /></a>
                                <?php } ?>
                              </li>
                              <li class="level-1"><a class="page-scroll tienda-link" href="<?php echo get_page_link(9); ?>" >Tienda en línea &nbsp;&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/shopping-bag-white.svg" width="20" alt="Cart" class="cart-icon"></a></li>




                          </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>


<?php }







 ?>
