const divres = document.querySelector('div#resultado')
const btncontar = document.querySelector('input[type=button]')
btncontar.addEventListener("click", contar)

function contando(init, end, pass) {

    if (end < init) {
        for (let i = init; i >= end; i -= pass) {
        divres.innerHTML += `&#128073; ${i.toFixed(2)}`
    }
        divres.innerHTML += ' &#127937;' 
    
    } else {
        for (let i = init; i <= end; i += pass) {
        divres.innerHTML += `&#128073; ${i.toFixed(2)}`
        }   
        divres.innerHTML += ' &#127937;'
    }
}

function contar() {
    
    let inicio = parseFloat(document.querySelector('input#inicio').value)
    let fim = parseFloat(document.querySelector('input#fim').value)
    let passo = parseFloat(document.querySelector('input#passo').value)
    
    divres.innerHTML = ''
    
    if (isNaN(inicio) || isNaN(fim) || isNaN(passo)) {
        window.alert('Digite apenas números')

    } else if (passo <= 0 ) {
        window.alert('Passo menor igual a 0 é impossivel, default pass = 1')
        contando(inicio,fim,1)
    
    } else {
        contando(inicio,fim,passo)
    }
}