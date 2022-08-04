<?php
    require_once ('./classes.php');
    $bancodedados = new BancoHelpdesk("localhost", "root", "", "helpdesk");
    $bancodedados->conexao();
    echo $bancodedados;
?>