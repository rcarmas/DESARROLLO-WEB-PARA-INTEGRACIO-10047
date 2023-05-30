// Replica el comportamiento de tu condicional anterior con if, else y
// else if, pero ahora solo con if (sin else ni else if).
// fi Bonus: si ya eres una experta o experto en el lenguaje, te desafío a comentar
// cómo replicar este comportamiento con arrays y un solo condicional. 

function obtenerMensaje(tipoDeSuscripcion) {
    var mensajes = {
      "Free": "Solo puedes tomar los cursos gratis",
      "Basic": "Puedes tomar casi todos los cursos de ESPE durante un mes",
      "Expert": "Puedes tomar casi todos los cursos de ESPE durante un año",
      "ExpertPlus": "Tú y alguien más pueden tomar TODOS los cursos de ESPE durante un año"
    };
  
    var mensaje = mensajes[tipoDeSuscripcion];
  
    if (mensaje) {
      console.log(mensaje);
    } else {
      console.log("Tipo de suscripción incorrecta");
    }
  }
  
obtenerMensaje("Free");  