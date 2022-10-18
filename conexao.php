<?php

    $host = 'Localhost';
    $user = 'root';
    $password = '';
    $database = 'fernandaalfa';

    $conexao = new mysqli($host,$user,$password,$database);

      if($conexao->connect_errno){
          echo "Erro";
      }else{
          echo "Conexão efetuada com sucesso!";
      }
?>