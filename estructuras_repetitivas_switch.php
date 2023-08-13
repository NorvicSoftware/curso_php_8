<?php

$i = 3;
switch ($i){
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
    case 3:
        echo "i es igual a 3";
        break;
    case 4:
        echo "i es igual a 4";
        break;
}
echo "<br><br>";

$fruta = "Manzana";
switch ($fruta){
    case "Uva":
        echo "La fruta seleccionada es uva";
        break;
    case "Manzana":
        echo "La fruta seleccionada es manzana";
        break;
    case "Naranja":
        echo "La fruta seleccionada es naranja";
        break;
    default:
        echo "No existe la fruta seleccionada";
}
echo "<br><br>";

$calificacion = 62;

switch (true) {
    case $calificacion >= 90:
        echo "Excelente";
        break;
    case $calificacion >= 80:
        echo "Muy bien";
        break;
    case $calificacion >= 70:
        echo "Bien";
        break;
    case $calificacion >= 51:
        echo "Regular";
        break;
    default:
        echo "Reprobado";
}
echo "<br><br>";

$dia = 6;

switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Número inválido";
}



?>