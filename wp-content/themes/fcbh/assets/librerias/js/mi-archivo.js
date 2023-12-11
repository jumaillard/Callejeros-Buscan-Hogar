jQuery(document).ready(function ($) {
  $('.sliders_group').slick({
    dots: true,
  });
  $('#aparecer-formulario').on('click', function(){
    $('#formulario-container').toggle();
    $('#formulario-container').css('transition', '.3s');
  });
});