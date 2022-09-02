<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamacol s.a.s inc registro</title>
    <script src="https://kit.fontawesome.com/95fcbf2b2f.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/registro estilos.css">
</head>



<body>
    <header>
        <figure> <img src="Logo de la tienda.jpg"></figure>
        <section id="slogan"><h2>Lo mejor al mejor el precio</h2></section>



        <section id="redes-sociales">Siguenos en:
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
        </section>


        <section id="ingreso">
           <a href="http://localhost/Gamacol%20sas%20inc/Gamacol%20ingreso.php">
           <button><i class="fa-solid fa-arrow-right-from-bracket"></i>Ingresar</button></a>
        
           <a href="http://localhost/Gamacol%20sas%20inc/Gamacol%20registro.php"><button><i class="fa-solid fa-arrow-right-from-bracket"></i>Registrarse</button></a>
        </section>
    </header><hr><hr>



    <nav>
        <ol><li>
            <a href="">Inicio</a>
            <a href="">Categorias</a>
            <a href="">Compras</a>
            <a href="">Servicios</a>
            <a href="">Contacto</a>
            <a href="#">Ayuda</a>
        </li></ol>

    </nav>


    <main>
        <div id="menu"><b>¿Que estas buscando?</b>
         
          <ul><li>
          <a href="http://localhost/Gamacol%20sas%20inc/producto%20aseo%20personal.php">Aseo personal</a><hr>

         <a href="http://localhost/Gamacol%20sas%20inc/producto%20aseo%20para%20el%20hogar.php">Aseo para el hogar</a><hr>

         <a href="http://localhost/Gamacol%20sas%20inc/producto%20bioseguridad.php">Productos de bioseguridad</a><hr>

         <a href="http://localhost/Gamacol%20sas%20inc/producto%20implementos.php">Implementos</a>
          </li></ul>
        </div>

        <section id="cuadro-registro"><h2><b><tittle>Bienvenido al portal de Registro</tittle></b></h2>

            <form action="conexion.php" method="POST">

                <div id="datos-registro"><br><br>
                 <h5>Nombres:</h5><input type="text" name="nombre" placeholder="Digite su nombre completo"><br><br>

                 <h5>Apellidos:</h5><input type="text" name="apellido" placeholder="Digite su apellido completo"><br><br>

                 <h5>Tipo de E-mail:</h5><input type="text" name="correo" placeholder="Digite su correo" required=""><br><br>

                 <h5>Nueva contraseña:</h5><input type="password" name="contraseña" placeholder="Digite su contraseña" required=""><br><br>

                 <h5>Confirmar contraseña:</h5><input type="password" name="confirmar contraseña" placeholder="confirmar contraseña" required=""><br><br>

                 <h5>Correo electronico secundario:</h5><input type="text" name="correo secundario" placeholder="Digite correo electronico secundario"  required=""><br><br>
                </div>
               <a href="http://localhost/Gamacol%20sas%20inc/Gamacol%20registro.php">
               <button id="zorrix"><h6>BORRAR DATOS</h6></button></a>

               <a href="http://localhost/Gamacol%20sas%20inc/Gamacol%20registro.php">
               <button id="zorrix"><h6>CANCELAR</h6></button></a>

               <a href="http://localhost/Gamacol%20sas%20inc/Gamacol%20ingreso.php">
               <button id="zorrix"><h6>INGRESAR</h6></button></a>
            </form>
        </section>


    </main><hr><hr>


    <footer>
        <aside id="gamacol">
            <img src="Logo de la tienda.jpg" style="height:100px;width:250px;">
            <h4>No. Contácto: 3009079007</h4>
            <h4>Dirección: Av.cra 30#17b-25sur</h4>
            <h4>efpinilla1@misena.edu.co</h4>
            <h4>macardenas302@misena.edu.co</h4>
        </aside>



        <aside id="info">
            <h5><b>Información</b></h5><br><br>
                <p>1. Acerca de GAMACOL</p><br>
                <p>2. Preguntas frecuentes</p><br>
                <p>3. Nuestro P.Q.R</p><br>
                <p>4. Contáctanos</p><br>
            
        </aside>




        <aside id="pago-envio">
            <h5><b>Métodos de pago y envió</b></h5><br><br>
                <p>1. Servicio de domicilio</p><br>
                <p>2. Estado del pedido</p><br>
                <p>3. Métodos de pago</p><br>
                <p>4. Tiempos de entrega</p><br>
            
        </aside>



        <aside id="cuenta">
            <h5><b>Mi cuenta</b></h5><br><br>
                <p>1. Crear cuenta</p><br>
                <p>2. Ofertas de productos</p><br>
                <p>3. Ver carrito de compras</p><br>
                <p>4. Devolución de pedido</p><br>
        </aside>
    </footer><hr><hr>




<buttom>INGRESAR</buttom>


</body>


</html>