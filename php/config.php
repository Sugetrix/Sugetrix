<?php
    //iniciando a conexão com o banco de dados 
    $rede = mysqli_connect("localhost", "root");
    
    //selecionando o banco de dados 
    $banco = mysqli_select_db($rede, "banco_tcc_mtl");
    // Checando conexão
    if (!$rede) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>