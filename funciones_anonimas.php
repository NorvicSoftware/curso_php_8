<?php

$sumar = function ($num1, $num2) {
    return $num1 + $num2;
};

$raizCuadrada = function ($numero){
    echo "La raiz cuadra de ". $numero . " es: " . sqrt($numero) . "<br>";
};

$MontoEnDolares = function ($monto, $moneda){
    $resultado = 0;
    switch ($moneda){
        case 'Bolivianos BOB':
            $resultado = $monto * 0.14;
            break;
        case 'Peso mexicano MXN':
            $resultado = $monto * 0.48;
            break;
        case 'Peso colombiano COP':
            $resultado = $monto * 0.00026;
            break;
        case 'Sol peruano PEN':
            $resultado = $monto * 0.25;
            break;
        case 'Peso argentino ARS':
            $resultado = $monto * 0.0098;
            break;
        case 'Bolivar venezolano VES':
            $resultado = $monto * 0.000002;
            break;
        case 'Peso chileno':
            $resultado = $monto * 0.0012;
            break;
        case 'Euro EUR':
            $resultado = $monto * 1.13;
            break;
    }
    echo $monto . " " . $moneda . " es igual a: " . $resultado . " Dolar norteamericano <br>";
};


$resultado = $sumar(5, 3);
echo "La suma es: " . $resultado;
echo "<br><br>";
$raizCuadrada(9);
$raizCuadrada(16);
echo "<br><br>";
$MontoEnDolares(100, "Bolivianos BOB");
$MontoEnDolares(100, "Peso mexicano MXN");
echo "<br><br>";

$factorial = function($numero) use (&$factorial) {
    if ($numero == 0) {
        return 1;
    } else {
        return $numero * $factorial($numero - 1);
    }
};

$resultado = $factorial(7);
echo "El factorial es: " . $resultado;
echo "<br><br>";

$velicidad = function($distancia, $tiempo) {
    if ($tiempo <= 0) {
        return 0;
    } else {
        return $distancia / $tiempo;
    }
};

echo "La velocidad es: " . $velicidad(100, 4);

?>