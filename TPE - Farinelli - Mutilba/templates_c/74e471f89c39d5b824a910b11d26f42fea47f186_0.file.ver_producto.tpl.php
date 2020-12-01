<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 02:41:33
  from 'D:\xampp\htdocs\web2\TPE - Farinelli - Mutilba\templates\ver_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc44dcd282938_76902075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74e471f89c39d5b824a910b11d26f42fea47f186' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2\\TPE - Farinelli - Mutilba\\templates\\ver_producto.tpl',
      1 => 1606700456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc44dcd282938_76902075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="div_tabla">
   
    <form action="agregar_comentarios" method="POST">
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
                        <td name="id_producto"><?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
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

        <div><textarea name="comentarios" rows="5" cols="110">Escribe aquí tus comentarios</textarea></div>
        <label for="puntaje">Que puntaje le das???</label>
        <select name='puntaje'>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="hidden" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">
        <button type="submit">Agregar</button>
    </form>


</div>


<div class="div_tabla">
    <form action="eliminar_comentarios" method="POST">
    <table>
        <thead>
            <th>Usuario</th>
            <th>Comentario</th>
            <th>Puntaje</th>
            <th> </th>
        </thead>

        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'comentario');
$_smarty_tpl->tpl_vars['comentario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->value) {
$_smarty_tpl->tpl_vars['comentario']->do_else = false;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['comentario']->value->usuario;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['comentario']->value->comentario;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['comentario']->value->puntaje;?>

                    </td>
                    <td>
                        <?php if ($_SESSION['ADMIN'] == 1) {?>

                   <!--     <button><a href="borrar_comentario/<?php echo $_smarty_tpl->tpl_vars['comentario']->value->id;?>
">Eliminar</a></button> --> 
                        <input type="hidden" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">
                        <input type="hidden" name="id_comentario" value="<?php echo $_smarty_tpl->tpl_vars['comentario']->value->id;?>
">
                        <button type="submit">Eliminar</button>
   
                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <tbody>
    </table>
     </form>
</div>

<a class="volver" href='productos'> Volver </a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
