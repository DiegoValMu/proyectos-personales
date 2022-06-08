<?php
$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "plantilla";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

/*
$con = mysqli_connect("146.83.194.142", "E10software", "E10software1137", "E10software_bd");
if (!$mysqli) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    exit;
}
*/
?>

