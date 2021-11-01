<?php

use EasyPDO\EasyPDO;

include "libs/EasyPDO.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $bd = new EasyPDO();
    $params = [
        ':valor' => $_POST['numero']
    ];
    $bd->insert("INSERT INTO medidas VALUES(0,:valor, NOW())", $params);

    echo 'Valor inserido com sucesso <strong>'.$_POST['numero'].'</strong>';
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
    
    <p>Inserir um valor:</p>
    <form action="enter_data.php" method="post">
        <label>Valor:</label><br>
        <input type="number" name="numero" min="0" max="100">
        <hr>
        <input type="submit" value="Salvar">
    </form>

</body>
</html>