<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 00:49:38
  from 'D:\xampp\htdocs\web2\TPE parte 2\TPE - Farinelli - Mutilba\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc6d692135501_62506042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b10943a513419f5ff22d284d12b7d9089626fbe' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2\\TPE parte 2\\TPE - Farinelli - Mutilba\\templates\\categorias.tpl',
      1 => 1606860645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc6d692135501_62506042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="div_tabla">
    <table>

        <thead>
            <th>ID</th>
            <th>Categoria</th>
        </thead>

        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_categoria;?>
</td>
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
