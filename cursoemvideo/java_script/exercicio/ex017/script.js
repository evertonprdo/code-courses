const btnTabuada = document.querySelector('input#tabuada')
const divres = document.querySelector('div#resultado')
const selTabuada = document.getElementById('seltab')

btnTabuada.addEventListener('click', calcular)

function calcular() {
    divres.innerHTML = ''
    let numero = parseInt(document.querySelector('input#numero').value)
    selTabuada.innerHTML = ''

    if (!isNaN(numero)) {
        for (let i = 1; i <= 10; i++) {
            
            let item = document.createElement('option')

            item.text = `${numero} x ${i} = ${numero*i}`
            selTabuada.appendChild(item)
            item.value = `selTabuada${i}`
            
            divres.innerHTML += `<p>${numero}x${i} = ${numero*i}</p>`
        }
    } else {
        window.alert('Digite apenas numeros')
    }
}