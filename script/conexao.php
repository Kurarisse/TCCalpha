<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "bd_fernandazdmodas";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);
if ($conexao->connect_errno){
    echo "Falha ao conectar: (" . $conexao->connect_errno . ") " . $conexao->connect_error;
}

?>