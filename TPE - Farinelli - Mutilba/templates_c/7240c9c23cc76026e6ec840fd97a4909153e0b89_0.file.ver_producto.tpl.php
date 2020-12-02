<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 14:14:55
  from 'C:\xampp\htdocs\matias\!! WEB II\TPE - Repositorio\WEB_II\TPE - Farinelli - Mutilba\templates\ver_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7934f9faa06_05940202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7240c9c23cc76026e6ec840fd97a4909153e0b89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\matias\\!! WEB II\\TPE - Repositorio\\WEB_II\\TPE - Farinelli - Mutilba\\templates\\ver_producto.tpl',
      1 => 1606876608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:comentarios.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc7934f9faa06_05940202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="div_tabla">

    <form action="">
  

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

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto_individual']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                    <tr>
                        <td name="id_producto" id="id_producto"><?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio_kilo;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio_medio;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio_cuarto;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_categoria;?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </tbody>
        </table>
        <div id="conteiner_comentarios">
            <div>
                <textarea id="input_comentarios" rows="5" cols="110" placeholder="escribe aqui tus comentarios"> </textarea>
            </div>
            <label for="puntaje">Que puntaje le das???</label>
            <select id="input_puntaje">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <input id="input_id_producto" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">
            <button type="button" id="agregar_comentario">Agregar</button>
        </div>
    </form>

     


</div>


<?php $_smarty_tpl->_subTemplateRender("file:comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
