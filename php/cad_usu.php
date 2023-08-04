<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">

        <?php
            $caminhoCSS = "../css/register.css";
        ?>

        <link rel="stylesheet" type="text/css" href="<?php echo $caminhoCSS; ?>" media="screen">
        <link rel="shortcut icon" href="../img/Icon-Sugetrix-logo.png">
    </head>
</html>

<?php
    include ('config.php');

    $nome_usu = $_POST["txt_nome"];
    $email_usu = $_POST["txt_email"];
    $senha_usu = $_POST["txt_senha"];
    $senhaconf_usu = $_POST["txt_senha-conf"];

    $hash = password_hash($senha_usu, PASSWORD_DEFAULT);
    $hashde = password_verify($senha_usu, $hash);
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

    $verifica = mysqli_query($rede, "SELECT * FROM tabela_usuario WHERE Email_Usu = '$email_usu'");
    if (mysqli_num_rows($verifica) > 0) {
        $errormsg = "Email já Cadastrado"; 
        header ('Location: ../register.php?msg=1');
        exit(); // Encerra a execução do script
    }

    // Verifica se as senhas coincidem
    if ($senha_usu !== $senhaconf_usu) {
        $errormsg = "Digite a mesma Senha";
        header ('Location: ../register.php?msg=2');
        exit(); // Encerra a execução do script
    }
    

    $dados = "INSERT INTO tabela_usuario (Nome_Usu, Email_Usu, Senha_Usu) VALUES ('$nome_usu','$email_usu','$hash')"; // tabela_ususario Gene_Usu Values $genero

    header ('Location: http://localhost/@tcc/login.php');
   //------------------------------------------
    if (mysqli_query($rede, $dados)) {
        echo "<br><h1>Registro inserido com sucesso !!!</h1>";
    } else {
        echo "Error: " . $dados . "<br>" . mysqli_error($rede);
    }
    mysqli_close($rede);

?>