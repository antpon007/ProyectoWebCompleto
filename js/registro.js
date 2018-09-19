$(function(){
    "use strict";
    var regalo = $('#regalo')
   
        //campos datos de usuario
        var nombre = $('#nombre');
        var apellido = $('#apellido');
        var email = $('#email');
        //campos pases
        var pase_dia = $('#pase_dia');
        var pase_dosdias = $('#pase_dosdias');
        var pase_completo = $('#pase_completo');

        //elementos principalesF
        var calcular = $('#calcular');
        var errorDiv = $('#error');
        var botonRegistro = $('#btnRegistro');
        var lista_productos = $('#lista-productos');
        var suma = $('#suma-total');

        //Extras
        var camisas = $('#camisa_evento');
        var etiquetas = $('#etiquetas');

        calcular.on('click',calcularMontos);
        pase_dia.on('blur',mostrarDias);
        pase_dosdias.on('blur',mostrarDias);
        pase_completo.on('blur',mostrarDias);
        nombre.on('blur',validarCampos);
        apellido.on('blur',validarCampos);
        email.on('blur',validarCampos);
        email.on('blur',validarEmail);

        function validarCampos(){
            if ($(this).val()==''){
                errorDiv.show().attr('style','display: block');
                errorDiv.html('Este campo es requerido');
                $(this).css('border' ,'1px solid red');
                errorDiv.css('border' ,'1px solid red');
            }else{
                errorDiv.hide();
                $(this).css('border' ,'1px solid #ccc');
            }
        }

        function validarEmail(){
            if ($(this).val().indexOf('@')<0){
                errorDiv.show().attr('style','display: block');
                errorDiv.html('Debe contener al menos una @');
                $(this).css('border' ,'1px solid red');
                errorDiv.css('border' ,'1px solid red');
            }else{
                errorDiv.hide();
                $(this).css('border' ,'1px solid #ccc');
            }
        }

        function calcularMontos(event){
            event.preventDefault();
            if(regalo.val() === ''){
                alert('¡Debes elegir un regalo!');
            }else{
                var boletosDia = parseInt(pase_dia.val(),10) || 0,
                    boletos2Dias = parseInt(pase_dosdias.val(),10) || 0,
                    boletoCompleto = parseInt(pase_completo.val(),10) || 0,
                    cantCamisas = parseInt(camisas.val(),10) || 0,
                    cantEtiquetas = parseInt(etiquetas.val(),10) || 0;
                
                    var totalPagar =(boletosDia*30) + (boletos2Dias*45) + (boletoCompleto*50)
                                    + ((cantCamisas*10)* .93) + (cantEtiquetas*2);
                    
                    var listadoProductos = [];
                    if (boletosDia >= 1){
                        listadoProductos.push(`${boletosDia} Pases por dia`)
                    }
                    if (boletos2Dias >= 1){
                        listadoProductos.push(`${boletos2Dias} Pases por 2 dias`)
                    }
                    if (boletoCompleto >= 1){
                        listadoProductos.push(`${boletoCompleto} Pases completos`)
                    }
                    if (cantCamisas >= 1){
                        listadoProductos.push(`${cantCamisas} Camisas`)
                    }
                    if (cantEtiquetas >= 1){
                        listadoProductos.push(`${cantEtiquetas} Etiquetas`)
                    }
                    lista_productos.show().attr('style','display: block');
                    lista_productos.val('');
                    listadoProductos.forEach((element,index,array) => lista_productos.html( lista_productos.html() +element + '<br/>'));
                    suma.html(`$ ${totalPagar.toFixed(2)}`);

            }   
        }//fn calcularMontos

        function mostrarDias(){
            var boletosDia = parseInt(pase_dia.val(),10) || 0,
            boletos2Dias = parseInt(pase_dosdias.val(),10) || 0,
            boletoCompleto = parseInt(pase_completo.val(),10) || 0;
            let diasElegidos = [];

            if (boletosDia>0){
                diasElegidos.push('viernes');
            }
            if (boletos2Dias>0){
                diasElegidos.push('viernes','sabado');
            }
            if (boletoCompleto>0){
                diasElegidos.push('viernes','sabado','domingo');
            }
            $('#viernes').hide();
            $('#sabado').hide();
            $('#domingo').hide();
            diasElegidos.forEach((element, index, array)=>$(`#${element}`).show().attr('style','display: block') );
        }

});