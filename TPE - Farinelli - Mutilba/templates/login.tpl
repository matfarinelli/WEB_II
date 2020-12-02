{include file="header.tpl"}

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
                    <p>{$mensaje}</p>
                </form>
                <a href='registrarse'> Registrarse </a>
            </div>

            <div class="imagen_contacto">
                <img class=" " src="imagenes/buck.png" alt="buck">
            </div>
        </div>
    </article>
</section>

{include file="footer.tpl"}