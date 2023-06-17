<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sugetrix | Página Inicial</title>
        <link rel="stylesheet" type="text/css" href="../after/css/style.css" media="screen" />
        <link rel="shortcut icon" href="../img/Icon-Sugetrix-logo.png">
    </head>
    <header>
        <section class="header-logo-menu">
            <div class="container">
                <div class="logo"><img src="../img/Sugetrix.png"></div>
            </div>
        </section>
    </header>
    <body>
        <section class="sec1">
            <div class="container">
                <div class="content-sec1">
                    <div class="content1">
                        <div class="profile-picture">
                            <img src="../img/perfil-teste.png">
                        </div>
                    </div>
                    <div class="content2">
                        <div class="information">
                            <div class="name">
                                <p>
                                    <?php
                                        if (isset($_SESSION["nome_usuario"])) {
                                            $nomeUsuario = $_SESSION["nome_usuario"];
                                            echo $nomeUsuario;
                                        } else {
                                            header('Location: ../login.html'); // Redireciona para a página de usuário caso o login não tenha sido realizado
                                        }
                                    ?>
                                </p>
                            </div>
                            <div class="text">
                                <p>Hipertenso</p>
                                <p>Intolerante a lactose</p>
                                <p>Diabético</p>
                            </div>
                        </div>
                        <div class="alter-button">
                            <a href="#">Editar perfil</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="line"></div>
        <section class="sec2">
            <div class="container">
                <div class="content-sec2">
                    <div class="text-script">
                        <p id="text-typing">Bem vindo <?php echo $nomeUsuario; ?>, com oque posso te ajudar hoje?</p>
                        <script>
                            function typeWrite(elemento) {
                                const textoArray = elemento.innerHTML.split('');
                                elemento.innerHTML = '';
                                textoArray.forEach((letra, i) => {
                                    setTimeout(() => elemento.innerHTML += letra, 75 * i);
                                });
                            }

                            const titulo = document.getElementById("text-typing");
                            typeWrite(titulo);
                        </script>
                    </div>
                     <div class="tree-cards">
                        <div class="card-1 card">
                            <p>Cu</p>
                        </div>
                        <div class="card-2 card">
                            <p>Pinto</p>
                        </div>
                        <div class="card-3 card">
                            <p>Buceta</p>
                        </div>
                     </div>
                </div>
            </div>
        </section>
    </body>
    <footer>
        <section class="header-logo-menu">
            <div class="container">
                <div class="logo"><img src="../img/Sugetrix.png"></div>
            </div>
        </section>
    </footer>
</html>