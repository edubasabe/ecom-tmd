<!-- Ya te vas -->
<div class="modal fade inicio-tuhogar__modal-salir" id="modal-subscribirse" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/tamed-logo-2017.svg" height="20" alt="TAMED">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <svg width="10" height="10">
            <line x1="0" y1="0" x2="10" y2="10" style="stroke:rgb(0,0,0);stroke-width:2"></line>
            <line x1="0" y1="10" x2="10" y2="0" style="stroke:rgb(0,0,0);stroke-width:2"></line>
          </svg>
        </button>
        <h4 class="modal-title" id=""></h4>
      </div>
      <div class="modal-body">
        <h3 class="text-center">¿Ya te vas?</h3>
        <p class="lead text-center">Suscríbete para recibir ofertas, promociones y noticias.</p>
        <form class="form form-subscribe" action="https://s242003202.t.eloqua.com/e/f2" method="post" id="modal-subscribe">
          <input type="hidden" name="elqFormName" value="Gracias_Newsletter">
          <input type="hidden" name="elqSiteID" value="242003202">
          <input type="hidden" name="elqCustomerGUID" value="">
          <input type="hidden" name="elqCookieWrite" value="0">
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="firstName" placeholder="Nombre">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="emailAddress" placeholder="E-mail">
          </div>
          <input type="submit" class="btn btn-default btn-subscribe" value="Suscríbete" onclick="setCookie()">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Btn mobile contacto form -->
<div class="inicio-tuhogar__icon-contact">
  <a href="https://api.whatsapp.com/send?phone=56966782648"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon-whatsapp.svg" alt="Contacto" height="40" width="40" class="img-responsive" /></a>
</div>



    <!-- Footer -->
    <footer class="footer" style="padding-top:0;">
      <div id="footer">
        <div class="container-fluid">
          <div class="row footer__menu-bg">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
              <div class="footer__menu">
                <!-- ul class="list-unstyled">
                  <li><a href="https://tuhogarinteligente.cl/nosotros/">Nosotros</a></li>
                  <li><a href="https://www.fibaro.com/en/patents/">Patentes</a></li>
                  <li><a href="https://tuhogarinteligente.cl/politica-de-cookies/">Política de Privacidad</a></li>
                  <li><a href="https://id.cloud.fibaro.com/">FIBARO ID</a></li>
                  <li><a href="https://tuhogarinteligente.cl/contactenos/">Contacto</a></li>
                  <li><a href="https://tuhogarinteligente.cl/trabaje-con-nosotros/">Trabaja con nosotros</a></li>
                </ul -->

                <?php
                wp_nav_menu(
                  array (
                    'theme_location' => 'bottom-menu',
                    'menu_class' => 'list-unstyled',
                    'container_class' => 'footer__menu center-block'
                    )
                  )
                 ?>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="social col-xs-12 col-md-4 col-md-offset-4">
              <div class="footer__social">
                <ul class="list-unstyled">
                  <li><a href="https://www.facebook.com/fibarochile/" target="_blank"><i class="fa fa-lg center-block fa-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/fibaro_chile/" target="_blank"><i class="fa fa-lg center-block fa-instagram"></i></a></li>
                  <li><a href="https://twitter.com/fibarochile/" target="_blank"><i class="fa fa-lg center-block fa-twitter"></i></a></li>
                  <li><a href="https://www.linkedin.com/company/tamed-spa" target="_blank"><i class="fa fa-lg center-block fa-linkedin"></i></a></li>
                  <li><a href="https://www.youtube.com/channel/UCyq2iy8aEUjKmFatmGPicYg" target="_blank"><i class="fa fa-lg center-block fa-youtube-play"></i></a></li>
                </ul>
              </div>
             </div>
          </div>
        </div>
      </div>
      <hr class="divider">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <img src="<?php bloginfo(stylesheet_directory); ?>/assets/images/logo/tamed-2017-gris-sl.svg" alt="Tamed" class="img-responsive footer__copyright--img">
              <span class="footer__copyright text-center center-block">© 2017. TAMED<sup>®</sup>  SpA. Todos los derechos reservados.<br>
                Distribuidor Oficial de FIBARO<sup>®</sup> para Latinoamérica.</span>
            </div>
          </div>
        </div>
    </footer>
    <!-- <script src="<?php bloginfo(stylesheet_directory); ?>/assets/js/vendor/vendors.js"></script> -->
    <!-- <script src="<?php bloginfo(stylesheet_directory); ?>/assets/js/main.min.js"></script> -->

    <?php wp_footer(); ?>
  </body>
</html>
