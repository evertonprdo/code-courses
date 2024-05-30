"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Objeto = exports.coisas = void 0;
const coisas = ["Corda", "Pilha", "Lampada", "Chave"];
exports.coisas = coisas;
class Pessoa {
    nome;
    altura;
    constructor(nome, altura) {
        this.nome = nome;
        this.altura = altura;
    }
}
class Objeto {
    nome;
    constructor(nome) {
        this.nome = nome;
    }
}
exports.Objeto = Objeto;
exports.default = Pessoa;
