{include file="header.tpl" }

<div class="div_tabla">
    <button>
        <a href='abm'>Productos</a>
    </button>
    <button>
        <a href='abm_admin'>Usuarios</a>
    </button>
</div>

<div class="div_tabla">
    <table>
        <thead>
            <th>ID</th>
            <th>Categoria</th>
        </thead>

        <tbody>
            {foreach from=$categorias item=cat}
                <tr>
                    <td>{$cat->id_categoria}</td>
                    <td>{$cat->nombre_categoria}</td>
                    <td><button><a href="borrar_c/{$cat->id_categoria}">Eliminar</a></button></td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>

<div>
    <h1 class='flipA'> Agregar </h1>
    <form action="add_c" method="POST" class='panelA'>
        <label for="">Categoria</label>
        <input type="text" name="input_categoria">
        <button type="submit"> Agregar </button>
    </form>
</div>

<div>
    <h1 class='flipE'> Editar </h1>
    <form action="actualizar_c" method="POST" class='panelE'>
        <label for="">ID</label>
        <select name="input_id">
            {foreach from=$categorias item=cat}
                <option value='{$cat->id_categoria}'>{$cat->id_categoria}</option>
            {/foreach}
        </select>
        <label for="">Categoria</label>
        <input type="text" name="input_categoria">
        <button type="submit" name="editar">Actualizar</button>
    </form>
</div>

{include file="footer.tpl"}