"use strict";
function soma2(n1 = 0, n2 = 0) {
    return n1 + n2;
}
console.log(soma2(1));
function novoUser(user, pass, nome) {
    let dados = { user, pass, nome };
    console.log(dados);
}
novoUser("Todooo", "sttt");
