<?php 

$televisor = new class('Samsung', 2018, "Negro", "42 Pulgadas") {
    public $marca;
    public $modelo;
    public $color;
    Public $tamanio;

    function __construct($marca, $modelo, $color, $tamanio){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->tamanio = $tamanio;
    }

    public function marcaModelo(){
        return $this->marca . " modelo " . $this->modelo;
    }

    public function calcularAntiguedad(){
        $antiguedad = 0;
        for($i = $this->modelo; $i< date("Y"); $i++){
           $antiguedad++;
        }
        Return "La antiguedad del televisor es: " . $antiguedad;
    }
};

echo $televisor->marcaModelo(). "<br>";
echo $televisor->calcularAntiguedad();
echo "<br><br>";

$miMascota = new class {
    public $nombre;
    public function emitirSonido() {
        echo "Guau Guau";
    }
};

$miMascota->nombre = "Nilo";
echo $miMascota->nombre . " dice: ";
$miMascota->emitirSonido();
echo "<br><br>";

$mensaje = new class {
    public $contenido;

    public function mostrar() {
        return $this->contenido;
    }
};

$mensaje->contenido = "Mensaje Personalizado";
echo $mensaje->mostrar();
echo "<br><br>";


class Vehiculo {
    public function encender() {
        echo "El vehículo está encendido ";
    }
}

$motocicleta = new class extends Vehiculo {
    public function mover() {
        echo "La motocicleta se mueve";
    }
};

$motocicleta->encender();
$motocicleta->mover();




?>