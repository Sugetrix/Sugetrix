<?php

    //iniciando a conexão com o banco de dados 
    $rede = mysqli_connect("localhost", "root");
    
    //selecionando o banco de dados 
    $banco = mysqli_select_db($rede, "banco_tcc_mtl");
    // Checando conexão
    if (!$rede) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "<br><h1>Sucesso - Conectado ao banco</h1>";

    $nome_usu = $_POST["txt_nome"];
    $email_usu = $_POST["txt_email"];
    $senha_usu = $_POST["txt_senha"];
    $senhaconf_usu = $_POST["txt_senha-conf"];

   

    //Uso dos radio Butons para definir o genero e ir bara o banco de dados

   // $genero = $_POST["genero"];

    // if($genero == "masculino") {
    //    $genero = 1 ;
    // } elseif($genero == "feminino") {
    //    $genero = 2 ;
    // } elseif($genero == "outro") {
    //    $genero = 3 ;
    // }
    
    // ------------------------------



    $dados = "INSERT INTO tabela_usuario (Nome_Usu, Email_Usu, Senha_Usu) VALUES ('$nome_usu','$email_usu','$senha_usu')"; // tabela_ususario Gene_Usu Values $genero

   
    if (mysqli_query($rede, $dados)) {
        echo "<br><h1>Registro inserido com sucesso !!!</h1>";
    } else {
        echo "Error: " . $dados . "<br>" . mysqli_error($rede);
    }
    mysqli_close($rede);

?>
