class Conta {
    protected numero:number;
    protected titular:string;
    private saldo_c:number

    constructor(titular:string) {
        this.numero = this.gerarNumeroConta();
        this.titular = titular;
        this.saldo_c = 0;
    }
    
    private gerarNumeroConta():number {
        return Math.floor(Math.random()*100000)+1;
    }

    protected info() {
        console.log(`Titular: ${this.titular}`);
        console.log(`Numero.: ${this.numero}`);
    }

    public get saldo():number {
        return this.saldo_c;
    }

    private set saldo(saldo:number) {
        this.saldo_c = saldo;
    }

    protected deposito(valor:number) {
        this.saldo_c += valor;
    }

    protected saque(valor:number) {
        if (valor <= this.saldo_c) {
            this.saldo -=valor;
            console.log(`Saque de ${valor} concluido! Seu saldo atual é de: ${this.saldo}`);
        } else {
            console.log(`Saldo Insuficiente para realizar o saque de ${valor}! Saldo Atual: ${this.saldo}`);
        }        
    }
}

//------------------------------------------------------------------------------------------------------------------------
class ContaPF extends Conta {
    cpf:number;
    constructor(cpf:number, titular:string) {
        super(titular);
        this.cpf = cpf;
    }

    info() {
        console.log(`Tipo...: PF`);
        super.info();
        console.log(`CPF....: ${this.cpf}`);
        console.log(`-------------------------`);
    }

    public deposito(valor:number) {
        if (valor > 1000) {
            console.log(`Valor de depósito acima do limite permitido`); 
        } else {
            super.deposito(valor);
        }
    }

    public saque(valor: number): void {
        if (valor <= 500) {
            super.saque(valor);            
        } else {
            console.log(`O Valor ${valor} excedeu o limite de saque PF`);
        }
    }
}

//------------------------------------------------------------------------------------------------------------------------
class ContaPJ extends Conta {
    cnpj:number
    constructor(cnpj:number, titular:string) {
        super(titular);
        this.cnpj = cnpj;
    }
    info() {
        console.log(`Tipo...: PJ`);
        super.info();
        console.log(`CNPJ...: ${this.cnpj}`);
        console.log(`-------------------------`);
    }

    public deposito(valor:number) {
        if (valor >= 10000) {
            console.log(`Valor de depósito acima do limite permitido`); 
        } else {
            super.deposito(valor);
        }
    }

    public saque(valor: number): void {
        if (valor < 5000) {
            super.saque(valor);            
        } else {
            console.log(`O Valor ${valor} excedeu o limite de saque PJ`);
        }
    }
}

const conta_pf = new ContaPF(17469, "Oii");
const conta_pj = new ContaPJ(258145, "Olá");

//conta_pf.info();
//conta_pj.info();
conta_pf.deposito(800)
conta_pf.saque(500);
conta_pf.saque(300);
conta_pf.saque(3);

console.log(conta_pf.saldo);

conta_pj.deposito(5000)
conta_pj.saque(1500);
console.log(conta_pj.saldo);


