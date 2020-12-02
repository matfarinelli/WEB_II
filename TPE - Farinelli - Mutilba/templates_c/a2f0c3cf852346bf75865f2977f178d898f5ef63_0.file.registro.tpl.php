<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 14:24:59
  from 'C:\xampp\htdocs\matias\!! WEB II\TPE - Repositorio\WEB_II\TPE - Farinelli - Mutilba\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc795abac7c30_99729285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2f0c3cf852346bf75865f2977f178d898f5ef63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\matias\\!! WEB II\\TPE - Repositorio\\WEB_II\\TPE - Farinelli - Mutilba\\templates\\registro.tpl',
      1 => 1606915494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc795abac7c30_99729285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="principal">
    <div class="encabezado">
        <p class="parrafo_encabezado">Registracion</p>
    </div>
    <article class="container">
        <div class="contacto">
            <form action="input_registro" method="POST">
                <label for="user">Nombre de usuario</label>
                <input type="text" id="nombre" name="user" value="" placeholder="">
                <label for="mail">Mail</label>
                <input type="email" id="mail" name="mail" value="">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="password" name="contrasena" value="">
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
