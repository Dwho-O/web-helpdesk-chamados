<!-- corpo do site principal -->
<main class="estrutura-principal">
    <!-- estrutura de artigos -->
    <article class="estrutura-postagem">
        <!-- informações da postagem -->
        <section class="conteudo-postagem">
            <?php
            $sql = "SELECT * FROM chamado;";
            $sth = $bancodedados->conexao->prepare($sql);
            $sth->execute();
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr><center>';
                echo '<td> chamadoID:' . $row["idChamado"] . '</td><br>';
                echo '<td>Título:' . $row["titulo"] . '</td><br>';
                echo '<figure>';
                echo '<td>Evidência:<br>' . '<img src="' . $row["evidencia"] . '" alt="teste" width="100px">' . '</td><br>';
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