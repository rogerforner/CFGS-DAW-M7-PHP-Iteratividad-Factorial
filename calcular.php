<?php
//#######################################################################
//############################################################## "ÍNDICE"
//***********************************************************************
//# *********************************************************************
//# Funciones
//## error()
//## factorial()
//# Valores
//# Tratar errores y Resultado
//# *********************************************************************

//# Funciones
//# ---------------------------------------------------------------------
//## error()
//# ---------------------------------------------------------------------
function error() {
  echo "Solo se aceptan números positivos.";
}

//## factorial()
//#
//# La siguiente función es iterativa porqué se utiliza un bucle while()
//# con la intención de obtener un resultado a partir de la repetición,
//# definida ($numero != 0) en éste mismo, de una miltiplicación.
//# ---------------------------------------------------------------------
function factorial($numero) {
  $factorial = 1;

  //Mientras el $numero no sea igual a 0 se realizará la operación.
  //Una vez obtenido el resultado restamos -1 al $numero, operando con
  //ese valor obtenido consecutivamente hasta terminar el bucle.
  //En una multiplicación es indiferente si se empieza por delante o por
  //detrás dada la propiedad conmutativa.
  //5! = 1 * 2 *3 * 4 * 5 = 120
  //5! = 5 * 4 * 3* 2 * 1 = 120
  while ($numero != 0) {
    $factorial *= $numero;

    //Decrementamos el número -1
    $numero--;
  }

  return $factorial;
}


//# Valores
//# ---------------------------------------------------------------------
//Obtener los valores introducidos en los campos del formulario.
$n = $_POST['numero']; //name="numero"


//# Tratar errores y Resultado
//# ---------------------------------------------------------------------
//Comprobaremos si el valor proporcionado es un número y además positivo.
//Si es un número procederemos a buscar el factorial de éste.
//Si no es un número enviaremos un mensaje de error.
if (!is_numeric($n) || $n < 0) {
  echo error();

} else { //Resultado
  echo "(" . $n . "!) = " . factorial($n);
}
?>
