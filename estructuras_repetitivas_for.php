<?php 

for ($i = 1; $i <= 10; $i++){
    echo $i . ", ";
}
echo "<br><br>";

for ($j = 1; ; $j++){
    if($j > 8){
        break;
    }
    echo $j . ", ";
}
echo "<br><br>";

$array = array(1, 2, 3, 4, 5);
foreach ($array as &$valor){
    $valor = $valor * 2;
    echo $valor . ", ";
}
echo "<br><br>";

$array2 = array('Naranja', 'Uva', 'Manzana', 'Frutilla');

foreach ($array2 as &$fruta){
    echo $fruta . "<br>";
}
echo "<br><br>";


$numero = 9;

echo "Tabla de multiplicar del número " . $numero . ":<br>";

for ($contador = 1; $contador <= 10; $contador++) {
    $producto = $numero * $contador;
    echo $numero . " x " . $contador . " = " . $producto . "<br>";
}
echo "<br><br>";


$marcas = array("Toyota", "Nissan", "Renault", "BMW");
$marcaBuscada = "Renault";
$estadoBusqueda = false;

foreach ($marcas as $marca) {
    if ($marca == $marcaBuscada) {
        $estadoBusqueda = true;
        break;
    }
}

if ($estadoBusqueda) {
    echo "Sí, tenemos " . $marcaBuscada . " en stock.";
}
else{
    echo "Lo siento, no tenemos " . $frutaBuscada . " en stock.";
}




?>