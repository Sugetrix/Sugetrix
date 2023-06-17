<?php
 include ('config.php');

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
     $verifica = mysqli_query($rede, $dados,"SELECT * FROM tabela_usuario Where Email_Usu = '$email_usu' AND Senha_Usu = '$senha_usu'");

     if (isset($verifica)) {
        print "Pica";
     } else {
        print "Rola";

            }
   //------------------------------------------
    if (mysqli_query($rede, $dados)) {
        echo "<br><h1>Registro inserido com sucesso !!!</h1>";
    } else {
        echo "Error: " . $dados . "<br>" . mysqli_error($rede);
    }
    mysqli_close($rede);

?>
