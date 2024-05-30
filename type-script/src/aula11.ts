let nvalor:number;
let svalor:string;
let uvalor:unknown;

uvalor = 10;
svalor = '20';
nvalor = 15;

nvalor = <number> uvalor;
svalor = <string><unknown> uvalor;

svalor = nvalor.toString();
nvalor = Number.parseFloat(svalor);

console.log();