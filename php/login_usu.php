<?php
    session_start();
    include('config.php');



    if(isset($_POST['txt_email_log']) || isset($_POST['txt_senha_log'])) {

        if(strlen($_POST['txt_email_log']) == 0) {
            echo "Preencha seu e-mail";
        } else if(strlen($_POST['txt_senha_log']) == 0) {
            echo "Preencha sua senha";
        } else {
    
            $usuario = $rede->real_escape_string($_POST['txt_email_log']);
            $senha = $rede->real_escape_string($_POST['txt_senha_log']);
            $passwordhash_query = "SELECT Senha_Usu FROM tabela_usuario WHERE Email_Usu = '{$usuario}'";
            $result = $rede->query($passwordhash_query) or die($rede->error);
            $estaLogado = false;

       

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $hashSenhaArmazenada = $row['Senha_Usu'];

                } else {


                // login incorreto ex: 1
               header('Location: ../login.php?msg=1');
               
                 $estaLogado = false;
               exit();

                 }
                
                if (password_verify($senha, $hashSenhaArmazenada)) {

                    $sql = "SELECT * FROM tabela_usuario WHERE Email_Usu = '{$usuario}'";
                    $resultado = $rede->query($sql) or die($rede->error);
                    
                    if ($resultado->num_rows == 1) {
                    $row = $resultado->fetch_object();
                    $codDoencaUsu = $row->Cod_Doenca_Usu;
                    $codIntoUsu = $row->Cod_Into_Usu;
                    $imagemUsu = $row->Imagem_Usu;

                    $_SESSION["txt_email_log"] = $usuario;
                    $_SESSION["nome_usuario"] = $row->Nome_Usu;
                    $_SESSION["cod_doenca_usu"] = $codDoencaUsu;
                    $_SESSION["cod_into_usu"] = $codIntoUsu;
                    $_SESSION["Imagem_Usu"] = $imagemUsu;
                    $estaLogado = true;
                  

                    include ('../after/index.php');   
             
                    } 
                       
                } else {

                         // login incorreto ex: 2
                        header('Location: ../login.php?msg=1');
                        $estaLogado = false;
                    
                        exit();
                }
            } 
        }  
      
   
?>

<!DOCTYPE html>
<html>
<head> 
        <meta charset="utf-8">

        <?php if($estaLogado == false) { ?>
            <link rel="stylesheet" type="text/css" href="../css/register.css" media="screen">
        <?php } ?>
        <link rel="shortcut icon" href="../img/Icon-Sugetrix-logo.png">

    </head>
</html>