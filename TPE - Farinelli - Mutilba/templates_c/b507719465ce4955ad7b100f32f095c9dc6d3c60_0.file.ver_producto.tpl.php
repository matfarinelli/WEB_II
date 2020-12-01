<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-29 23:06:09
  from 'D:\xampp\htdocs\web2\TPE-parteII\WEB_II\TPE - Farinelli - Mutilba\templates\ver_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc41b5169dde7_80707727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b507719465ce4955ad7b100f32f095c9dc6d3c60' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2\\TPE-parteII\\WEB_II\\TPE - Farinelli - Mutilba\\templates\\ver_producto.tpl',
      1 => 1606687526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc41b5169dde7_80707727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="div_tabla">
  
  <form  action="agregar_comentarios" method="POST">
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
    


    
    

    <textarea name="comentarios" rows="5" cols="120">Escribe aquí tus comentarios</textarea>
     <label for="puntaje">Que puntaje le das???</label>
    <select name="puntaje" id="puntaje" form="puntajeform">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        </select>
       
         <button type="submit">Agregar</a></button></td>
    </form>

</div>
<a class="volver" href='productos'> Volver </a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
