"use strict";
const teste = (txt) => {
    console.log(txt);
};
const fsoma2 = (n) => {
    let s = 0;
    n.forEach((e) => {
        s += e;
    });
    return s;
};
let sumer = [10, 20, 30, 40, 50];
teste("oi");
teste();
console.log(fsoma2(sumer));
