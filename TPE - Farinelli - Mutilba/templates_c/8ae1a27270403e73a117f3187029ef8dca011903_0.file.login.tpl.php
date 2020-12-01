<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-29 18:24:14
  from 'D:\xampp\htdocs\web2\TPE-parteII\WEB_II\TPE - Farinelli - Mutilba\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc3d93e955381_09564128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ae1a27270403e73a117f3187029ef8dca011903' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2\\TPE-parteII\\WEB_II\\TPE - Farinelli - Mutilba\\templates\\login.tpl',
      1 => 1606670402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc3d93e955381_09564128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="principal">

    <article class="container">
        <div class="contacto">
            <div class="contacto_interior">
                <form action="verificacion" method="POST">
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="usuario" placeholder="">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" value="">
                    <button type="submit" class="menu_botones">Login</button>
                    <p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
                </form>
                 <a href='registrarse'> Registrarse  </a> 
            </div>

            <div class="imagen_contacto">
                <img class=" " src="imagenes/buck.png" alt="buck">
            </div>
        </div>
    </article>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
