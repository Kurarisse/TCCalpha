<?php

    if(isset($_POST['submit'])){
    //     print_r('Nome: ' . $_POST['nome']);
    //     print_r('<br>');
    //     print_r('Sobrenome: ' . $_POST['sobrenome']);
    //     print_r('<br>');
    //     print_r('Telefone: ' . $_POST['telefone']);
    //     print_r('<br>');
    //     print_r('Email: ' . $_POST['email']);
    //     print_r('<br>');
    //     print_r('Logradouro: ' . $_POST['logradouro']);
    //     print_r('<br>');
    //     print_r('CPF: ' . $_POST['cpf']);
    //     print_r('<br>');
    //     print_r('Senha: ' . $_POST['senha']);

        include('conexao.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $logradouro = $_POST['logradouro'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
        $email_login = ['email_login'];
        $senha_login = ['senha_login'];

        $sql = "INSERT INTO usuarios (nome,sobrenome,email,telefone,logradouro,cpf,senha) VALUES ('$nome','$sobrenome','$email','$telefone','$logradouro','$cpf','$senha')";


        if (mysqli_query($conexao, $sql)) {
            echo '<script>alert("Cadastro efetuado com sucesso!");</script>';
       } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
       }
       mysqli_close($conexao);

    }

    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TÍTULO DA PÁGINA -->
    <title>Site de vendas Fernanda ZD Modas - Cadastro</title>

    <!-- IMPORTAÇÃO DE FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

    <!-- IMPORTAÇÃO DE CSS E SCRIPTS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
        <!-- INÍCIO CABEÇALHO -->
        <header id="cabecalho">

            <!-- INÍCIO ÁREA DA ESQUERDA -->
            <!-- INÍCIO MENU -->
            <div class="junto">

                <!-- LOGO -->
            <a href="index.php"><img  class="logo" src="img/logo_logo.png" alt="Imagem de logo" title="Imagem de logo"></a>
            <!-- FIM LOGO -->
            <nav id="nav">
                <button id="btnCelular" aria-label="Abrir menu" aria-haspopup="true" aria-controls="menu" aria-expanded="false"><img src="img/menu.png" alt="Imagem menu hambúrguer" title="Menu de links das páginas"><span>Menu</span></button>

                    <ul id="menu" role="menu">
                        <li id="hover"><a href="index.php" title="Link para a página de início">Home</a></li>
                        <li id="hover"><a href="lingeries.html" title="Link para a página de produtos de lingerie">Lingeries</a></li>
                        <li id="hover"><a href="sexShop.html" title="Link para a página de produtos de sex shop">Sex shop</a></li>
                        <li id="hover"><a href="cosmeticos.html" title="Link para a página de produtos de cosméticos">Cosméticos</a></li>
                        <li id="hover"><a href="sobre.html" title="Link para a página com informações sobre a empresa">Sobre nós</a></li>
                        <li id="hover"><a href="insereProduto.html" title="Link para a página de cadastro de produtos">Cadastro de produtos</a></li>
                        <!-- <li class="menu_hamburguer">                      
                        <li id="hover"><a href=""><img src="img/sair.png" alt="Imagem de símbolo para sair da página" title="Símbolo para sair da página"><span>Sair</span></a></li>
                        </li>  -->
                    </ul>
            </nav>
            <!-- FIM MENU -->
            
        </div>
        <!-- FIM ÁREA DA ESQUERDA -->

        <!-- INÍCIO LINKS ALINHADOS À DIREITA E ACESSIBILIDADE-->
        <div class="direita">
            <div class="alinha">
                <a href="cadastro.php" title="Link para a página de cadastro" class="margem">Login</a>
                <!-- <ul id="menu2">

                    <button id="perfil"><div id="imgPerfil" title="Boneco de perfil" width="20px"></div><span>Perfil</span></button>

                    <ul id="menuPerfil"> -->
                    <a href="perfil.html" title="Link para acesso à página de perfil"><div id="imgPerfil" title="Boneco de perfil" width="20px"></div><span>Perfil</span></a>
                    <a href="sair.php"><img src="img/sair.png" alt="Imagem de símbolo para sair da página" title="Símbolo para sair da página"><span>Sair</span></a>
                    <!-- </ul>
                </ul> -->
                <button id="botaoContraste">&nbsp; / &nbsp;Alto Contraste<div id="imgContraste" title="Símbolo de contraste" width="20px"></div></button>
                <button id="aumentoFonte">&nbsp;Aumento de fonte</button>
            </div>
        </div>
        <!-- FIM LINKS ALINHADOS À DIREITA E ACESSIBILIDADE-->

        </header>
        <!-- FIM CABEÇALHO -->
        
         <!-- INÍCIO ÁREA CADASTRO DE PRODUTOS -->
         <div id="area">
            <div id="addDoc2">
                <form action="login.php" method="POST">
                    <div class="formCabeca">
                        <div class="titulo2">
                            <h1>Login</h1>
                        </div>
                    </div>

                    <div class="boxes2" id="box1">
                        <div class="box" id="box3">
                            <label for="email_login">E-mail</label>
                            <input type="email" name="email_login" id="email_login" placeholder="nome@email.com" required>
                        </div>

                        <div class="box" id="box7">
                            <label for="senha_login">Senha</label>
                            <input type="password" name="senha_login" id="senha_login" placeholder="********" required>
                        </div>
                    </div>
                    
                    <div class="butao">
                        <input type="submit" name="submit_login" id="submit_login" value="Entrar">
                    </div>

                </form>
            </div>

            <div id="formulario">
                <form action="cadastro.php" method="POST">
                    <div class="formCabeca">
                        <div class="titulo2">
                            <h1>Cadastre-se</h1>
                        </div>
                    </div>

                    <div class="boxes" id="box1">
                        <div class="box">
                            <label for="nome">Primeiro nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Insira seu nome" required>
                        </div>

                        <div class="box" id="box2">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" name="sobrenome" id="sobrenome" placeholder="Insira seu sobrenome" required>
                        </div>

                        <div class="box" id="box3">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" placeholder="nome@email.com" required>
                        </div>

                        <div class="box" id="box4">
                            <label for="telefone">Telefone</label>
                            <input type="tel" name="telefone" id="telefone" placeholder="(XX) XXXXX-XXXX" required>
                        </div>

                        <div class="box" id="box5">
                            <label for="logradouro">Logradouro</label>
                            <input type="text" name="logradouro" id="logradouro" placeholder="Informe seu logradouro" required>
                        </div>

                        
                        <div class="box" id="box6">
                            <label for="cpf">CPF</label>
                            <input type="text" max-length="11" name="cpf" id="cpf" placeholder="Insira seu CPF" required>
                        </div>

                        <div class="box" id="box7">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" placeholder="********" required>
                        </div>
                    </div>
                    
                    <div class="butao">
                        <input type="submit" name="submit" id="submit" value="Cadastrar">
                    </div>

                </form>
            </div>
        </div>
        <!-- FIM ÁREA CADASTRO DE PRODUTOS -->

        <!-- RODAPÉ -->
        <div id="footer">
            <p>
                <a href="index.html">Home</a>
                <a href="lingeries.html">Lingeries</a>
                <a href="sexShop.html">Sex shop</a>
                <a href="cosmeticos.html">Cosméticos</a>
                <a href="sobre.html">Sobre nós</a>
            </p>
            <p class="reservado">&copy;Todos os direitos reservados</p>
        </div>
        <!-- FIM RODAPÉ -->

        <!-- IMPORTAÇÃO DE SCRIPTS -->
        <script src="js/script.js"></script>
</body>
</html>