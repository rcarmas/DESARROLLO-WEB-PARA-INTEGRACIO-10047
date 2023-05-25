// En este ejercicio, se solicita al usuario que ingrese un número como cadena de texto, se convierte a tipo de dato 
// numérico y se realiza una operación matemática.

var valor = prompt("Ingrese el valor que quiere que se imprima los 10 primeros multiplos: ");
var valornum = parseFloat(valor);

function multiplo(valornum) {
    var resultados = [];
    for (var i = 0; i <= 10; i++) {
        resultados.push(valornum * i);
    }
    return resultados;
}

var resultadosMultiplos = multiplo(valornum);
console.log(resultadosMultiplos);
