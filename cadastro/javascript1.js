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
    var cpf = document.getElementById('icpf')
    var email =document.getElementById('iemail')
    var premium1 = document.getElementById('ipremium')
    var premium2 = document.getElementById('premium')

    if (nome != "" && senha != "" && cpf != "" && email != "")  {
        if (premium1 !="" || premium2 != "") {
            alert('Cadastro realizado com sucesso1')
        }
    } else {
        alert('Não foi possível realizar o cadastro')
    }
}