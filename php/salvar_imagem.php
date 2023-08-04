<?php
    session_start();
    include ('config.php');

    if (isset($_SESSION["nome_usuario"])) {
    
        echo "Conteúdo adicional para usuários logados";
    } else {
        header("Location: ../login.php");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['novoNome'])) {
            $novoNomeUsuario = $_POST['novoNome'];
            //$email = $_SESSION['txt_email_log'];
            //$busca1 = "UPDATE  tabela_usuario SET Nome_Usu = '$novoNomeUsuario'  WHERE Email_Usu = '$email' ";
            //$manda1 = mysqli_query($rede, $busca1);
            //$procura1 = $_SESSION['nome_usuario']; 


            // Aqui você pode fazer qualquer outra ação necessária com o novo nome do usuário, como atualizar no banco de dados, por exemplo.

            // Vamos apenas exibir o novo nome do usuário para verificar que foi recebido corretamente.
            echo "Novo nome do usuário: " . $novoNomeUsuario;



        }
    }

    if (isset($_POST["imagemPerfil"])) {
        $caminhoImagem = $_POST["imagemPerfil"];
        $email = $_SESSION['txt_email_log'];
        $busca2 = "UPDATE  tabela_usuario SET Imagem_Usu = '$caminhoImagem'  WHERE Email_Usu = '$email' ";
        $manda = mysqli_query($rede, $busca2);
        $procura = $_SESSION['Imagem_Usu'];
        
        echo "Novo endereço de imagem: " . $caminhoImagem;
    }

    if (isset($_POST["condicaoUsuario"])) {
        $novaComorbidadeUsuario = $_POST["condicaoUsuario"];
        
        echo "Nova comorbidade: " . $novaComorbidadeUsuario;
    }

    if (isset($_POST["condicaoUsuario2"])) {
        $novaIntoleranciaUsuario = $_POST["condicaoUsuario2"];

        echo "Nova Intolerancia: " . $novaIntoleranciaUsuario;
    }

?> 
