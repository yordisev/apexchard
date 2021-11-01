<?php

use EasyPDO\EasyPDO;

require "libs/EasyPDO.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $bd = new EasyPDO();
    $parametros = [
        ':valor' => $_POST['numero']
    ];
    $bd->insert("INSERT INTO medidas VALUES(0, :valor, NOW())", $parametros);

    echo "Inserido valor com sucesso: " . $_POST['numero'];

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Inserir temperatura:</p>
    <form action="enter_data.php" method="post">
        <label>Valor:</label><br>
        <input type="number" name="numero" min="0" max="100">
        <hr>
        <input type="submit" value="Salvar">
    </form>

</body>
</html>