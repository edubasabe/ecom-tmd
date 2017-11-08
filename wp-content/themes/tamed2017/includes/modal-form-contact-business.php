<!-- Telcos y otros modal on click -->
<div id="telcos-modal" class="modal fade">
  <div class="modal-dialog" style="max-width:414px;">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom:0;">
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
        <h3 class="text-center">Comunícate con nosotros</h3>
        <p class="lead text-center">Escríbenos y nos comunicaremos contigo.</p>
        <form class="form form-subscribe" action="https://s242003202.t.eloqua.com/e/f2" method="post" id="modal-subscribe">
          <input type="hidden" name="elqFormName" value="Gracias_Newsletter">
          <input type="hidden" name="elqSiteID" value="242003202">
          <input type="hidden" name="elqCustomerGUID" value="">
          <input type="hidden" name="elqCookieWrite" value="0">
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="firstName" placeholder="Nombre" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="emailAddress" placeholder="E-mail" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" id="mensaje" name="message" placeholder="Mensaje" required></textarea>
          </div>
          <input type="submit" class="btn btn-default btn-fibaro" value="Enviar Mensaje" onclick="setCookie()">
        </form>
      </div>
    </div>
  </div>
</div>
