<?php
session_start();
if (isset($_SESSION['usuario'])) {

  echo '<script>location.href = "inicio.php";</script>';

} else {

  ?>
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ingersa</title>
    <link rel="stylesheet" type="text/css" href="css/sess.css">
    <script type="text/javascript" src="js/jquery.1.11.1.min.js"></script>
  </head>

  <body>

    <div class="contenedor">

      <h1>Lorem ipsum dolor sit.</h1>

      <h2>Inicia Sesión</h2>

      <div id="formulario">

        <form method="POST" action="return false" onsubmit="return false">

          <p><input type="text" id="user" value="" name="user" placeholder="Usuario" required="true"></p>
          <p><input type="password" id="pass" value="" name="pass" placeholder="*******" required="true"></p>
          <p><button onclick="validar(document.getElementById('user').value,document.getElementById('pass').value)" >Entrar</button></p>

        </form>

      </div>

      <div class="resultado">
      </div>

    </div>

    <script type="text/javascript" src="js/sess.js"></script>

  </body>

  </html>

  <?php
}
