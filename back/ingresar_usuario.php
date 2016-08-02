<?php
//ingresa usuario
session_start();
include("../con/conexion.php");
//
$usuario = $_POST['userIn'];
$ncorreo = $_POST['emailIn'];
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

  mysqli_query($con, "INSERT INTO usuario (user, correo, pass) VALUES ('$usuario', '$ncorreo', '$npass2')");

  // cierra consulta de insercion a db
  mysqli_close($con);


  echo 'Usuario se ha ingresado a la db' . "\n";

  //debug para comenzar a guardar la password de manera segura
  echo ' ' . "\n";
  echo password_hash("$npass1", PASSWORD_DEFAULT)."\n";
  echo password_hash("$npass2", PASSWORD_DEFAULT)."\n";
}
