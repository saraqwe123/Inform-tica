const menu = document.getElementById('menu');

function adc_menu(event) {
    if (!menu.contains(event.target) && event.target.id !== 'botao') {
        menu.classList.remove("aparecer");
        //!menu.contains ve se esta fora do menu, se nao tivesse a ! veria se esta dentro//
    } else {
        menu.classList.toggle("aparecer");
    }
}

document.addEventListener("click", adc_menu);

function cadastro() {
    var cpf = document.getElementById("icpf").value
    var rg = document.getElementById("irg").value
    var email = document.getElementById("iemail").value
    var nome = document.getElementById("inome").value


    let inputs = [cpf, rg, email, nome]

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