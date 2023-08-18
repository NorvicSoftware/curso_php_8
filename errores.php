<?php 

//echo "Curso de PHP"
//echo "Version 8.2";

//$numero = 10 / 0;

try {
    $dv = 0;
    if(!$dv){
        throw new Exception("Número es cero");
    }
    $numero = 10 / $dv;
} catch (Exception $e) {    
    echo "Error: " . $e->getMessage();
}




?>