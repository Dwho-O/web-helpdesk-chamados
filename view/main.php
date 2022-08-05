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
                echo '<tr><center>';
                echo '<td> usuarioID:' . $row["idUsuario"] . '</td><br>';
                echo '<td>Nome:' . $row["nome"] . '</td><br>';
                echo '<figure>';
                echo '<td>Foto:<br>' . '<img src="' . $row["foto"] . '" alt="teste" width="10%">' . '</td><br>';
                echo '<figure>';
                echo '</center></tr>';
            }
            ?>
        </section>
        <!-- menu lateral destinado a postagens recentes -->
        <aside class="menu-lateral">

        </aside>
    </article>
</main>