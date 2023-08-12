<?php 

$a = 5;
$b = 7;

if($a < $b){
    print("Ejecuta esta parte del código si a es menor que b");
}
echo "<br><br>";

if($a > $b){
    print("Ejecuta esta parte del código si a es mayor que b");
}
else{
    print("Ejecuta esta parte del código si la condición no se cumple");
}
echo "<br><br>";

if($a > $b){
    print("Ejecuta esta parte del código si a es mayor que b");
}
elseif($a < $b){
    print("Ejecuta esta parte del código si a es menor que b");
}
else{
    print("Ejecuta esta parte del código si si a es igual que b");
}
echo "<br><br>";

$calificacion = 93;

if ($calificacion >= 90) {
    echo "EXCELENCIA, tu calificación es: " . $calificacion;
} elseif ($calificacion >= 51) {
    echo "APROBADO, tu calificación es: " . $calificacion;
} else {
    echo "REPROBADO, tu calificación es: " . $calificacion;
}
echo "<br><br>";

$numero = 15;

if ($numero > 0) {
    echo $numero . " es número es positivo.";
} elseif ($numero < 0) {
    echo $numero . "el número es negativo.";
} else {
    echo $numero . "el número es cero.";
}


?>