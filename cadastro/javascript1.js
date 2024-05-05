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
    var senha = document.getElementById("isenha").value
    var premium = document.getElementById("ipremium").value


    let inputs = [cpf, rg, email, nome, senha, premium]

    let i = 0
    for (let input  of inputs) {
        if (input !== "" && email.indexOf("@") !== -1 && senha.length >= 5 && premium.toUpperCase() === "NÃO" || premium.toUpperCase() === "SIM" || premium.toLowerCase() === "sim" || premium.toLowerCase() === "não") {
            i += 0
        } else {
            i += 1
        }
    }   

    if (i != 0) {
        alert("Preencha os campos corretamente!")
    } else {
        alert("Cadastro realizado com sucesso!")
    }
}