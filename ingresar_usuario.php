<?php
//ingresa usuario
session_start();
include_once("conexion.php");
//
$usuario = $_POST['userIn'];
$npass1 = $_POST['passIn'];
$npass2 = $_POST['repassIn'];
//

$existe = mysqli_query($con, " SELECT * from usuario where user = '$usuario' ");

if ($existe) {

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
