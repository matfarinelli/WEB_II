<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 03:06:15
  from 'C:\xampp\htdocs\matias\!! WEB II\TPE - Repositorio\TPE - Farinelli - Mutilba\templates\tabla_general.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc5a517a6c9c9_50787355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f87f902f7231d5a61d9d04d036ceaf9c9e9f055' => 
    array (
      0 => 'C:\\xampp\\htdocs\\matias\\!! WEB II\\TPE - Repositorio\\TPE - Farinelli - Mutilba\\templates\\tabla_general.tpl',
      1 => 1606694814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc5a517a6c9c9_50787355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="div_botones">
    <form action="verProductoPorCategoria" method="POST">
    <select name="input_categoria">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
        <option value='<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
'><?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_categoria;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['frutos']->value, 'fruto');
$_smarty_tpl->tpl_vars['fruto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fruto']->value) {
$_smarty_tpl->tpl_vars['fruto']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['fruto']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fruto']->value->precio_kilo;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fruto']->value->precio_medio;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fruto']->value->precio_cuarto;?>
</td>
                    <td><button><a href="ver/<?php echo $_smarty_tpl->tpl_vars['fruto']->value->id_producto;?>
">Ver mas</a></button></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
