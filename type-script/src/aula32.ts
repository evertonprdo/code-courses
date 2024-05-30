namespace Veiculos {
    enum Cores {"Preto", "Branco", "Vermelho", "Amarelo", "Azul", "Prata"};
    
    abstract class Carro {
        private nome:string;
        private motor:Motores.Motor;
        private cor:string
        constructor(nome:string, motor:Motores.Motor, cor:Cores) {
            this.nome = nome;
            this.motor = new Motores.Motor(3, 100);
            this.cor = Cores[cor];
        }

        ligar() {
            this.motor.liga = true;
        }

        desligar() {
            this.motor.liga = false;
        }
        
        public get minhaCor() : string {
            return this.cor
        }
        
        public get meuNome() : string {
            return this.nome
        }
        
        public get estouLigado() : string {
            return (this.motor.liga ? "Sim" : "Não");
        }
        
        public get minhaPotencia(){
            return this.motor.potencia;
        }
    }
    export class CarroEsportivo extends Carro {
        constructor(nome:string, cor:Cores) {
            super(nome, new Motores.Motor(6, 300, new Motores.Turbo(100)), 2);
        }
    }

    export class CarroPopular extends Carro {
        constructor(nome:string, cor:Cores) {
            super(nome, new Motores.Motor(4, 100), cor);
        }
    }
}

namespace Motores {
    export class Turbo {
        private pot:number
        constructor(pot:number) {
            this.pot = pot;
        }

        get potencia() {
            return this.pot
        }
    }
    
    export class Motor {
        private ligado:boolean;
        private cilindros:number;
        private pot:number;

        constructor(cilindros:number, pot:number, turbo?:Turbo) {
            this.cilindros = cilindros;
            this.ligado = false;
            this.pot = pot + (turbo ? turbo.potencia : 0);
        }

        get is_ligado() {
            return this.ligado;
        }

        set liga(ligado:boolean) {
            this.ligado = ligado
        }

        get liga() {
            return this.ligado;
        }

        get potencia() {
            return this.pot;
        }
    }
}

const car1 = new Veiculos.CarroEsportivo("Rapid", 2);
const car2 = new Veiculos.CarroPopular("Nuuus", 1);

console.log(car1);
