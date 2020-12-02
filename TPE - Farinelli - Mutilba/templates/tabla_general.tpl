{include file="header.tpl" }

<div class="div_botones">
    <form action="verProductoPorCategoria" method="POST">
        <select name="input_categoria">
            {foreach from=$categorias item=cat}
                <option value='{$cat->id_categoria}'>{$cat->nombre_categoria}</option>
            {/foreach}
        </select>
        <button type="submit"> Ver categoria seleccionada</button>
        <button><a href='verCategoria'>Ver todas las Categorias </a></button>
    </form>
</div>

<div class="div_tabla">
    <table>
        <thead>
            <th>Producto</th>
            <th>Precio 1kg</th>
            <th>Precio 500g</th>
            <th>Precio 250g</th>
        </thead>

        <tbody>
            {foreach from=$frutos item=fruto}
                <tr>
                    <td>{$fruto->nombre}</td>
                    <td>{$fruto->precio_kilo}</td>
                    <td>{$fruto->precio_medio}</td>
                    <td>{$fruto->precio_cuarto}</td>
                    <td><button><a href="ver/{$fruto->id_producto}">Ver mas</a></button></td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>


<div class="contacto">
    <form action="filtrar" method="GET">
        <label for="">Producto</label>
        <input type="text" name="input_filtro_producto">
        <label for="">Descripcion</label>
        <input type="text" name="input_filtro_descripcion">
        <label for="">Precio por peso</label>
        <input type="text" name="input_filtro_precio">

        <select name="input_filtro_peso">
            <option value="precio_kilo">Precio kilo</option>
            <option value="precio_medio">Precio medio kilo</option>
            <option value="precio_cuarto">Precio cuarto</option>
        </select>

        <button type="submit"> Filtrar</button>
    </form>
</div>


{include file="footer.tpl"}