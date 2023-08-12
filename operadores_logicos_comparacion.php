<?php

$a = true;
$b = true;

echo " true && true  es igual a: ";
var_dump($a && $b);
echo "<br><br>";

echo " true || true  es igual a: ";
var_dump($a || $b);
echo "<br><br>";

echo " true xor true  es igual a: ";
var_dump($a xor $b);
echo "<br><br>";

echo " !true es igual a: ";
var_dump(!$a);
echo "<br><br>";


$a = true;
$b = false;
echo " true && false  es igual a: ";
var_dump($a && $b);
echo "<br><br>";


echo " true || false  es igual a: ";
var_dump($a || $b);
echo "<br><br>";


echo " true xor false  es igual a: ";
var_dump($a xor $b);
echo "<br><br>";


echo " !false es igual a: ";
var_dump(!$b);
echo "<br><br>";

$c = 5;
$d = 7;

echo " 5 > 7  es igual a: ";
var_dump($c > $d);
echo "<br><br>";

echo " 5 < 7  es igual a: ";
var_dump($c < $d);
echo "<br><br>";

echo " 5 >= 7  es igual a: ";
var_dump($c >= $d);
echo "<br><br>";

echo " 5 <= 7  es igual a: ";
var_dump($c <= $d);
echo "<br><br>";

echo " 5 == 7  es igual a: ";
var_dump($c == $d);
echo "<br><br>";

echo " 5 <> 7  es igual a: ";
var_dump($c <> $d);
echo "<br><br>";

$c = 7;
$d = 7;

echo " 7 > 7  es igual a: ";
var_dump($c > $d);
echo "<br><br>";

echo " 7 < 7  es igual a: ";
var_dump($c < $d);
echo "<br><br>";

echo " 7 >= 7  es igual a: ";
var_dump($c >= $d);
echo "<br><br>";

echo " 7 <= 7  es igual a: ";
var_dump($c <= $d);
echo "<br><br>";

echo " 7 == 7  es igual a: ";
var_dump($c == $d);
echo "<br><br>";

echo " 7 <> 7  es igual a: ";
var_dump($c <> $d);
echo "<br><br>";


$edad = 18;
var_dump($edad >= 18);
echo "<br><br>";

$disenio = false;
$sevidor = true;
$baseDeDatos = true;

if ($disenio && $sevidor && $baseDeDatos) {
    echo "Es full stack Developer";
} else {
    echo "No es full stack Developer";
}




?>