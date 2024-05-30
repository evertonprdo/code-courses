let dados = {
    nome: "Douglestildes",
    idade: 25,
    status: "A",

    ola:()=>{console.log("Oi")},
    info:(p:string)=>{console.log(p)}
}

dados.nome = "Josistelderson"
console.log(typeof dados);
console.log(dados);
dados.ola();
dados.info(dados.nome);
