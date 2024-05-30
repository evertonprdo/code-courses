"use strict";
class Computador {
    id;
    nome;
    ram;
    cpu;
    ligado;
    constructor(nome, ram, cpu) {
        this.nome = nome;
        this.ram = ram;
        this.cpu = cpu;
        this.ligado = false;
        this.id = 0;
    }
    info() {
        console.log(`Nome..: ${this.nome}`);
        console.log(`Ram...: ${this.ram}`);
        console.log(`CPU...: ${this.cpu}`);
        console.log(`Status: ${this.ligado ? "Ligado" : "Desligado"}`);
        console.log("-----------------------");
    }
    ligar() {
        this.ligado = true;
    }
    desligar() {
        this.ligado = false;
    }
    upRam(qtde) {
        if (qtde >= 0 && qtde <= 100) {
            this.ram = qtde;
        }
        else {
            console.log(`Quantidade ${qtde} para o computador ${this.nome} não é permitido`);
        }
    }
}
const pc1 = new Computador("Rapidão", 75, 3);
const pc2 = new Computador("Carão", 79, 5);
const pc3 = new Computador("Gamer", 64, 3);
pc1.ligar();
pc3.ligar();
pc1.nome = "Super Rapidão";
pc1.upRam(850);
pc1.info();
pc2.info();
pc3.info();
