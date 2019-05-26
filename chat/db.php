<?php

$servidor = "localhost";
$usuario= "id5879577_skaryxd";
$password = "asd02322";
$base_datos = "id5879577_unc3ns0r3dv2";



$conexion = new mysqli($servidor, $usuario, $password, $base_datos);


function formatearFecha($fecha){
	return date('g:i a', strtotime($fecha));
}


?>