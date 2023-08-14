<?php

function sumar($num1, $num2) {
    $resultado = $num1 + $num2;
    return $resultado;
}

function raizCuadradaDeUnNumero($numero){
    $raizCuadrada = sqrt($numero);
    echo "La raiz cuadra de ". $numero . " es: " . $raizCuadrada . "<br>";
}

function tipoDeCambioEnDolaresAmericanos($monto, $moneda){
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
    return $resultado;
}

raizCuadradaDeUnNumero(16);
raizCuadradaDeUnNumero(9);
echo "<br><br>";
$numero1 = 5;
$numero2 = 3;
$resultadoSuma = sumar($numero1, $numero2);
echo "La sumatoria de " . $numero1 . " + " . $numero2 . " es " . $resultadoSuma;
echo "<br><br>";
$totalenUSD = tipoDeCambioEnDolaresAmericanos(100, "Bolivianos BOB");
echo "100 bolivianos es igual a: " . $totalenUSD . " Dolar norteamericano";
$totalenUSD = tipoDeCambioEnDolaresAmericanos(100, "Peso mexicano MXN");
echo "100 Peso mexicano MXN es igual a: " . $totalenUSD . " Dolar norteamericano";
echo "<br><br>";

function factorial($numero) {
    if ($numero == 0) {
        return 1;
    } else {
        return $numero * factorial($numero - 1);
    }
}

$resultado = factorial(7);
echo "El factorial es: " . $resultado;
echo "<br><br>";

function velicidad($distancia, $tiempo) {
    if ($tiempo <= 0) {
        return 0;
    } else {
        return $distancia / $tiempo;
    }
}

$resultado = velicidad(100, 4);
echo "La velocidad es: " . $resultado



?>