<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 02:29:22
  from 'D:\xampp\htdocs\web2\TPE - Farinelli - Mutilba\templates\tabla_ordenada.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc44af2458f97_18887651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4574149a8cf4438c11a56982b8a4b4354688502' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2\\TPE - Farinelli - Mutilba\\templates\\tabla_ordenada.tpl',
      1 => 1606694812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc44af2458f97_18887651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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

<a class="volver" href='productos'> Volver </a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
