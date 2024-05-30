"use strict";
function fsomaa(...n) {
    let s = 0;
    for (let e of n) {
        s += e;
    }
    return s;
}
console.log(fsomaa(10, 20, 30, 40, 100));
