"use strict";
class Conta {
    numero;
    titular;
    saldo_c;
    constructor(titular) {
        this.numero = this.gerarNumeroConta();
        this.titular = titular;
        this.saldo_c = 0;
    }
    gerarNumeroConta() {
        return Math.floor(Math.random() * 100000) + 1;
    }
    info() {
        console.log(`Titular: ${this.titular}`);
        console.log(`Numero.: ${this.numero}`);
    }
    get saldo() {
        return this.saldo_c;
    }
    set saldo(saldo) {
        this.saldo_c = saldo;
    }
    deposito(valor) {
        this.saldo_c += valor;
    }
    saque(valor) {
        if (valor <= this.saldo_c) {
            this.saldo -= valor;
            console.log(`Saque de ${valor} concluido! Seu saldo atual é de: ${this.saldo}`);
        }
        else {
            console.log(`Saldo Insuficiente para realizar o saque de ${valor}! Saldo Atual: ${this.saldo}`);
        }
    }
}
class ContaPF extends Conta {
    cpf;
    baseCalculo = 10;
    constructor(cpf, titular) {
        super(titular);
        this.cpf = cpf;
    }
    CalcularTributos(taxa) {
        return taxa * this.baseCalculo;
    }
    info() {
        console.log(`Tipo...: PF`);
        super.info();
        console.log(`CPF....: ${this.cpf}`);
        console.log(`-------------------------`);
    }
    deposito(valor) {
        if (valor > 1000) {
            console.log(`Valor de depósito acima do limite permitido`);
        }
        else {
            super.deposito(valor);
        }
    }
    saque(valor) {
        if (valor <= 500) {
            super.saque(valor);
        }
        else {
            console.log(`O Valor ${valor} excedeu o limite de saque PF`);
        }
    }
}
class ContaPJ extends Conta {
    cnpj;
    constructor(cnpj, titular) {
        super(titular);
        this.cnpj = cnpj;
    }
    info() {
        console.log(`Tipo...: PJ`);
        super.info();
        console.log(`CNPJ...: ${this.cnpj}`);
        console.log(`-------------------------`);
    }
    deposito(valor) {
        if (valor >= 10000) {
            console.log(`Valor de depósito acima do limite permitido`);
        }
        else {
            super.deposito(valor);
        }
    }
    saque(valor) {
        if (valor < 5000) {
            super.saque(valor);
        }
        else {
            console.log(`O Valor ${valor} excedeu o limite de saque PJ`);
        }
    }
}
const conta_pf = new ContaPF(17469, "Oii");
const conta_pj = new ContaPJ(258145, "Olá");
conta_pf.deposito(800);
conta_pf.saque(500);
conta_pf.saque(300);
conta_pf.saque(3);
console.log(conta_pf.saldo);
conta_pj.deposito(5000);
conta_pj.saque(1500);
console.log(conta_pj.saldo);
