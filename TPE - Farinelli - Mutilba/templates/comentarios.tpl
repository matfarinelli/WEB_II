<div class="div_tabla" id="div_comentarios">
    <form action="eliminar_comentarios" method="POST">
        <table>
            <thead>
                <th>Usuario</th>
                <th>Comentario</th>
                <th>Puntaje</th>
                <th> </th>
            </thead>

            <tbody>
                {literal}
                    <script>
                        obtener_datos();
                    </script>
                {/literal}


            <tbody>
        </table>
    </form>
</div>

<a class="volver" href='productos'> Volver </a>