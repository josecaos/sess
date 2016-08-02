<?php
session_start();
if (isset($_SESSION['usuario'])) {
?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <title>inicio usuario</title>
            <link rel="stylesheet" type="text/css" href="css/sess.css">
            <script type="text/javascript" src="js/jquery.1.11.1.min.js"></script>
        </head>
        <body>
            <div class="contenedor">
                <h1>Hola "<?php echo $_SESSION['usuario'] ?>" estás adentro. </h1>
                <h2>Subtitulo Lorem ipsum dolor sit.</h2>
                <span><h3>Agrega un usuario nuevo</h3></span>
                <!--  -->
                <!-- ingresar_usuario.php -->
                <form method="POST" action="return false" onsubmit="return false">
                        <p><input type="text" id="userIn" value="" name="userIn" placeholder="Usuario" required="true"></p>
                        <p><input type="email" id="emailIn" value="" name="email" placeholder="correo@mail.com" required="true"></p>
                        <p><input type="password" id="passIn" value="" name="passIn" placeholder="Contraseña" required="true"></p>
                        <p><input type="password" id="repassIn" value="" name="repassIn" placeholder="Repite la Contrasena" required="true"></p>
                        <p>
                          <button type="submit" onclick="valida_nuevo_usuario(document.getElementById('userIn').value,document.getElementById('emailIn').value,document.getElementById('passIn').value,document.getElementById('repassIn').value)">Ingresa usuario</button>
                        </p>
                    </form>
                <a href="logout.php">Cierra tu sesion</a>
                <div class="resultado">
                </div>
            </div>
            <script type="text/javascript" src="js/sess.js"></script>
        </body>
    </html>
<?php
} else {

    echo '<script>location.href = "index.php";</script>';
}
