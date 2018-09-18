(function(){
    "use strict";
    var regalo = document.getElementById('regalo')
    document.addEventListener('DOMContentLoaded',function(){

               //campos datos de usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //campos pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        //elementos principales
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        //Extras
        var camisas = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');

        calcular.addEventListener('click',calcularMontos);
        pase_dia.addEventListener('blur',mostrarDias);
        pase_dosdias.addEventListener('blur',mostrarDias);
        pase_completo.addEventListener('blur',mostrarDias);
        nombre.addEventListener('blur',validarCampos);
        apellido.addEventListener('blur',validarCampos);
        email.addEventListener('blur',validarCampos);
        email.addEventListener('blur',validarEmail);

        function validarCampos(){
            if (this.value==''){
                errorDiv.style.display ='block';
                errorDiv.innerHTML='Este campo es requerido';
                this.style.border = '1px solid red';
                errorDiv.style.border ='1px solid red'
            }else{
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #ccc';
            }
        }

        function validarEmail(){
            if (this.value.indexOf('@')<0){
                errorDiv.style.display ='block';
                errorDiv.innerHTML='Debe contener al menos una @';
                this.style.border = '1px solid red';
                errorDiv.style.border ='1px solid red'
            }else{
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #ccc';
            }
        }

        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value === ''){
                alert('¡Debes elegir un regalo!');
            }else{
                var boletosDia = parseInt(pase_dia.value,10) || 0,
                    boletos2Dias = parseInt(pase_dosdias.value,10) || 0,
                    boletoCompleto = parseInt(pase_completo.value,10) || 0,
                    cantCamisas = parseInt(camisas.value,10) || 0,
                    cantEtiquetas = parseInt(etiquetas.value,10) || 0;
                
                    var totalPagar =(boletosDia*30) + (boletos2Dias*45) + (boletoCompleto*50)
                                    + ((cantCamisas*10)* .93) + (cantEtiquetas*2);
                    
                    var listadoProductos = [];
                    if (boletosDia >= 1){
                        listadoProductos.push(`${boletosDia} Pase(s) por dia`)
                    }
                    if (boletos2Dias >= 1){
                        listadoProductos.push(`${boletos2Dias} Pases por 2 dias`)
                    }
                    if (boletosDia >= 1){
                        listadoProductos.push(`${boletoCompleto} Pases completos`)
                    }
                    if (cantCamisas >= 1){
                        listadoProductos.push(`${cantCamisas} Camisas`)
                    }
                    if (cantEtiquetas >= 1){
                        listadoProductos.push(`${cantEtiquetas} Etiquetas`)
                    }
                    lista_productos.style.display ='block';
                    lista_productos.innerHTML = '';
                    listadoProductos.forEach((element,index,array) => lista_productos.innerHTML += element + '<br/>');
                    suma.innerHTML = `$ ${totalPagar.toFixed(2)}`

            }   
        }//fn calcularMontos

        function mostrarDias(){
            var boletosDia = parseInt(pase_dia.value,10) || 0,
            boletos2Dias = parseInt(pase_dosdias.value,10) || 0,
            boletoCompleto = parseInt(pase_completo.value,10) || 0;
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
            document.getElementById('viernes').style.display ='none';
            document.getElementById('sabado').style.display ='none';
            document.getElementById('domingo').style.display ='none';
            diasElegidos.forEach((element, index, array)=>document.getElementById(element).style.display ='block' );
        }

    });
})();