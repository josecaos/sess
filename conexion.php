<?php
// error_reporting(-1);
// session_start();
//
$con = new mysqli('localhost', 'root', '', 'login');

if ($con->connect_errno) {

    echo "Fallo la conexion a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;

    exit();

}
