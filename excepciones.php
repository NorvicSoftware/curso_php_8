<?php

class Division {
    public function dividirUnNumero($numero){
        try {
            if(!$numero || !is_numeric($numero)){
                throw new Exception("Número no valido");
            }
            echo "El resultado de división es: " . 2/$numero;
            echo "<br>";
        } catch (Exception $e){
            echo "Error de división :" . $e->getMessage();
            echo "<br>";
        } finally {
            return "Bloque try catch finalizado ";
        }
    }
}

$numero = new Division();
echo $numero->dividirUnNumero(4);
echo "<br><br>";

echo $numero->dividirUnNumero(0);
echo "<br><br>";

echo $numero->dividirUnNumero("hola");
echo "<br><br>";

class Persona {
    public function validarEdad($edad) {
        try {
            if ($edad < 1 || $edad > 100) {
                throw new Exception("Edad no valida");
            }
            echo "La edad de la persona es: " . $edad;
        } catch (Exception $e) {
            echo "Error : " . $e->getMessage();
        }
    }
}

$edad = new Persona();
echo $edad->validarEdad(21);
echo "<br><br>";

echo $edad->validarEdad(234);
echo "<br><br>";

echo $edad->validarEdad(-2);
echo "<br><br>";

?>