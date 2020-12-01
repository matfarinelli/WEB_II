"use strict"

document.addEventListener("DOMContentLoaded", function(){




obtener_datos();

function obtener_datos() {
    fetch('api/comentarios')
        .then(function(r) {
            if (!r.ok) {
                console.log("Error");
            }
            return r.json();
        })
        .then(function(data) {
            
            console.log(data);
            "<p>"+data.comentario[0]+"</p>";
          
        })
        .catch(function(e) {
            console.log("Error");
        })

    }

   

       /* app.loading = true;
        fetch('api/tareas')
            .then(response => response.json())
            .then(comentarios => {
               // asigno las tareas que me devuelve la API
               app.tasks = comentarios; // es como el $this->smarty->assign("tasks", tareas);
               app.loading = false;
            });*/
    


















})