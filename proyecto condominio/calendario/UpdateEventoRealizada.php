<?php
date_default_timezone_set("America/Santiago");
setlocale(LC_ALL,"es_ES");

include('config.php');
function codrandom(){
	$numeroran = random_int(1,100000);
	return $numeroran;
}

$idEventoRealizada= '';
$idEventoRealizada = codrandom();
                        
$idEvento         = $_REQUEST['idEvento'];

echo $idEvento;

$trabajador       = $_REQUEST['contratista'];
$empresa          = $_REQUEST['empresa'];

$f_inicio          = $_REQUEST['fecha_inicio'];
$fecha_inicio      = date('Y-m-d', strtotime($f_inicio)); 

$f_fin             = $_REQUEST['fecha_fin']; 
$seteando_f_final  = date('Y-m-d', strtotime($f_fin));  
$fecha_fin1        = strtotime($seteando_f_final."+ 0 days");
$fecha_fin         = date('Y-m-d', ($fecha_fin1));  


$UpdateMaRe = "INSERT INTO mrealizada(
     cod_man_rea,
     cod_man,
     rut_empresa,
     fecha_inicio,
     fecha_fin,
     contratista
    )
    VALUES (
        '" .$idEventoRealizada. "',
         '" .$idEvento. "',
         '" . 111 . "',
         '" .$fecha_inicio. "',
         '" .$fecha_fin. "',
         '" .$trabajador. "'
    )";
$resultado = mysqli_query($con, $UpdateMaRe);

header("Location:index.php");
?>