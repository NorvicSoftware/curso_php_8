<?php

$cont = 0;

while($cont < 10){
    $cont++;
    echo "Mensaje enviado número: " . $cont . "<br>";
}
echo "<br><br>";

$cont2 = 10;
$suma = 0;
do{
    $suma = $suma + $cont2;
    $cont2++;
}while($cont2 < 10);
echo "La sumatoria es: " . $suma;
echo "<br><br>";


$numero = 7;
$contador = 1;

echo "Tabla de multiplicar del número " . $numero . ":<br>";

while ($contador <= 10) {
    $producto = $numero * $contador;
    echo $numero . " x " . $contador . " = " . $producto . "<br>";
    $contador++;
}
echo "<br><br>";

$numero = 3;
$factorial = 1;
$contador = 1;

do {
    $factorial *= $contador;
    $contador++;
} while ($contador <= $numero);

echo "El factorial de " . $numero . " es: " . $factorial;




?>