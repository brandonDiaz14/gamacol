<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamacol s.a.s inc ingreso</title>
    <script src="https://kit.fontawesome.com/95fcbf2b2f.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/ingreso estilos.css">
</head>



<body>
    <header>
        <figure> <img src="Logo de la tienda.jpg"></figure>
        <section id="slogan"><h3>Lo mejor al mejor el precio</h3></section>



        <section id="redes-sociales">Siguenos en:
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
        </section>


        <!--Formulario de Login y registro-->
        <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="dbusuarios/controller_login.php" class="formulario__login" method="POST">
                        <input type="text" placeholder="nombre" name="nombre">
                        <input type="password" placeholder="Contraseña" name="contraseña">
                        <input type="hidden" value="entrar" name="entrar">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="dbusuarios/controller_login.php" method="POST" class="formulario__register">
                        <input type="text" placeholder="Nombre completo" name="nombre">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="clave">
                        <input type="hidden" value="registrar" name="registrar">
                        <button>Regístrarse</button>
                    </form>
                    </main> 
                    
                    
            
                       
                                
</form>
            </div>

    </header><hr><hr>



    <nav>
        <ol><li>
            <a href="#">Inicio</a>
            <a href="#">Categorias</a>
            <a href="#">Compras</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
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

        <section id="cuadro-ingreso">
            <h2><b><tittle>Bienvenido al portal de Ingreso</tittle></b></h2>
            <form action="" method="post">
                <div id="datos-ingreso"><br><br>

                  <h4>Ingrese su usuario de E-MAIL:</h4><input type="text" name="correo E-MAIL" placeholder="Digite su correo electronico"  required=""><br><br>

                  <h4>Ingrese su contraseña:</h4><input type="password" name="Contraseña" placeholder="Digite su Contraseña" required=""><br><br>

                  <a href="#"><h4>¿Ha olvidado su contraseña?</h4><br><br></a>
                  <h4><input type="button" style="height:10px;width:10px;margin-right:5px">Recordar mi ingreso</h4><br><br>
                </div>
            </form>
            
              <a href="Gamacolregistro.php">
              <button id="zorrix"><h6>Quiero registrarme</h6></button></a>

              <a href="Gamacolingreso.php">
              <button id="zorrix"><h6>CANCELAR</h6></button></a>
           
              <a href="Gamacolingreso.php"><button id="zorrix"><h6>INGRESAR</h6></button></a>
           
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







</body>


</html>