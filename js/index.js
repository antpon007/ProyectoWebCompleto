$(function(){
    //$('.programa-evento .info-curso').hide();
    $('.programa-evento .info-curso:first').show();
    $('.programa-evento .info-curso:first').addClass('activo');
    $('.menu-programa a').on('click',function(){
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.programa-evento .info-curso').hide();;
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(700);
        return false;
    });
});