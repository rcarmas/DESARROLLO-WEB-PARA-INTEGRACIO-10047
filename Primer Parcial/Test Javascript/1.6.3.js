// Crea una función que pueda recibir cualquier array como parámetro e
// imprima todos sus elementos uno por uno (no se vale imprimir el
// array completo).

var arreglo = ["pepe", "jose", "maria"];

function todoArreglo(array){
   array.forEach((elemento) =>{
        console.log(elemento);
   });
}

todoArreglo(arreglo)