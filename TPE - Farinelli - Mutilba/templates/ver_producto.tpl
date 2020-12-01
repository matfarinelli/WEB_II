{include file="header.tpl" }
<div class="div_tabla">
   
    <form action="agregar_comentarios" method="POST">
        <table>

            <thead>
                <th>ID</th>
                <th>Producto</th>
                <th>Descripcion</th>
                <th>Precio 1kg</th>
                <th>Precio 500g</th>
                <th>Precio 250g</th>
                <th>Categoria</th>
            </thead>

            <tbody>

                {foreach from=$producto_individual item=producto}
                    <tr>
                        <td name="id_producto">{$producto->id_producto}</td>
                        <td>{$producto->nombre}</td>
                        <td>{$producto->descripcion}</td>
                        <td>{$producto->precio_kilo}</td>
                        <td>{$producto->precio_medio}</td>
                        <td>{$producto->precio_cuarto}</td>
                        <td>{$producto->nombre_categoria}</td>
                    </tr>
                {/foreach}

            </tbody>
        </table>

        <div><textarea name="comentarios" rows="5" cols="110">Escribe aquí tus comentarios</textarea></div>
        <label for="puntaje">Que puntaje le das???</label>
        <select name='puntaje'>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="hidden" name="id_producto" value="{$producto->id_producto}">
        <button type="submit">Agregar</button>
    </form>


</div>


{include file="comentarios.tpl"}

{include file="footer.tpl"}