<?php
session_start();
include_once 'conexion.php';
//
$user = $_POST['user'];
$pass = $_POST['pass'];
//  @mysqli_query($con, "SET NAMES 'utf8'");
if ($user == null || $pass == null) {

  echo '<span>Por favor completa todos los campos</span>';

} else {

  $consulta = mysqli_query($con, "SELECT user, pass FROM usuario WHERE user='$user' AND pass='$pass'");

  if (mysqli_num_rows($consulta) > 0) {

    $_SESSION["usuario"] = $user;

    echo '<script>

    setTimeout(function() {

      location.href = "inicio.php"

    },2000);

    </script>';

    $con->close();

  } else {

    //echo $user . $pass;
    echo '<span>Usuario o Contrasena incorrectas. Intenta de Nuevo</span>';

  }

}
