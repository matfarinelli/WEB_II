{include file="header.tpl" }
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
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>

<a class="volver" href='productos'> Volver </a>

{include file="footer.tpl"}