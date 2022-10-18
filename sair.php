<?php
     session_start();
     print_r($_SESSION);

        unset($_SESSION['email_login']);
        unset($_SESSION['senha_login']);
        header('Location: cadastro.php');

     echo "Saiu do sistema";
?>