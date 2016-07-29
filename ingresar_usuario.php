<?php
//ingresa usuario
session_start();
include_once("conexion.php");
//
$usuario = $_POST['userIn'];
$npass1 = $_POST['passIn'];
$npass2 = $_POST['repassIn'];
//

//verifica si existe el usuario
$existe = mysqli_query($con, "SELECT user FROM usuario WHERE user = '$usuario'");

mysqli_close($con);
// saca los datos en array
$nusuario = $existe->fetch_assoc();


if (!$nusuario['user'] === $usuario) {

  mysqli_query($con, "INSERT INTO usuario (user, pass) VALUES ('$usuario','$npass2')");

  mysqli_close($con);

  echo 'Usuario se ha ingresado a la db ';

} else {

  echo '¡El usuario ya existe! utiliza otro';


}
//debug
// $pswd =  $npass2;//sha1($usuario, $npass2);
// echo "yo soy de php: " . $usuario . $npass1 . $npass1;
// print_r( $con );
//
///fin debug
