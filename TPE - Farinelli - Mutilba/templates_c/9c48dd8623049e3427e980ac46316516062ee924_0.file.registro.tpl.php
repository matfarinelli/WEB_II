<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 02:44:26
  from 'D:\xampp\htdocs\web2\TPE - Farinelli - Mutilba\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc44e7a4b0e41_73946380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c48dd8623049e3427e980ac46316516062ee924' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2\\TPE - Farinelli - Mutilba\\templates\\registro.tpl',
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
function content_5fc44e7a4b0e41_73946380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="principal">
    <div class="encabezado">
        <p class="parrafo_encabezado">Registracion</p>
    </div>
    <article class="container">
        <div class="contacto">
            <form action="input_registro" method = "POST">
                <label for="user">Nombre de usuario</label>
                <input type="text" id="nombre" name="user" value="" placeholder="">
                <label for="mail">Mail</label>
                <input type="email" id="mail" name="mail" value="">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="password" name="contrasena" value="">
                <!-- Solo para controlar -->
                <label for="contrasena_r">Repita contraseña</label>
                <input type="password" id="password_r" name="contrasena_r" value="">

                <button type="submit" id="btn-enviar" class="menu_botones">Registrarse</button>
                <p id="resultado-pedido"></p>
            </form>
        </div>
        <div class="imagen_contacto">
            <img class=" " src="imagenes/perezoso.png" alt="perezoso">
        </div>
    </article>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
