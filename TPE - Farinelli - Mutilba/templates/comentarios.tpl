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
            {foreach from=$data item=comentario}
                <tr>
                    <td>
                        {$comentario->usuario}
                    </td>
                    <td>
                        {$comentario->comentario}
                    </td>
                    <td>
                        {$comentario->puntaje}
                    </td>
                    <td>
                        {if $smarty.session.ADMIN == 1}

                   <!--     <button><a href="borrar_comentario/{$comentario->id}">Eliminar</a></button> --> 
                        <input type="hidden" name="id_producto" value="{$producto->id_producto}">
                        <input type="hidden" name="id_comentario" value="{$comentario->id}">
                        <button type="submit">Eliminar</button>
   
                        {/if}
                    </td>
                </tr>
            {/foreach}
        <tbody>
    </table>
     </form>
</div>

<a class="volver" href='productos'> Volver </a>