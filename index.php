<?php

// Declarar 5 variables que contengan sus informacion personal 
// y una constante, el dato al macenar no cambie

$nombre= (string) "José Alfredo";
echo "Sus nombres son:  " . $nombre;
echo "<br>";
echo "<br>";
$apellidos= (string) "JIMENEZ GARCIA";
echo "Sus apellidos son:  " .  $apellidos;
echo "<br>";
echo "<br>";
$origen = (string) "Cartagena";
echo " Su orígen es: " . $origen;
echo "<br>";
echo "<br>";
$cedula = (integer) 73576237 ;
echo "Su numero de cédula es:  " .  $cedula;
echo "<br>";
echo "<br>";
$altura = (float) 70.1;
echo 'Su altura es $altura:  ', $altura;
echo "<br>";
echo "<br>";
const edad = 44;
echo "Su edad es:  ", edad;
echo "<br>";
echo "<br>";
$empleado = (bool) true;
echo '¿Usted es empleado? : ', $empleado;
echo "<br>";
echo "<br>";

function multiplicar ($a, $b){
    echo "El resultado es: ", $a * $b;
}

function triangulo ($b, $h){
    $r=($b*$h)/2;
    return $r;
}

multiplicar(9,5);
triangulo (9,15);

?>