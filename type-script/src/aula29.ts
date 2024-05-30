function f_teste<T,U>(v:T|U):U|T {
    return v;
}

//console.log(f_teste<number, string>(10));
//console.log(f_teste<string, number>("10"));
//console.log(f_teste<boolean, boolean>(true));

class C_teste<T> {
    public valor:T;
    constructor(valor:T){
        this.valor = valor;
    }
}

const ct1 = new C_teste<string> ("Olá");

console.log(ct1);