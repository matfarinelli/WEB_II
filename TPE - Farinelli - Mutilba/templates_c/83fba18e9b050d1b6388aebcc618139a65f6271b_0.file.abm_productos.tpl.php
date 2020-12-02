<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 23:16:40
  from 'D:\xampp\htdocs\web2\TPE parte 2\TPE - Farinelli - Mutilba\templates\abm_productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc6c0c81df7b5_28623730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83fba18e9b050d1b6388aebcc618139a65f6271b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2\\TPE parte 2\\TPE - Farinelli - Mutilba\\templates\\abm_productos.tpl',
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
function content_5fc6c0c81df7b5_28623730 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="div_tabla">
    <button>
        <a href='abm_categorias'>Categorias</a>
    </button>
    <button>
        <a href='abm_admin'>Usuarios</a>
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

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['frutos']->value, 'fruto');
$_smarty_tpl->tpl_vars['fruto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fruto']->value) {
$_smarty_tpl->tpl_vars['fruto']->do_else = false;
?>
    
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['fruto']->value->id_producto;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fruto']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fruto']->value->descripcion;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fruto']->value->precio_kilo;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fruto']->value->precio_medio;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fruto']->value->precio_cuarto;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fruto']->value->nombre_categoria;?>
</td>
                    <td><button><a href="borrar_p/<?php echo $_smarty_tpl->tpl_vars['fruto']->value->id_producto;?>
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
        <button class="butonform" type="submit"> Agregar </button>
    </form>
</div>

<div>
    <h1 class='flipE'> Editar </h1>
    <form action="actualizar_p" method="POST" class='panelE'>
        <label for="">ID</label>
        <select name="input_id">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['frutos']->value, 'fruto');
$_smarty_tpl->tpl_vars['fruto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fruto']->value) {
$_smarty_tpl->tpl_vars['fruto']->do_else = false;
?>
                <option value='<?php echo $_smarty_tpl->tpl_vars['fruto']->value->id_producto;?>
'><?php echo $_smarty_tpl->tpl_vars['fruto']->value->id_producto;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
        <button type="submit" name="editar">Actualizar</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
