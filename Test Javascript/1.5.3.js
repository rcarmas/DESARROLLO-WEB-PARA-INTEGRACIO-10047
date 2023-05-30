// Escribe un código en JavaScript que le pregunte a los usuarios cuánto
// es 2 + 2. Si responden bien, mostramos un mensaje de felicitaciones,
// pero si responden mal, volvemos a empezar.

var pregunta;
do{
    pregunta = prompt("Cuanto es 2 + 2?: ");
if(pregunta === "4"){
    pregunta = true;
}else{
    pregunta = false;
}
} while(pregunta === false);