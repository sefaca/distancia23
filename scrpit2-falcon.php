<?php
/**
* @author Sergio Falcón De la Calle
* @version 2.0.0
*
*/
/**
*Este script contiene una clase llamada Operaciones que tiene dos métodos: multiplicacion y division.
*El método multiplicacion toma dos números como entrada y devuelve el resultado de multiplicarlos.
*El método division también toma dos números como entrada y devuelve el cociente de la división del primer número entre el segundo.
*/

class Operaciones {

    /**Clase que realiza operaciones matemáticas básicas.
    * Esta función devuelve la multiplicación de los argumentos
    * enviados en la llamada
    * @param integer $a primer número a multiplicar 
    * @param integer $b segundo número a multiplicar
    * @return integer resultado de la multiplicación de dos números enteros
    *
    */
    public function multiplicacion($a, $b){
        return $a * $b;
    }
    
    /**
    * Esta función devuelve la división de los argumentos
    * enviados en la llamada
    * @param integer $a primer número a dividir 
    * @param integer $b segundo número a dividir
    * @return integer resultado de la división de dos números enteros
    *
    */
    public function division($a, $b){
        return $a / $b;
    }

}

$operaciones = new Operaciones();

echo "Ejemplo de funciones en PHP</br>";
echo "<br/> La multiplicación entre 5 y 2 es : " . $operaciones->multiplicacion(5,2);
echo "<br/> La división de 25 y 5 es : ". $operaciones->division(25,5);
echo "<br/> Hasta pronto!!<br/>";
?>
