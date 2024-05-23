 const btnAlimentar = document.querySelector('input[type=button]#btnadd')
 const btnFinalizar = document.querySelector('input[type=button]#btnfinalizar')
 const textNumber = document.querySelector('input#numero')

 const outputAlimentar = document.querySelector('div#outputalimentar')
 const outputFinalizar = document.querySelector('div#outputfinalizar')

 btnAlimentar.addEventListener('click', eventBtnAddDados)
 btnFinalizar.addEventListener('click', eventBtnFinalizar)
 textNumber.addEventListener('keydown', function(event){if(event.key === 'Enter'){eventBtnAddDados()}})

 let lista = []

 function somaArray(list) {
    let aux = 0
    for (let i in list) {
        aux += list[i]
    }
    return aux
 }

 function mediaArray(list) {
    let aux = 0
    for (let i in list) {
        aux += list[i]
    }
    return aux /= list.length
 }

/* function validacaoInputAlimentar (textNum){
    if (textNum.value.trim() === '') {
        window.alert('Escreva um número')
        return false

    } else if (isNaN(parseFloat(textNum.value))) {
        window.alert('Digite apenas números')
        return false

    } else {
        let num = parseFloat(textNum.value)
        if (num <= 1 || num > 100) {
            window.alert('O número excedeu os valores de referência')
            return false
        } else {
            return true
        }
    }
 } */

 function validacaoInputAlimentar (textNum) {
    if(Number(textNum) >= 1 && Number(textNum) <= 100) {
        return true
    } else {
        return false
    }
 }

 function inLista(n, l) {
    if (l.indexOf(Number(n)) != -1){
        return true
    } else {
        return false
    }
 }

 function eventBtnFinalizar() {
    if(outputAlimentar.innerHTML.trim() === ''){window.alert('Você precisa Alimentar a Lista')
    } else {
        lista.sort()
        outputFinalizar.innerHTML += `<p>Ao todo, temos ${lista.length} números cadastrados</p>`
        outputFinalizar.innerHTML += `<p>O maior valor informado foi ${lista[lista.length-1]}</p>`
        outputFinalizar.innerHTML += `<p>O menor valor informado foi ${lista[0]}</p>`
        outputFinalizar.innerHTML += `<p>Somando todos os valores, temos ${somaArray(lista)}</p>`
        outputFinalizar.innerHTML += `<p>A média dos valores digitados é ${mediaArray(lista)}</p>`
    }
 }
 
 function eventBtnAddDados() {
    outputFinalizar.innerHTML = ''
    let num

    if (validacaoInputAlimentar(textNumber.value) && !inLista(textNumber.value, lista)){
        num = parseFloat(textNumber.value)
        outputAlimentar.innerHTML += `<p>Valor ${num} adicionado</p>`
        lista.push(num)
    } else {
        window.alert('Valor inválido ou já está na lista')
    }
    textNumber.value = ''
 }