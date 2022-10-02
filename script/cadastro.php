<?php
    include("conexao.php");

    $Nome = $_POST['firstname'];
    $Sobrenome = $_POST['lastname'];
    $Email = $_POST['email'];
    $Telefone = $_POST['celular'];
    $Logradouro = $_POST['logradouro'];
    $CPF = $_POST['cpf'];
    $Senha = $_POST['senha'];

    $sql = "INSERT INTO cliente(firstname, lastname, email, celular, logradouro, cpf, senha)
        VALUES ('$Nome', '$Sobrenome', '$Email', '$Celular', '$Logradouro', '$CPF', '$Senha')";

        if(mysqli_query($conexao, $sql)){
            echo "Usuário cadastrado com sucesso";
        }else{
            echo "Erro".mysqli_connect_error($conexao);
        }
        mysqli_close($conexao);
?>