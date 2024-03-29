
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/register.css" media="screen" />
        <link rel="shortcut icon" href="img/Icon-Sugetrix-logo.png">

        <script src="https://accounts.google.com/gsi/client" async defer></script>
        <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script>

        <script>
            function handleCredentialResponse(response) {
                const data = jwt_decode(response.credential)
                console.log(data)
            }

            window.onload = function () {
                google.accounts.id.initialize({
                    client_id: "952898542546-g1hu8hl7n8ois194gdt0tfc933k17qls.apps.googleusercontent.com",
                    callback: handleCredentialResponse
                });

                google.accounts.id.renderButton(
                    document.getElementById("buttonDiv"), { 
                        theme: "outline", 
                        size: "large",
                        type: "standard",
                        shape: "pill",
                        text: "continue_with",
                        logo_alignment: "center"
                    }  // customization attributes
                );

                google.accounts.id.prompt(); // also display the One Tap dialog
            }
        </script>
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
                    <form method="POST" action="php/login_usu.php">
                        <div class="text">
                            <p>Login</p>
                        </div>

                        <div class="None-error">
                            <p id="text-error">
                                <?php
                                   if (isset($_GET['msg'])) {
                                        if($_GET['msg']==1){
                                            echo "Dados Incorretos";
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

                        <div class="single" data-validate="Valid email is: a@b.c">
                            <input type="text" name="txt_email_log" maxlength="60" class="input-single" required>
                            <label for="email">Email</label>
                        </div>

                        <div class="single">
                            <img id="exibirPassword" onclick="showHidePassword()" src="img/exibir-senha.png">
                            <input type="password" id="senha" name="txt_senha_log" maxlength="255" class="input-single" required>
                            <label for="senha">Senha:</label>
                        </div>

                        <input type="submit" value="Login" class="button">

                        <div class="link">
                            <p>Não possui uma conta? <a href="register.php" class="link-hover">Cadastrar-se</a></p> 
                        </div>

                        <div class="other">
                            <div class="line"></div>
                            <p>Ou</p>
                            <div class="line"></div>
                        </div>
                        <div class="button_google">
                            <div id="buttonDiv"></div> 
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
    </body>

    <footer>
        <section class="header-logo-menu">
            <div class="container">
                <div class="logo"><img src="img/Sugetrix.png"></div>
            </div>
        </section>
    </footer>
</html>