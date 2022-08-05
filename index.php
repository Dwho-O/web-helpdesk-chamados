<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
//instancia o arquivo de classe com métodos
require('Controller/conexao.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Site para abertura de chamados Helpdesk">
    <meta name="keywords" content="chamados, helpdesk, suporte técnico">
    <meta name="author" content="João Paulo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos/estilo.css" rel="stylesheet">
    <script type="text/javascript" src="js/meu-arquivo.js"></script>
</head>

<body>
    <!-- logo do site -->
    <header class="logo-site">
        <img src=""
            alt="Imagem da logo do site, ela tem uma borda em forma de um círculo de cor preta e dentro do círculo tem uma letra 'H' preta que simboliza H de Helpdesk">
    </header>

    <!-- menu com os elementos da página -->
    <nav class="navbar-menu">
        <a class="nav-indice" id="a-inicio" href="/html/">Início</a>
        <a class="nav-indice" id="a-entrar" href="/css/">Entrar</a>
        <a class="nav-indice" id="a-registrar" href="/js/">Registrar-se</a>
    </nav>

    <!-- corpo do site principal -->
    <main class="estrutura-principal">
        <!-- estrutura de artigos -->
        <article class="estrutura-postagem">
            <!-- informações da postagem -->
            <section class="conteudo-postagem">
                <?php
                $sql = "SELECT * FROM usuario;";
                $sth = $bancodedados->conexao->prepare($sql);
                $sth->execute();
                while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td> usuarioID:' . $row["idUsuario"] . '</td><br>';
                    echo '<td>Nome:' . $row["nome"] . '</td><br>';
                    echo '<figure>';
                    echo '<td>Foto:<br>' . '<img src="' . $row["foto"] . '" alt="teste" width="10%">'.'</td><br>';
                    echo '<figure>';
                    echo '</tr>';
                }
                ?>
            </section>
            <!-- menu lateral destinado a postagens recentes -->
            <aside class="menu-lateral">

            </aside>
        </article>
    </main>

    <!-- links úteis no final da página -->
    <footer class="menu-inferior">

    </footer>
</body>

</html>