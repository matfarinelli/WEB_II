<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 23:40:29
  from 'C:\xampp\htdocs\matias\!! WEB II\TPE - Repositorio\WEB_II\TPE - Farinelli - Mutilba\templates\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc02eddd0bc66_89117644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6503a1d1b58b3ffa99ce7df835c1a22047618d08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\matias\\!! WEB II\\TPE - Repositorio\\WEB_II\\TPE - Farinelli - Mutilba\\templates\\contacto.tpl',
      1 => 1606430133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc02eddd0bc66_89117644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="principal">
        <div class="encabezado">
            <p class="parrafo_encabezado">Realiza tu pedido y nos contactaremos con vos!!</p>
        </div>
        <article class="container">
            <div class="contacto">
                <form action=" ">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value=" " placeholder="">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" value=" ">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" id="ciudad" name="ciudad" value=" ">
                    <label for="direccion">Direccion</label>
                    <input type="text" id="direccion" name="direccion" value=" ">
                    <label for="mail">Mail</label>
                    <input type="email" id="mail" name="mail" value=" ">
                    <label for="telefono">Telefono</label>
                    <input type="tel" id="telefono" name="telefono" value=" ">
                    <label for="producto ">Producto</label>
                    <input type="text" id="cantidad" name="cantidad" value=" ">
                    <label for="producto ">Cantidad</label>
                    <input type="text" id="producto" name="cantidad" value=" ">
                    <p for="envio">Tipo de envio</p>
                    <div>
                        <label for="pedido">Retiro en despacho</label>
                        <input type="radio" name="pedido" value="retiro en despacho">
                        <label for="pedido ">Entrega a domicilio</label>
                        <input type="radio" name="pedido" value="entrega a domicilio">
                    </div>
                    <label for="diaentrega">Fecha de entrega</label>
                    <input type="date" name="diaentrega" value=" ">
                    <!--el parrafo siguiente corresponde al aleatorio generado por js-->
                    <p>Codigo verificación</p>
                    <p id="captcha"></p>
                    <input type="text" id="ingresado" value=" ">
                    <button type="submit" id="btn-enviar" class="menu_botones">Enviar</button>
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
