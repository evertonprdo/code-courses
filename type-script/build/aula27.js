"use strict";
let curso1;
curso1 = {
    titulo: "Typescript",
    des: "Curso de TypeScript",
    aulas: 100,
    maxAlunos: 50,
    iniciarCurso2(t) {
        console.log(t);
    }
};
console.log(curso1.iniciarCurso2("teste"));
