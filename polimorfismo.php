<?php

echo "Polimorfismo mediante Herencia <br>";

class Animal {
    public function hacerSonido() {
        // Implementación genérica de hacerSonido()
    }
}

class Perro extends Animal {
    public function hacerSonido() {
        echo "El perro dice: Guau Guau\n";
    }
}

class Gato extends Animal {
    public function hacerSonido() {
        echo "El gato dice: Miau Miau\n";
    }
}

function hacerRuido(Animal $animal) {
    $animal->hacerSonido();
}

$miPerro = new Perro();
$miGato = new Gato();

hacerRuido($miPerro);
echo "<br>";
hacerRuido($miGato);
echo "<br><br>";

echo "Polimorfismo mediante Interfaces <br>";

interface Animal2 {
    public function hacerSonido();
}

class Perro2 implements Animal2 {
    public function hacerSonido() {
        echo "El perro dice: Guau Guau\n";
    }
}

class Gato2 implements Animal2 {
    public function hacerSonido() {
        echo "El gato dice: Miau Miau\n";
    }
}

function hacerRuido2(Animal2 $animal) {
    $animal->hacerSonido();
}

$miPerro2 = new Perro2();
$miGato2 = new Gato2();

hacerRuido2($miPerro2);
echo "<br>";
hacerRuido2($miGato2);
echo "<br><br>";

interface Forma {
    public function area();
}

class Circulo implements Forma {
    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function area() {
        return pi() * pow($this->radio, 2);
    }
}

class Rectangulo implements Forma {
    private $ladoA;
    private $ladoB;

    public function __construct($ladoA, $ladoB) {
        $this->ladoA = $ladoA;
        $this->ladoB = $ladoB;
    }

    public function area() {
        return $this->ladoA * $this->ladoB;
    }
}

function calcularArea(Forma $forma) {
    return $forma->area();
}

$circulo = new Circulo(5);
$rectangulo = new Rectangulo(4, 6);

echo "El área del círculo: " . calcularArea($circulo) . "<br>";
echo "El área del rectángulo: " . calcularArea($rectangulo);


?>