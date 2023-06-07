
// 1. Crea una variable llamada "nombre" y asígnale tu nombre como valor.
nombre = "Christopher";

// 2. Crea una función llamada "suma" que reciba dos parámetros (a y b) y retorne la suma de ambos.
function suma(a, b){
    return console.log(a + b);
}

// 3. Escribe un condicional que verifique si una persona es mayor de edad. Si es mayor de edad, imprime "Es mayor de edad", de lo contrario, imprime "Es menor de edad".
edad = 20;

if (edad => 18){
    console.log("Es mayor de edad");
} else{
    console.log("Es menor de edad");
}

// 4. Crea un ciclo "for" que imprima los números del 1 al 5.
for(var i=0;i<=5;i++){
    console.log(i);
}

// 5.Crea una función llamada "imprimirArray" que reciba como parámetro un array y lo imprima elemento por elemento.
arreglo = ["hola", "como", "estas"]

function imprimirArray(arreglo){
    arreglo.forEach(elemento => {
        console.log(elemento);
   });
}

imprimirArray(arreglo)

// 6. ¿Cuánto es 2 + 2? Respuesta: 4 
var pregunta;
do{
    pregunta = prompt("Cuanto es 2 + 2?: ");
if(pregunta === "4"){
    pregunta = true;
}else{
    pregunta = false;
}
} while(pregunta === false);


// 11. Crea una función llamada "primerElementoArray" que reciba como parámetro un array y retorne el primer elemento.
function primerElemnto(arreglo){
    console.log(arreglo[0])
}

// 12. Crea una función llamada "imprimirElementosArray" que reciba como parámetro un array y lo imprima usando un ciclo "for".
arreglo = ["hola", "como", "estas"]

function imprimirArray(arreglo){
    for (let i = 0; i < arreglo.length; i++) {
        console.log(arreglo[i]);
      }
}

imprimirArray(arreglo)