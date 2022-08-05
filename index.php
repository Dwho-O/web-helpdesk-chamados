<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
//instancia o arquivo de classe com métodos
require('Controller/conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Início - helpdesk</title>
    <meta name="description" content="Site para abertura de chamados Helpdesk">
    <meta name="keywords" content="chamados, helpdesk, suporte técnico">
    <meta name="author" content="João Paulo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos/estilo.css" rel="stylesheet">
    <script type="text/javascript" src="js/meu-arquivo.js"></script>
</head>

<body>
    <!-- logo do site -->
    <main class="main-menu">
        <header class="header-site">
            <a href="./index.php">
                <img class="logo-site-img" src="./img/logo.png" alt="Imagem da logo do site, ela tem uma borda verde em forma de um quadrado com bordas círculares de cor verde e abaixo tem o texto Helpdesk escrito em cor preta.">
            </a>
        </header>
        <!-- menu com os elementos da página -->
        <nav class="navbar-menu">
            <a class="nav-indice" id="a-inicio" href="index.php">Início</a>
            <a class="nav-indice" id="a-entrar" href="./view/login.php">Entrar</a>
            <a class="nav-indice" id="a-registrar" href="./view/registrar.php">Registrar-se</a>
        </nav>
    </main>

    <!-- conteúdo da página -->
    <?php require_once('./view/main.php'); ?>


    <footer class="menu-inferior">
        <!-- links úteis no final da página -->
        <?php require_once('./view/footer.php'); ?>
    </footer>
</body>

</html>