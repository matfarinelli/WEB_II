{include file="header.tpl" }
<div class="div_tabla">
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
                    <td>{$producto->id_producto}</td>
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
</div>

<a class="volver" href='productos'> Volver </a>

{include file="footer.tpl"}