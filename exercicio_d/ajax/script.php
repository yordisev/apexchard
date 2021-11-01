<?php
$post = json_decode(file_get_contents("php://input", true));
switch ($post->trimestre) {
    case '1':
        $dados = [20, 30, 40];
        break;
    case '2':
        $dados = [30, 20, 10];
        break;
    case '3':
        $dados = [30, 50, 60];
        break;
    case '4':
        $dados = [20, 30, 20];
        break;
}
echo json_encode($dados);