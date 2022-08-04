<?php
    require_once ('./classes.php');
    $bancodedados = new metodos_poo("localhost", "root", "", "helpdesk");
    $bancodedados->conexao();
    echo $bancodedados;
?>