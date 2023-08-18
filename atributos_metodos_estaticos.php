<?php

class Libro {
    public static $titulo = "Programación en PHP 8";
    public static function getAutor() {
        echo "Daniels Marti";
    }

    public function imprimirTitulo() {
        echo self::$titulo;
    }
}

class Ciencia extends Libro {
    public function categoria() {
        echo "Programacion - " . parent::$titulo;
    }
}

echo Libro::$titulo;
echo "<br>";
Libro::getAutor();
echo "<br>";
$libro = new Libro();
$libro->imprimirTitulo();
echo "<br>";
$ciencia = new Ciencia();
$ciencia->categoria();
echo "<br><br>";



class Calculadora {
    public static function sumar($a, $b) {
        return $a + $b;
    }
    
    public static function restar($a, $b) {
        return $a - $b;
    }
    
    public static function multiplicar($a, $b) {
        return $a * $b;
    }
    
    public static function dividir($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            throw new Exception("División por cero");
        }
    }
}


try {
    echo "Suma: " . Calculadora::sumar(150, 5) . "<br>";
    echo "Resta: " . Calculadora::restar(150, 5) . "<br>";
    echo "Multiplicación: " . Calculadora::multiplicar(150, 5) . "<br>";
    echo "División: " . Calculadora::dividir(150, 5) . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}



?>