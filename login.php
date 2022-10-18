<?php

    print_r($_REQUEST);

     session_start();
     if(isset($_POST['submit_login']) && !empty($_POST['email_login']) && !empty($_POST['senha_login'])){

         include('conexao.php');
         $email_login = $_POST['email_login'];
         $senha_login = $_POST['senha_login'];

          print_r('Email: ' . $email_login);
          print_r('<br>');
          print_r('Senha: ' . $senha_login);

         $sql = "SELECT * FROM usuarios WHERE email = '$email_login' and senha = '$senha_login'";

         $result = $conexao->query($sql);

          print_r($sql);
          print_r('<br>');
          print_r($result);

         if(mysqli_num_rows($result) < 1){
             unset($_SESSION['email_login']);
             unset($_SESSION['senha_login']);
             header('Location: cadastro.php');
         }else{
             $_SESSION['email_login'] = $email_login;
             $_SESSION['senha_login'] = $senha_login;
             header('Location: index.php');
         }

     }else{
         header('Location: cadastro.php');
     }
?>