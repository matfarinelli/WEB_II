{include file="header.tpl" }

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

{include file="footer.tpl"}