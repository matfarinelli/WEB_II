<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 14:14:51
  from 'C:\xampp\htdocs\matias\!! WEB II\TPE - Repositorio\WEB_II\TPE - Farinelli - Mutilba\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7934b304596_99503944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76d854722c852bca8258f6bf14203124246aba56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\matias\\!! WEB II\\TPE - Repositorio\\WEB_II\\TPE - Farinelli - Mutilba\\templates\\header.tpl',
      1 => 1606865762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc7934b304596_99503944 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutos Secos Tandil</title>
    <link rel="icon" href="imagenes/fruta.png" type="image/png" />
    <base href="<?php echo BASE_URL;?>
">
    <link rel="stylesheet" href="css/style.css">
    <?php echo '<script'; ?>
 src="js/nav.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/tabla.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/contacto.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/comentarios.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
</head>

<body>

    <?php if ((isset($_SESSION['USUARIO']))) {?>
        <div class="boton_sesion">
            <p><?php echo $_SESSION['USUARIO'];?>
</p>
    
            <a class="" href="logout">X</a>
        </div>
    <?php }?>
    <div class="boton_sesion">
        <input id="id_session" type="hidden" value="<?php echo $_SESSION['ID_USUARIO'];?>
">
        <input id="id_admin" type="hidden" value="<?php echo $_SESSION['ADMIN'];?>
">
    </div>

    <header class="logo">
        <img class="img_logo" src="imagenes/erahielo.png" alt="erahielo">
        <h1 class="titulo_logo">Frutos Secos Online</h1>
    </header>

    <div class="menu_botones btn_menu">
        <p>MENU</p>
    </div>
    <nav class="menu">
        <div class="navigation">
            <a class="menu_botones" href="home">Home</a>
            <a class="menu_botones" href="productos">Productos</a>
            <a class="menu_botones" href="nosotros">Nosotros</a>
            <a class="menu_botones" href="contacto">Contacto</a>
            <a class="menu_botones" href="login">Login</a>

            <a class="menu_botones" href="abm">ABM</a>

        </div>
    </nav>

    <ul class="redesSociales">
        <li>
            <a href=" https://www.facebook.com/frutossecosonline/ " target="_blank "><img class="boton_redes " src="imagenes/facebook.png " alt="facebook "></a>
        </li>
        <li>
            <a href="https://www.instagram.com/frutossecosonlineok/?hl=es-la" target="_blank"><img class="boton_redes" src="imagenes/instagram.png" alt="instagram"></a>
        </li>
        <li>
            <a href=" https://api.whatsapp.com/send?phone=5491124622673&text=&source=&data=&app_absent=" target=" _blank "><img class="boton_redes " src="imagenes/whatsapp.png " alt="whatsapp "></a>
        </li>
    </ul><?php }
}
