<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutos Secos Tandil</title>
    <link rel="icon" href="imagenes/fruta.png" type="image/png" />
    <base href="{BASE_URL}">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/nav.js" type="text/javascript"></script>
    <script src="js/tabla.js" type="text/javascript"></script>
    <script src="js/contacto.js" type="text/javascript"></script>
    <script src="js/comentarios.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

</head>

<body>

    {if isset($smarty.session.USUARIO)}
        <div class="boton_sesion">
            <p>{$smarty.session.USUARIO}</p>
            <a class="" href="logout">X</a>
        </div>
    {/if}

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
    </ul>