// Crea una función que pueda recibir cualquier objeto como parámetro
// e imprima todos sus elementos uno por uno (no se vale imprimir el
// objeto completo).

var persona = {
    nombre: "Christopher",
    apellido: "Armas",
    edad: 23
  };

function imprimirElementos(objeto) {
  for (var clave in objeto) {
    console.log(clave + ": " + objeto[clave]);
  }
}
  
imprimirElementos(persona);