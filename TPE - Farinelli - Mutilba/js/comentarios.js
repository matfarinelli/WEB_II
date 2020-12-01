"use strict";

document.addEventListener("DOMContentLoaded", function() {
    const url = "api/comentarios";
    let tabla = document.querySelector(".body_tabla");

    let btn_add_comentario = document.querySelector("#agregar_comentario");
    btn_add_comentario.addEventListener("click", enviar_comentario);

    obtener_datos();

    function obtener_datos() {
        fetch(url, {
                method: "GET"
            })
            .then(function(r) {
                if (!r.ok) {
                    console.log("Error");
                }
                return r.json();
            })
            .then(function(comentarios) {
                tabla.innerHTML = "";
                for (let comentario of comentarios) {
                    tabla.insertRow(-1).innerHTML += `<td>${comentario.comentario}</td><td>${comentario.puntaje}</td> <td> <button type="button" id=${comentario.id} class="btn_eliminar"> Eliminar  </button> </td>`;
                }
                obtener_id_botones();

            })
            .catch(function(e) {
                console.log("Error");
            });
    }

    function obtener_id_botones() {
        let botones_eliminar = document.querySelectorAll(".btn_eliminar");

        for (let i = 0; i < botones_eliminar.length; i++) {
            botones_eliminar[i].addEventListener("click", function(e) {
                let comentario_a_eliminar = this;
                let id_comentario = comentario_a_eliminar.id;

                borrar_datos(id_comentario);
            });
        }
    }

    function borrar_datos(id_comentario) {
        let id = id_comentario;

        fetch(url + "/" + id, {
                method: "DELETE",
                mode: "cors"
            })
            .then(function(r) {
                if (!r.ok) {
                    console.log("Error");
                }
                return r.json;
            })
            .then(function(datos) {
                console.log("El comentario fue borrado exitosamente");
                obtener_datos();
            })
            .catch(function(e) {
                console.log("Error");
            });
    }

    function enviar_comentario() {
        let comentario = document.querySelector("#input_comentarios").value;
        let puntaje = document.querySelector("#input_puntaje").value;
        let id_user = document.querySelector("#id_session").value;
        let id_producto = document.querySelector("#input_id_producto").value;

        let comentarioNuevo = {
            comentario: comentario,
            puntaje: puntaje,
            id_user: id_user,
            id_producto: id_producto
        };

        if ((comentario.length === 0)) {
            alert("Escriba un comentario");
            return;
        }

        //alert(comentarioNuevo.id_user);

        fetch(url, {
                method: "POST",

                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(comentarioNuevo)
            })
            .then(function(r) {
                if (!r.ok) {
                    console.log("Error");
                }
                return r.json;
            })
            .then(function(datos) {
                console.log("El comentario fue cargado correctamente");
                obtener_datos();
            })
            .catch(function(e) {
                console.log("Error");
            });
    }
});