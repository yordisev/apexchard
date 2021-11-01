<?php

use EasyPDO\EasyPDO;
require "../libs/EasyPDO.php";
$bd = new EasyPDO();
$resultados = $bd->select("SELECT * FROM (SELECT * FROM medidas ORDER BY created_at DESC LIMIT 10) a ORDER BY created_at");
$dados = [];

if($bd->affectedRows < 10){

    // cria um array com um número de dados necessários para completar 10 valores
    $dados = array_fill(0,10 - $bd->affectedRows,0);
}

// criar o array de dados
foreach($resultados as $resultado){
    $dados[] = intval($resultado->valor);
}

echo json_encode($dados);