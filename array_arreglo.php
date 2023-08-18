<?php 

$numeros = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

$diasSemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sabado", "Domingo"];

$celular = array(
    "Marca" => "Samsung",
    "Modelo" => "Galaxy S23",
    "precio" => 3500,
    "Caracteristicas" => "*8GB, 16GB almacenamiento, fotos nocturnas"
);


echo $numeros[7];
echo "<br>";
echo $diasSemana[2];
echo "<br>";
echo $celular["Marca"];
echo "<br>";

for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . " ";
}
echo "<br>";

foreach ($diasSemana as $dia) {
    echo $dia . " ";
}
echo "<br>";

foreach ($celular as $index => $valor) {
    echo $index . " = " . $valor . "<br>";
}

$numeros[] = 10;
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . " ";
}
echo "<br>";
foreach ($diasSemana as &$dia) {
    $dia = strtoupper($dia);
}
print_r($diasSemana);
echo "<br>";

unset($celular["precio"]);
print_r($celular);
echo "<br>";

$numeros2 = array(42, 17, 3, 28, 99, 23, 15, 77, 34, 15);

$suma = 0;

foreach ($numeros2 as $numero) {
    $suma += $numero;
}
echo "La suma de los números es: " . $suma;
echo "<br>";

$max = max($numeros2);
$min = min($numeros2);

echo "El número máximo es: " . $max . "<br>";
echo "El número mínimo es: " . $min;
echo "<br>";

$numerosPares = array();
$numerosImpares = array();

foreach ($numeros2 as $numero) {
    if ($numero % 2 == 0) {
        $numerosPares[] = $numero;
    } else {
        $numerosImpares[] = $numero;
    }
}

echo "Números pares: ";
print_r($numerosPares);
echo "<br>";
echo "Números impares: ";
print_r($numerosImpares);

?>