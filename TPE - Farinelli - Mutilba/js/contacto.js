"use strict"

document.addEventListener("DOMContentLoaded", function() {

    let aleatorio = Math.floor(Math.random() * 10000);

    let captcha = document.querySelector("#captcha");
    captcha.innerHTML = aleatorio;


    let btn = document.querySelector("#btn-enviar");
    btn.addEventListener("click", validar);


    function validar(event) {
        event.preventDefault();
        let nro_validar = document.querySelector("#ingresado").value;

        let mensaje_enviado = "Su pedido ha sido procesado"
        let mensaje_no_enviado = "Verifique codigo"

        if (aleatorio == nro_validar) {
            document.querySelector("#resultado-pedido").innerHTML = mensaje_enviado;
        } else { document.querySelector("#resultado-pedido").innerHTML = mensaje_no_enviado; };

    }





})