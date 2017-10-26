jQuery(document).ready(function($) {

  //-- palabras
  var typed = new Typed('#type-word', {
  strings: ["calefacción", "cámara", "iluminación", "seguridad", "dispositivo", "termostato", "casa"],
  typeSpeed: 50,
  fadeOut:true,
  loop: false,
  onComplete: function () {
    $('.typed-cursor').fadeOut('slow');
  }
  });

  //-- Conteo de plugins
  var ciclo = 0;
  function numberAnimation() {
    $('text.c').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });

        ciclo = 1;
    });
  }

  var sectionPlugins = $('.compatibilidad__plugins');
  sectionPlugins.waypoint(function (direction) {
    if (direction == 'down') {
        if (ciclo < 1) {
          numberAnimation();
        }
      }
  }, { offset: '90%' });

});
