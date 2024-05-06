const menu = document.getElementById('menu');

function adc_menu(event) {
    console.log(event.target);
    console.log("adc_menu function called");
    if (!menu.contains(event.target) && event.target.id !== 'botao') {
        menu.classList.remove("aparecer");
        //!menu.contains ve se esta fora do menu, se nao tivesse a ! veria se esta dentro//
    } else {
        menu.classList.toggle("aparecer");
    }
}

document.addEventListener("click", adc_menu);