{include file="header.tpl" }

<div class="div_tabla">
    <button>
        <a href='abm'>Productos</a>
    </button>
    <button>
        <a href='abm_categorias'>Categorias</a>
    </button>
</div>


<div class="div_tabla">
    <table>
        <thead>
            <th>Usuarios</th>
            <th>Administrador</th>
        </thead>

        <tbody>
            {foreach from=$usuarios item=user}
                <tr>
                    <td>{$user->usuario}</td>
    
                    {if $user->administrador ==1 }
                        <td> SI </td>
                    {else}
                        <td> NO </td>
                    {/if}
    
                    <td><button><a href="borrar_u/{$user->id_user}">Eliminar</a></button></td>
                    <td><button><a href="editar_u/{$user->usuario}">Administrador</a></button></td>
                    <td><label class="switch"> <input type="checkbox" id="boton_adm" checked value="1"> <span class="slider round" ></span> </label></td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>


{include file="footer.tpl"}