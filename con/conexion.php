<?php
// reset del id (auto_increment), la base de datos debe estar vacia o por lo mcrypt_enc_get_block_sizetener un
// numero menor de rows al que se intenta resetear
// ALTER TABLE tablename AUTO_INCREMENT = 1
// //////////////////////////////////////////
// error_reporting(-1);
// session_start();
//
$con = new mysqli('localhost', 'root', '', 'login');

if ($con->connect_errno) {

    echo "Fallo la conexion a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;

    exit();

}
