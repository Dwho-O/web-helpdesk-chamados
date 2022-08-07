<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Registrar-se - helpdesk</title>
    <meta name="description" content="Site para abertura de chamados Helpdesk">
    <meta name="keywords" content="chamados, helpdesk, suporte técnico">
    <meta name="author" content="João Paulo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../estilos/estilo.css" rel="stylesheet">
    <script type="text/javascript" src="../js/meu-arquivo.js"></script>
</head>

<body>
    <!-- logo do site -->
    <main class="main-menu">
        <header class="header-site">
            <a href="../index.php">
                <img class="logo-site-img" src="../img/logo.png" alt="Imagem da logo do site, ela tem uma borda verde em forma de um quadrado com bordas círculares de cor verde e abaixo tem o texto Helpdesk escrito em cor preta.">
            </a>
        </header>

        <!-- menu com os elementos da página -->
        <nav class="navbar-menu">
            <a class="nav-indice" id="a-inicio" href="../index.php">Início</a>
            <a class="nav-indice" id="a-entrar" href="login.php">Entrar</a>
            <a class="nav-indice" id="a-registrar" href="registrar.php">Registrar-se</a>
        </nav>
    </main>

    <main class="main-registrar">

        <form class="form-registro" method="GET" action="">

                <ledend class="legend-form">Registre-se já!</ledend>
                <label for="txtEmail" maxlength="40">E-mail:</label>
                <input class="txtEmail" id="txtEmail" type="email" placeholder="digite seu melhor e-mail...">
                <label for="txtNome">Nome:</label>
                <input type="text" class="txtNome" id="txtNome" maxlength="30" placeholder="digite seu nome completo...">
                <label for="txtFile">Foto:</label>
                <input class="txtFile" id="txtFile" type="file">
                <label for="txtSenha">Senha:</label>
                <input class="txtSenha" id="txtSenha" placeholder="digite a senha..." type="password">
                <label for="txtConfirmaSenha">Confirmação de senha: </label>
                <input class="txtConfirmaSenha" id="txtConfirmaSenha" placeholder="Digite a confirmação de senha..." type="password">
                <input class="btnEnviar" type="submit" value="Enviar">

        </form>
    </main>
</body>
<footer>
    <?php require_once('footer.php'); ?>
</footer>

</html>