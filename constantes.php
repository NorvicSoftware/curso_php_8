<?php 

define("PI", 3.1415926);
const PI_2 = 3.1415926;

echo PI;
print(PI_2);
echo "<br><br>";


define("TITULO_PAGINA", "Curso de PHP 8");
echo TITULO_PAGINA;
echo "<br><br>";


$radio = 10;
$area = PI * ($radio * $radio);
echo "El área del círculo es: " . $area;
echo "<br><br>";


define("LENGUAJE", "PHP");
define("VERSION_PHP", 8);


echo "Lenguaje: " . LENGUAJE . " " . VERSION_PHP;


?>