const password = document.getElementById('senha-conf');
const icon = document.getElementById('exibir')

function showHide(){
    if(password.type === 'senha-conf'){
        senha-conf.setAttribute('type','text');
        icon.classList.add('hide')
    }
    else{
        senha-conf.setAttribute('type','password');
        icon.classList.remove('hide')
    }
}