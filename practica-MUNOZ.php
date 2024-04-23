<?php

/**
* Este  script PHP contiene funciones de prueba
* Script creado por Lucas Antonio Muñoz Albertos
* @package Tarea Unidad 5
* @version 1.0
* @author Lucas Antonio Muñoz Albertos
*/

/**
* Funcion que suma dos números y devuelve el resultado
* @param float $numero1 primer numero para sumar
* @param float $numero2 segundo numero para sumar
* @return float devuelve la suma de la suma de los números
*/
function suma($n1,$n2){
	return $n1+$n2;
}

/**
* Funcion que multiplica dos números y devuelve el resultado
* @param float $numero1 primer numero para multipicar
* @param float $numero2 segundo numero para multipicar
* @return float devuelve la multipicar de la multipicar de los números
*/
function multipicar($numero1,$numero2){
	return $numero1*$numero2;
}
/**
* Funcion que muestra un saludo con el nombre introducido
* @param string $nombre nombre introducido
* @return string devuelve la cadena 'hola '+ [nombre] 
*/
function saludo($nombre){
	return "Hola, "+$nombre;
}
/**
* Funcion que obtiene el factorial de un número introducido
* @param integer $numero numero sobre el que se calcula el factorial n! 
* @return integer devuelve el factorial del número 
*/
function factorial($numero){
$factorial =1;
	for($i=1; $i<=$numero;$i++){
		$factorial = $factorial*$i;
	}
return $factorial;
}
/**
* Esta es una anotación que solo será visible en la documentación para desarrolladores 
* No se incluirá en la documentación generada para los ususarios finales
* @internal Esta anotación es para uso interno del desarrollo
*/
?>
