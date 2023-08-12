<?php

$entero = 7;
echo $entero;
echo "<br><br>";


$a = 7;
$b = 5;
echo "a = " . $a . "<br>";
echo "b = " . $b ;
echo "<br><br>";


$c = $a + $b;
echo "La suma es: " . $c;
echo "<br><br>";

$c = $a - $b;
echo "La resta es: " . $c;
echo "<br><br>";

$c = $a * $b;
echo "La multiplicación es: " . $c;
echo "<br><br>";

$c = $a / $b;
echo "La división es: " . $c;
echo "<br><br>";

$c = $a % $b;
echo "La módulo es: " . $c;
echo "<br><br>";

$a++;
echo "Incremento de la variable a es: " . $a;
echo "<br><br>";

$b++;
echo "Decremento de la variable b es: " . $b;
echo "<br><br>";

$base = 12;
$altura = 8;

$area = ($base * $altura) / 2;

echo "El área del triángulo es: " . $area;
echo "<br><br>";

$a = 10;
$b = 4;
$c = 3;
$d = 7;

$resultado = (($a + $b) * $c) / ($a - $d);

echo "El resultado es:" . $resultado;

?>