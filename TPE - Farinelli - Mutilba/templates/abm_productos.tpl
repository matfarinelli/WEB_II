{include file="header.tpl" }

<div class="div_tabla">
    <button>
        <a href='abm_categorias'>Categorias</a>
    </button>

</div>
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

            {foreach from=$frutos item=fruto}
    
                <tr>
                    <td>{$fruto->id_producto}</td>
                    <td>{$fruto->nombre}</td>
                    <td>{$fruto->descripcion}</td>
                    <td>{$fruto->precio_kilo}</td>
                    <td>{$fruto->precio_medio}</td>
                    <td>{$fruto->precio_cuarto}</td>
                    <td>{$fruto->nombre_categoria}</td>
                    <td><button><a href="borrar_p/{$fruto->id_producto}">Eliminar</a></button></td>
                </tr>
    
            {/foreach}

        </tbody>
    </table>
</div>

<div>
    <h1 class='flipA'> Agregar </h1>
    <form action="add_p" method="POST" class='panelA'>
        <label for="">Producto</label>
        <input type="text" name="input_producto">
        <label for="">Precio 1kg</label>
        <input type="number" name="input_precio_1kg">
        <label for="">Precio 500g</label>
        <input type="number" name="input_precio_500g">
        <label for="">Precio 250g</label>
        <input type="number" name="input_precio_250g">
        <label for="">Categoria</label>
        <select name="input_categoria">
            {foreach from=$categorias item=cat}
                <option value='{$cat->id_categoria}'>{$cat->nombre_categoria}</option>
            {/foreach}
        </select>
        <button class="butonform" type="submit"> Agregar </button>
    </form>
</div>

<div>
    <h1 class='flipE'> Editar </h1>
    <form action="actualizar_p" method="POST" class='panelE'>
        <label for="">ID</label>
        <select name="input_id">
            {foreach from=$frutos item=fruto}
                <option value='{$fruto->id_producto}'>{$fruto->id_producto}</option>
            {/foreach}

        </select>

        <label for="">Producto</label>
        <input type="text" name="input_producto">
        <label for="">Descripcion</label>
        <input type="text" name="input_descripcion">
        <label for="">Precio 1kg</label>
        <input type="number" name="input_precio_1kg">
        <label for="">Precio 500g</label>
        <input type="number" name="input_precio_500g">
        <label for="">Precio 250g</label>
        <input type="number" name="input_precio_250g">
        <label for="">Categoria</label>
        <select name="input_categoria">
            {foreach from=$categorias item=cat}
                <option value='{$cat->id_categoria}'>{$cat->nombre_categoria}</option>
            {/foreach}
        </select>
        <button type="submit" name="editar">Actualizar</button>
    </form>
</div>

{include file="footer.tpl"}