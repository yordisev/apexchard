<?php
$get = json_decode(file_get_contents("php://input", true));
require_once "../config/database.php";

$query = mysqli_query($mysqli, "CALL pr_ver_graficos()");

$arreglo = array();
while ($consultanueva = mysqli_fetch_array($query) ){
	$arreglo[] = $consultanueva;
}


echo json_encode($arreglo);