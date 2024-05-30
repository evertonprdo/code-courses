interface Curso1 {
    titulo:string;
    des:string;
    aulas:number;
    iniciarCurso2(t:string):void;
}

interface cursoProg extends Curso1 {
    aulas:number;
    maxAlunos?:number;
}

interface cursoArtes extends Curso1 {
    aulas:number;
    maxAlunos?:number;
}

let curso1:cursoProg;

curso1 = {
    titulo: "Typescript",
    des: "Curso de TypeScript",
    aulas: 100,
    maxAlunos: 50,
    iniciarCurso2(t) {
        console.log(t);
    }
}

console.log(curso1.iniciarCurso2("teste"));
