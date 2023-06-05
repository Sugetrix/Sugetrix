<?php

    //iniciando a conexão com o banco de dados 
    $rede = mysqli_connect("localhost", "root");
    
    //selecionando o banco de dados 
    $banco = mysqli_select_db($rede, "banco_tcc_mtl");
    // Checando conexão
    if (!$rede) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $verifica ='SELECT Email_Usu FROM tabela_usuario  huihiudfadasdas';
    $selecao = mysqli_query($rede, $verifica);
    
    echo "<br><h1>Sucesso - Conectado ao banco</h1>";

//Variaveis do Login


    $email_usu_log = $_POST ["txt_email"];
    $senha_usu_log = $_POST ["txt_senha"];

//If de Validação 
 
 if ($email_usu_log == "SELECT Email_Usu FROM tabela_usuario " )


    ?>