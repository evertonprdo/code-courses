let x = 84
let y = 17
let res = x%y
let aux = ""
let numero = ""
let pass = 100

for (let i = 0; i < pass; i++) {
    if (res != 0) {
        aux = res.toString()+"0";
        res = parseInt(aux);
        
        numero += Math.floor(res/y)
        console.log('Passo '+(i+1)+': '+Math.floor(x/y)+','+numero)
        res%=y

    } else {
        i = pass
    }
}
console.log('Resultado: '+Math.floor(x/y)+','+numero)
console.log('Resultado de verificação: '+x/y)
