<?php
//ingresa usuario
session_start();
include("../con/conexion.php");
//
$usuario = $_POST['userIn'];
$npass1 = $_POST['passIn'];
$npass2 = $_POST['repassIn'];
//

//verifica si existe el usuario
$existe = mysqli_query($con, "SELECT user FROM usuario WHERE user = '$usuario'");

// convierte los datos del objeto en array
$nusuario = $existe->fetch_assoc();

if ($nusuario['user'] === $usuario) {

  echo '¡El usuario ya existe! utiliza otro';
  // cierra consulta de comparacion
  $existe->close();

} elseif (!isset($nusuario)) {

  // cierra consulta de comparacion
  $existe->close();

  // $hashed = sha1($npass2.$nusuario);
  // print_r($hashed);



  mysqli_query($con, "INSERT INTO usuario (user, pass) VALUES ('$usuario','$npass2')");

  // cierra consulta de insercion a db
  mysqli_close($con);

  echo password_hash("$npass2", PASSWORD_DEFAULT)."\n";

  echo 'Usuario se ha ingresado a la db' . "\n";

  echo password_hash("$npass2", PASSWORD_DEFAULT)."\n";
}
