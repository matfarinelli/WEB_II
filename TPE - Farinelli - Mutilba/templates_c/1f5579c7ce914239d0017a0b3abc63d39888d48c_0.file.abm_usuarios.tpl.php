<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 02:42:55
  from 'D:\xampp\htdocs\web2\TPE parte 2\TPE - Farinelli - Mutilba\templates\abm_usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc6f11f6d3b24_31006713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f5579c7ce914239d0017a0b3abc63d39888d48c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2\\TPE parte 2\\TPE - Farinelli - Mutilba\\templates\\abm_usuarios.tpl',
      1 => 1606873373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc6f11f6d3b24_31006713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->usuario;?>
</td>
    
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->administrador == 1) {?>
                        <td> SI </td>
                    <?php } else { ?>
                        <td> NO </td>
                    <?php }?>
    
                    <td><button><a href="borrar_u/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
">Eliminar</a></button></td>
                    <td><button><a href="editar_u/<?php echo $_smarty_tpl->tpl_vars['user']->value->usuario;?>
">Administrador</a></button></td>
                   
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
