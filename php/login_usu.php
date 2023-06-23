<?php

    session_start();
    include ('config.php');

    $usuario = $_POST['txt_email_log'];
    $senha = $_POST['txt_senha_log'];
    

    $sql = "SELECT * FROM tabela_usuario Where Email_Usu = '{$usuario}' AND Senha_Usu = '{$senha}'";

    $resultado = $rede->query($sql) or die($rede->error);

    $quantidade = $resultado->num_rows;

    if($quantidade > 0) {
        $row = $resultado->fetch_object();
        $codDoencaUsu = $row->Cod_Doenca_Usu;
        $codIntoUsu = $row->Cod_Into_Usu;

        $_SESSION["txt_email_log"] = $usuario;
        $_SESSION["nome_usuario"] = $row->Nome_Usu;
        $_SESSION["cod_doenca_usu"] = $codDoencaUsu;
        $_SESSION["cod_into_usu"] = $codIntoUsu;
    
        include ('../after/index.php');
    }  else {
        include ('usuario.php');
    }
?>