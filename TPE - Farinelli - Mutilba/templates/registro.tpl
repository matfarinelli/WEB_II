{include file="header.tpl" }

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

{include file="footer.tpl"}