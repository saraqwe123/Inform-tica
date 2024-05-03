function menu(){
    var menu = document.getElementById('menu')
    var botao = document.getElementById('botao')
    
    if (menu.style.display === "none") {
        botao.style.display = "none"
        menu.style.display = "block"
    } else {
        botao.style.display = "block"
        menu.style.display = "none"
    }
}

function cadastro() {

    var nome = document.getElementById('inome')
    var senha = document.getElementById('isenha')

    if (nome != "" && senha !="") {
        alert('Login realizado com sucesso1')
    } else {
        alert('Não foi possível realizar o login')
    }
}