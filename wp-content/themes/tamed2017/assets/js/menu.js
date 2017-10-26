// Functions
//------------------------------------------------------------------------------
function despliegaMenu() {
}
//-- Revisar si es ipad
function is_iPad() {
 return (navigator.platform.indexOf("iPad") != -1)
}

function is_iPhone() {
 return (navigator.platform.indexOf("iPhone") != -1)
}
//------------------------------------------------------------------------------
// Navbar Animacion Yamm
//------------------------------------------------------------------------------


jQuery(document).on('ready', function ($) {



//-- Padding Nav  --------------------------------------------------------------
/* Centrar los elementos del menu con el padding */
calcularPadding('.navbar-brand.navbar__logo-text');
calcularMargin('.navbar-brand .color-logo');
calcularPaddingNav('.nav.navbar-nav > li > a');


//-- jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 30
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
        $('.navbar-collapse.navbar-ex1-collapse.collapse').removeClass('in').attr('aria-expanded','false');
    });
});


// Desktop
//------------------------------------------------------------------------------

/* Darle clase open al padre del a al hacer click, para que se despliegue el menu */

$('li.dropdown > a').on('click', function (event) {
  event.preventDefault();
  $(this).parent().toggleClass('open');
  $(this).parent().children('li.dropdown').toggleClass('open')
  $(this).parent().siblings().children('ul').removeClass('collapsed').addClass('collapse');
});




/* Guardar el menu si el usuario hace click fuera */
$('body').on('click', function (e) {
  if (!$('li.dropdown.yamm-fullwidth').is(e.target)
      && $('li.dropdown.yamm-fullwidth').has(e.target).length === 0
      && $('.open').has(e.target).length === 0
  ) {
      $('li.dropdown.yamm-fullwidth').removeClass('open');

      // Remueve clase para que no queden desplegados 2 tab-content
      $('.dropdown-menu.dropdown-menu--desktop .tab-pane').removeClass('active');
      $('.dropdown-menu.dropdown-menu--desktop .nav.nav-pills > li').removeClass('active');
      $('.dropdown-menu.dropdown-menu--desktop .nav.nav-pills > li a').attr('aria-expanded','true');
  }
});


$('.dropdown-toggle').click(function () {
  /* Agrega clase active al primer li*/
  $('.open .nav.nav-pills > li:first-child').addClass('active');
  /* Agrega clase bg-white al navbar*/
  $('nav').addClass('bg-white');
  /* Agrega clase activa  sensores */
  $('#sensores').addClass('active');
  /* Agrega el atributo aria expanded */
  $('.open .nav.nav-pills > li:first-child > a').attr('aria-expanded',true);
});

/* Collapsando todos los submenus */
$('.dropdown-menu--mobile > li.dropdown > ul').addClass('collapse');

/* Eliminar el otro menu si no es mobile o iPad */
if ( checkWidth() || isTablet() || is_iPad())
{
  $('.dropdown-menu--desktop').hide();
  $('.dropdown-menu--mobile').addClass('collapse')
} else {
  $('.dropdown-menu--mobile').hide();
}




// Mobile
//------------------------------------------------------------------------------

// Darle la clase open a la segunda generacion
$('#menu-escrito li li.dropdown').on('click', function () {
  $(this).toggleClass('open');
})


  $('.dropdown-menu--mobile > li.dropdown').on('click',function () {
    if ( $(this).children('ul').hasClass('collapse') ) {
      $(this).children('ul').removeClass('collapse').addClass('collapsed');
    } else {
      $(this).children('ul').removeClass('collapsed').addClass('collapse');
    }

  });



  $('#menu-escrito > li').on('click', function () {

    // Quitarle la clase open a los hermanos
    $(this).siblings().removeClass('open');

    // Quitar clase collapse a los sobrinos
    $(this).siblings().children('ul').removeClass('collapsed').addClass('collapse');

    //Quitarle la clase open a los sobrinos
    $(this).siblings().children('ul').children('ul').removeClass('collapsed').addClass('collapse');


    if ( $(this).children('ul').hasClass('collapse') ) {
      $(this).children('ul').removeClass('collapse').addClass('collapsed');
    }else if ( !$(this).hasClass('open') ) {
      $(this).children('ul').removeClass('collapsed').addClass('collapse');
    }
  });

  //-- Mira los productos ------------------------------------------------------
  $('#mira-los-productos').on('click', function (e) {
    e.preventDefault();
    console.log('clickea');
    $('#productos').parent().toggleClass('open');
    $('#productos').parent().children('li.dropdown').toggleClass('open')
    $('#productos').parent().siblings().children('ul').removeClass('collapsed').addClass('collapse');
    $('#desktop_lista > li:first-child').toggleClass('active');
    $('#desktop_lista > li:first-child > a').attr('aria-expanded', 'true');
    $('#sensores').toggleClass('active');
  });


});
