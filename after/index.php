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
                            <?php 
                                If(isset($_SESSION['Imagem_Usu'])) {
                                    $imagemUsu = $_SESSION['Imagem_Usu'];

                                }
                            ?>
                            <img id="displayImage" src="<?php echo $imagemUsu ?>">
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
                                            header('Location: ../login.php');
                                        }
                                    ?>
                                </p>
                            </div>
                            <div class="text">
                                <p>
                                    <?php
                                        if (isset($_SESSION["cod_doenca_usu"])) {
                                            $codDoencaUsu = $_SESSION["cod_doenca_usu"];

                                            switch ($codDoencaUsu) {
                                                case 1:
                                                    echo "Doença: Hipertensão";
                                                    break;
                                                case 2:
                                                    echo "Doença: Diabetes";
                                                    break;
                                                case 3;
                                                    echo "Doença: Hipertensão e Diabetes";
                                                    break;
                                                default:
                                                    // Caso o valor seja 0
                                                    break;
                                            }

                                        } else {
                                            header('Location: ../login.php');
                                        }
                                    ?>
                                </p>
                                <p>
                                    <?php
                                        if (isset($_SESSION["cod_into_usu"])) {
                                            $codIntoUsu = $_SESSION["cod_into_usu"];

                                            switch ($codIntoUsu) {
                                                case 1:
                                                    echo "Restrição: Lactose";
                                                    break;
                                                case 2:
                                                    echo "Restrição: Glúten";
                                                    break;
                                                case 3;
                                                    echo "Restrição: Lactose e Glúten";
                                                    break;
                                                default:
                                                    // Caso o valor seja 0
                                                    break;
                                            }

                                        } else {
                                            header('Location: ../login.php');
                                        }
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="alter-button">
                            <button id="perfil-edit" class="edit" onclick="show()">
                                <p>Perfil</p>
                            </button>
                            <div class="overlay"></div>
                            <div class="alter-image-profile">
                                <div class="container-profile">
                                    <div class="close-div">
                                        <button onclick="fecharDiv()" class="close-button"><p>X</p></button>
                                            <div class="displaying-images">
                                                <img id="img1" src="../img/perfil-sorvete.png" onclick="toggleImageClass(this)">
                                                <img id="img2" src="../img/perfil-hamburguer.png" onclick="toggleImageClass(this)">
                                                <img id="img3" src="../img/perfil-pizza.png" onclick="toggleImageClass(this)">
                                                <img id="img4" src="../img/perfil-quente.png" onclick="toggleImageClass(this)">
                                                <img id="img5" src="../img/teste.png" onclick="toggleImageClass(this)">
                                                <img id="img6" src="../img/teste.png" onclick="toggleImageClass(this)">
                                                <img id="img7" src="../img/teste.png" onclick="toggleImageClass(this)">
                                            </div>
                                            <div class="line"></div>
                                            <div class="alter-info">
                                                <div class="title">
                                                    <p>Alterar Dados</p>
                                                </div>
                                                <div class="division">
                                                    <label class="indicator">Primeiro nome: </label>
                                                    <div class="first">
                                                        <input type="text" id="nome" name="txt_nome" maxlength="50" class="input-single" value="
                                                        <?php
                                                            if (isset($_SESSION["nome_usuario"])) {
                                                                $nomeUsuario = $_SESSION["nome_usuario"];
                                                                echo ($nomeUsuario);
                                                            } else {
                                                                header('Location: ../login.php');
                                                            }
                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="second">
                                                    <label class="indicator">Doença: </label>
                                                    <?php
                                                        if (isset($_SESSION["cod_doenca_usu"])) {
                                                            $codDoencaUsu = $_SESSION["cod_doenca_usu"];
                                                            
                                                            if ($codDoencaUsu == 1) {
                                                                $hipertensaoChecked = 'checked';
                                                                $diabetesChecked = '';

                                                            } elseif ($codDoencaUsu == 2) {
                                                                $hipertensaoChecked = '';
                                                                $diabetesChecked = 'checked';
                                                            } elseif ($codDoencaUsu == 3) {
                                                                $hipertensaoChecked = 'checked';
                                                                $diabetesChecked = 'checked';
                                                            } else {
                                                                $hipertensaoChecked = '';
                                                                $diabetesChecked = '';
                                                            }
                                                        } else {
                                                            header('Location: ../login.php');
                                                        }
                                                    ?>
                                                    <label class="round-checkbox">
                                                        <input type="checkbox" name="hipertensao" value="1" id="hipertensaoCheckbox" <?php echo $hipertensaoChecked; ?>> Hipertensão
                                                    </label>
                                                    <label class="round-checkbox">
                                                        <input type="checkbox" name="diabetes" value="2" id="diabetesCheckbox" <?php echo $diabetesChecked; ?>> Diabetes
                                                    </label>
                                                </div>
                                                <div class="second">
                                                    <label class="indicator">Intolerância: </label>

                                                    <?php
                                                        if (isset($_SESSION["cod_into_usu"])) {
                                                            $codIntoUsu = $_SESSION["cod_into_usu"];

                                                            if ($codIntoUsu == 1) {
                                                                $lactoseChecked = 'checked';
                                                                $glutenChecked = '';
                                                            } elseif ($codIntoUsu == 2) {
                                                                $lactoseChecked = '';
                                                                $glutenChecked = 'checked';
                                                            } elseif ($codIntoUsu == 3) {
                                                                $lactoseChecked = 'checked';
                                                                $glutenChecked = 'checked';
                                                            } else {
                                                                $lactoseChecked = '';
                                                                $glutenChecked = '';
                                                            }
                                                        } else {
                                                            header('Location: ../login.php');
                                                        }
                                                    ?>
                                                    <label class="round-checkbox">
                                                        <input type="checkbox" name="lactose" value="1" id="lactoseCheckbox" <?php echo $lactoseChecked; ?>> Lactose
                                                    </label>
                                                    <label class="round-checkbox">
                                                        <input type="checkbox" name="gluten" value="2" id="glutenCheckbox" <?php echo $glutenChecked; ?>> Glútlen
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="btnSaveImage">
                                                <button onclick="saveSelectedImageText()">V</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                function toggleImageClass(image) {
                                    var images = document.getElementsByTagName('img');
                                    for (var i = 0; i < images.length; i++) {
                                        if (images[i] !== image) {
                                        images[i].classList.remove("image-selected");
                                        }
                                    }
                                    image.classList.toggle("image-selected");
                                }


                                function saveSelectedImageText() {
                                    const overlay = document.querySelector(".overlay");
                                    const alterProfile = document.querySelector(".alter-image-profile");

                                    var selectedImage = document.querySelector('.image-selected');
                                    var novoNome = document.getElementById('nome').value;

                                    var hipertensaoCheckbox = document.getElementById('hipertensaoCheckbox');
                                    var diabetesCheckbox = document.getElementById('diabetesCheckbox');
                                    var lactoseCheckbox = document.getElementById('lactoseCheckbox');
                                    var glutenCheckbox = document.getElementById('glutenCheckbox');
                                    var lactoseSelecionado = lactoseCheckbox.checked;
                                    var glutenSelecionado = glutenCheckbox.checked;
                                    var hipertensaoSelecionado = hipertensaoCheckbox.checked;
                                    var diabetesSelecionado = diabetesCheckbox.checked;
                                    var condicaoUsuario = 0;
                                    var condicaoUsuario2 = 0;

                                    if (selectedImage) {
                                        var selectedImageId = selectedImage.id;
                                        switch (selectedImageId) {
                                            case 'img1':
                                                selectedImageText = '../img/perfil-sorvete.png';
                                                break;
                                            case 'img2':
                                                selectedImageText = '../img/perfil-hamburguer.png';
                                                break;
                                            case 'img3':
                                                selectedImageText = '../img/perfil-pizza.png';
                                                break;
                                            case 'img4':
                                                selectedImageText = '../img/perfil-quente.png';
                                                break;
                                            default:
                                                selectedImageText = '../img/perfil-teste.png';
                                                break;
                                        }
                                    } else {
                                        selectedImageText = '../img/perfil-teste.png';
                                    }

                                    if (hipertensaoSelecionado && diabetesSelecionado) {
                                        condicaoUsuario = 3;
                                    } else if (hipertensaoSelecionado) {
                                        condicaoUsuario = 1;
                                    } else if (diabetesSelecionado) {
                                        condicaoUsuario = 2;
                                    }

                                    if (lactoseSelecionado && glutenSelecionado) {
                                        condicaoUsuario2 = 3
                                    } else if (lactoseSelecionado) {
                                        condicaoUsuario = 1;
                                    } else if (glutenSelecionado) {
                                        condicaoUsuario = 2;
                                    }

                                    overlay.style.display = "none";
                                    alterProfile.style.display = "none";

                                    // Exibir a variável no console
                                    console.log(selectedImageText);

                                    var displayImage = document.getElementById('displayImage');
                                    displayImage.src = selectedImageText;

                                    var xhr = new XMLHttpRequest();
                                    xhr.open("POST", "salvar_imagem.php", true);
                                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                    xhr.onreadystatechange = function() {
                                        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                                            if (xhr.status === 200) {
                                                var resposta = xhr.responseText;
                                                // Lidar com a resposta do servidor, se necessário.
                                                console.log(resposta);
                                            } else {
                                                // Erro: Exibir mensagem de erro.
                                                console.log("Erro ao enviar imagem para o servidor.");
                                            }
                                        }
                                    };
                                    xhr.send("novoNome=" + encodeURIComponent(novoNome) + "&imagemPerfil=" + encodeURIComponent(selectedImageText) + "&condicaoUsuario=" + condicaoUsuario + "&condicaoUsuario2=" + condicaoUsuario2);
                                }
                            </script>
                            <script>
                                function show() {
                                    const overlay = document.querySelector(".overlay");
                                    const alterProfile = document.querySelector(".alter-image-profile");
                                    overlay.style.display = "block";
                                    alterProfile.style.display = "flex"
                                }
                                function fecharDiv() {
                                    const overlay = document.querySelector(".overlay");
                                    const alterProfile = document.querySelector(".alter-image-profile");
                                    overlay.style.display = "none";
                                    alterProfile.style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="line">
        </div>
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
                                    setTimeout(() => elemento.innerHTML += letra, 60 * i);
                                });
                            }

                            const titulo = document.getElementById("text-typing");
                            typeWrite(titulo);
                        </script>
                    </div>
                    <div class="tree-cards">
                        <div class="card-1 card">
                            <div class="image-icon image-1">

                            </div>
                        </div>
                        <div class="card-2 card">
                            <div class="image-icon image-2">
                                
                            </div>
                        </div>
                        <div class="card-3 card">
                            <div class="image-icon image-3">
                                
                            </div>
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