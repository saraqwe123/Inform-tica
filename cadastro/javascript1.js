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
    alert('Cadastro realizado com sucesso!')
}