
<!-- corpo do site principal -->
<main class="estrutura-principal">
    <!-- estrutura de artigos -->
    <article class="estrutura-postagem">
        <!-- informações da postagem -->
        <section class="conteudo-postagem">
            <?php
                $selectChamado = "SELECT * FROM chamado";
                //melhorar a seleção con o INNER JOIN;
                $sChamado = $bancodedados->conexao->prepare($selectChamado);
                $sChamado->execute();

                while ($row = $sChamado->fetch(PDO::FETCH_ASSOC)) {
                    echo '<section class="box-chamado">';
                    echo '<tr><center>';
                    echo '<td> Chamado:' . $row["idChamado"] . '</td><br>';
                    echo '<td>Título:<br>' . $row["titulo"] . '</td><br>';
                    echo '<figure>';
                    echo '<td>Evidência:<br>' . '<img src="' . $row["evidencia"] . '" alt="teste" width="100px">' . '</td><br>';
                    echo '<figure>';
                    echo '</center></tr>';
                    echo '</section>';
                }
            ?>
        </section>
        <!-- menu lateral destinado a postagens recentes -->
        <aside class="menu-lateral">

        </aside>
    </article>
</main>