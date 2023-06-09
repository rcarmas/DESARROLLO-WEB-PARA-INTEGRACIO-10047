// Ejercicio 2: Acceso a variables con el mismo nombre en diferentes ámbitos

// En este ejercicio, se declara una variable con el mismo nombre en el ámbito global y en una función. 
// Se muestra en la consola el valor de ambas variables para observar cómo se accede a ellas y cuál prevalece 
// en cada contexto.

var variable = "Variable global";

function mostrarVariables() {
  var variable = "Variable local";
  
  console.log("Valor de la variable local: " + variable);
}

mostrarVariables();

console.log("Valor de la variable global fuera de la función: " + variable);