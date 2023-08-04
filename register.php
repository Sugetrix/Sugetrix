<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" href="css/register.css" media="screen" />
        <link rel="shortcut icon" href="img/Icon-Sugetrix-logo.png">

        <style>
            <?php $css = "../css/register.css" ?>
        </style>
    </head>
    <header>
        <section class="header-logo-menu">
            <div class="container">
                <div class="logo"><img src="img/Sugetrix.png"></div>
            </div>
        </section>
    </header>

    <body>
        <section class="forms">
            <div class="container-form">
                <div class="form-register">
                    <form class="validate-form" method="POST" action="php/cad_usu.php">

                        <div class="text">
                            <p>Criar Conta</p>
                        </div>

                        <div class="None-error">
                            <p id="text-error">
                                <?php
                                    if (isset($_GET['msg'])){
                                        if ($_GET['msg']==1) {
                                        echo 'Email ja Cadastrado';
                                        } else {
                                        echo 'Senhas não coincidem';
                                        }
                                        echo '';
                                    }
                                ?>
                            </p>
                        </div>
                        
                        <script>
                            var lineText = document.getElementById('text-error');
                            var text = lineText.textContent;
                            var letterCount = text.length;

                            if (letterCount > 61) {
                                var newDiv = document.querySelector('.None-error');
                                newDiv.classList.add('error');
                                newDiv.classList.remove('None-error');
                            }

                            console.log(letterCount);
                        </script>

                        <div class="single">
                            <input type="text" id="nome" name="txt_nome" maxlength="50" class="input-single" required>    
                            <label for="nome">Primeiro nome:</label>                   
                        </div>

                        <div class="single validate-input" data-validate = "Valid email is: a@b.c">
                            <input type="text" name="txt_email" maxlength="60" class="input-single" required>
                            
                            <label for="email">Email</label>
                            
                        </div>

                        <div class="single">
                            <img id="exibirPassword" onclick="showHidePassword()" src="img/exibir-senha.png">
                            <input type="password" id="senha" name="txt_senha" maxlength="20" class="input-single" required>
                            

                            <label for="senha">Senha:</label>
                        </div>

                        <div class="single">
                            <img id="exibir" onclick="showHide()" src="img/exibir-senha.png">
                            <input type="password" id="senha-conf" name="txt_senha-conf" maxlength="20" class="input-single" required>
                            <p> <?php echo isset($errormsg2) ? $errormsg2 : ''; ?></p>

                            <label for="senha-conf">Confirme sua senha:</label>
                        </div>

                        <input type="submit" value="Cadastrar-se" class="button">
                        <div class="link">
                            <p>Já possui uma conta? <a href="login.php">Faça login</a></p> 
                        </div>
                    </form>
                    <div class="terms">
                        <a href="Termos/Terms-Use.html" class="terms-single">Termo de uso</a>
                        <p>|</p>
                        <a href="Termos/Privacy.html" class="terms-single">Privacidade</a>
                    </div>
                </div>
            </div> 
        </section>

        <script src="js/exibir-senha.js"></script>
        <script src="js/alerta-email.js"></script>
    </body>

    <footer>
        <section class="header-logo-menu">
            <div class="container">
                <div class="logo"><img src="img/Sugetrix.png"></div>
            </div>
        </section>
    </footer>
    </html>
