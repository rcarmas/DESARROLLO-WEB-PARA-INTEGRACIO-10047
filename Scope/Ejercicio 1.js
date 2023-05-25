// Ejercicio 1: Acceso a variables dentro y fuera de una función

// En este ejercicio, se declara una variable global y una variable local dentro de una función. Se 
// muestra en la consola el valor de ambas variables tanto dentro como fuera de la función para observar el alcance 
// de cada una.

var variableGlobal = "Soy una variable global";

function mostrarVariables() {
  var variableLocal = "Soy una variable local";
  
  console.log("Variable local dentro de la función: " + variableLocal);
  console.log("Variable global dentro de la función: " + variableGlobal);
}