<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 01:41:40
  from 'D:\xampp\htdocs\web2\TPE - Farinelli - Mutilba\templates\abm_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc43fc475acf2_14298040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '485b8f70be266f2c1048a3c6179dcb95687c2f4e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2\\TPE - Farinelli - Mutilba\\templates\\abm_categorias.tpl',
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
function content_5fc43fc475acf2_14298040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                    <td><button><a href="borrar_c/<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
">Eliminar</a></button></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                <option value='<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
'><?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <label for="">Categoria</label>
        <input type="text" name="input_categoria">
        <button type="submit" name="editar">Actualizar</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
