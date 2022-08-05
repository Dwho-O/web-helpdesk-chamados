<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
//instancia o arquivo de classe com métodos
require('Controller/conexao.php');

?>
<!DOCTYPE html>
<html>
<?php require_once('./view/head.php'); ?>

<body>
    <!-- menu da página nav e menu -->
    <?php require_once('./view/menu.php'); ?>

    <!-- conteúdo da página -->
    <?php require_once('./view/main.php'); ?>


    <footer class="menu-inferior">
        <!-- links úteis no final da página -->
        <?php require_once('./view/footer.php'); ?>
    </footer>
</body>

</html>