<?php

class Televisor{
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

}

$televisor = new Televisor("Samsung", 2018, "Negro", "42 Pulgadas");
echo $televisor->marcaModelo();
echo $televisor->calcularAntiguedad();
echo "<br><br>";

$televisor2 = new Televisor("LG", 1995, "Plomo", "32 Pulgadas");
echo $televisor2->marcaModelo();
echo $televisor2->calcularAntiguedad();
echo "<br><br>";


class Persona {
    public $nombre;
    public $edad;
    public $genero;

    public function saludar() {
        echo "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
    }
}

$persona1 = new Persona();
$persona1->nombre = "Victor";
$persona1->edad = 33;
$persona1->genero = "Masculino";

$persona1->saludar();
echo "<br><br>";

class Libro {
    public $titulo;
    public $autor;
    public $paginas;
    public $anioPublicacion;

    function __construct($titulo, $autor, $paginas, $anioPublicacion){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->anioPublicacion = $anioPublicacion;
    }

    public function informacion() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Paginas: " . $this->paginas . "<br>";
        echo "Año de publicación: " . $this->anioPublicacion . "<br>";
    }

    public function aniosPublicacion() {
        $anios = date('Y') - $this->anioPublicacion;
        echo "Años de publicación " . $anios . " años.";
    }
}

$libro = new Libro("Laravel de cero a diez", "Victor Peña", 685, 2022);
$libro->informacion();
$libro->aniosPublicacion();

?>