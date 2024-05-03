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
    var cpf = document.getElementById("icpf").value
    var rg = document.getElementById("irg").value
    var email = document.getElementById("iemail").value
    var resp_produto = document.getElementById("iproduto").value
    var nome = document.getElementById("inome").value
    var senha = document.getElementById("isenha").value

    let inputs = [cpf, rg, email, resp_produto, nome, senha]

    let i = 0
    for (let input  of inputs) {
        if (input != "" && email.indexOf("@") != -1 && senha.lenght >= 5) {
            i += ""
        } else {
            i += 1
        }
    }
    
    if (i != "") {
        alert("Preencha os campos corretamente!")
    } else {
        alert("Cadastro realizado com sucesso!")
    }
}