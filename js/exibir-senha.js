const passwordInput = document.getElementById("senha-conf")
const passwordInputTwo = document.getElementById("senha")
const exibir = document.getElementById("exibir")
const exibirPassword = document.getElementById("exibirPassword")

function showHide() {
    let inputTypeIsPassword = passwordInput.type == "password"

    if (inputTypeIsPassword) {
        showPassword()
    } else {
        hidePassword()
    }
}

function showPassword() {
    passwordInput.setAttribute("type", "text")
    exibir.setAttribute("src", "img/ocultar-senha.png")
}

function hidePassword() {
    passwordInput.setAttribute("type", "password")
    exibir.setAttribute("src", "img/exibir-senha.png")
}

function showHidePassword() {
    let inputTypeIsPassword = passwordInputTwo.type == "password"

    if (inputTypeIsPassword) {
        showPasswordTwo()
    } else {
        hidePasswordTwo()
    }
}

function showPasswordTwo() {
    passwordInputTwo.setAttribute("type", "text")
    exibirPassword.setAttribute("src", "img/ocultar-senha.png")
}

function hidePasswordTwo() {
    passwordInputTwo.setAttribute("type", "password")
    exibirPassword.setAttribute("src", "img/exibir-senha.png")
}