const teste = (txt?:string):void => {
    console.log(txt);
}

const fsoma2 = (n:number[]):number => {
    let s:number = 0;
    n.forEach((e) => {
        s+=e;
    })
    return s;
}

let sumer:number[] = [10, 20, 30, 40, 50];

teste("oi");
teste();

console.log(fsoma2(sumer));
