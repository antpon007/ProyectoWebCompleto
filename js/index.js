$(function () {

  //lettering
  $('.nombre-sitio').lettering();
  // Agregar clase a menú
  $('body.conferencias .navegacion-principal a:contains("Conferencias")').addClass('activo');
  $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
  $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');
  
  //menu fijo
  var windowHeight = $(window).height();
  var barraAltura = $('.barra').innerHeight();
  $(window).scroll(()=>{
    var scroll = $(window).scrollTop();
    if(scroll > windowHeight){
        $('.barra').addClass('fixed')
        $('body').css({'margin-top': `${barraAltura}px`})
    }else{
        $('.barra').removeClass('fixed')
        $('body').css({'margin-top': `0px`})
    }
  });
  //menu responsive
  $('.menu-movil').on('click',()=>{
    $('div.navegacion-principal').slideToggle(500);
  });

  //Programa de conferencias
  $('.programa-evento .info-curso').hide();
  $('.programa-evento .info-curso:first').show();
  $('.menu-programa a:first').addClass('activo');
  $('.menu-programa a').on('click', function () {
    $('.menu-programa a').removeClass('activo');
    $(this).addClass('activo');
    $('.programa-evento .info-curso').hide();;
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(700);
    return false;
  });

  //animaciones para los numeros
  $('.resumen-evento').waypoint(()=>{
    $('.resumen-evento li:nth-child(1) p').animateNumber({
        number: 6
      }, 6000);
      $('.resumen-evento li:nth-child(2) p').animateNumber({
        number: 15
      }, 15000);
      $('.resumen-evento li:nth-child(3) p').animateNumber({
        number: 3
      }, 3000);
      $('.resumen-evento li:nth-child(4) p').animateNumber({
        number: 9
      }, 9000);
  },{
      offset: '60%'
  });

  //cuenta regresiva

  $('.cuenta-regresiva').countdown('2018/12/10 09:00:00', (event) => {
    $('#dias').html(event.strftime('%D'));
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
  })
  if(document.getElementsByClassName('invitado-info').length>0){
    $('.invitado-info').colorbox({inline:true,width:"50%"});
  }
  if(document.getElementsByClassName('button_newsletter').length>0){
    $('.button_newsletter').colorbox({inline:true,width:"50%"});
  }
  
});
