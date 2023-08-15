<?php

class Persona{
    public $nombre;
    public $apellido;
    Public $fechaNacimiento;

    public function setNombreApellido($nombre, $apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNombreApellido(){
        return $this->nombre . " " . $this->apellido;
    }

    public function setFechaNacimiento($fechaNacimiento){
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }
 
    public function calcularEdad()
    {
        $hoy = date("d-m-Y");
        $fechaUno = date_create($hoy);
        $fechaDos = date_create($this->fechaNacimiento);
        $edad = date_diff($fechaDos, $fechaUno);
        echo $edad->format('%y') . " años";
    }
}

class Alumno extends Persona {
    public $carrera;
    public $matricula;

    public function setCarrera($carrera){
        $this->carrera = $carrera;
    }

    public function getCarrera(){
        return $this->carrera;
    }

    public function notaCarrera($nota){
        echo $nota . " en la carrera de " . $this->carrera;
    }
}


$alumnoUno = new Alumno();
$alumnoUno->setNombreApellido("Daniel", "Merida");
$alumnoUno->setFechaNacimiento("20-05-1995");
$alumnoUno->setCarrera("Programación en PHP");
echo $alumnoUno->getNombreApellido();
echo "<br>";
$alumnoUno->calcularEdad();
echo "<br>";
$alumnoUno->notaCarrera("95");
echo "<br><br>";

class Animal {
    public $nombre;
    public function emitirSonido() {
        echo "Ruido genérico\n";
    }
}

class Perro extends Animal {
    public function emitirSonido() {
        echo "Guau Guau\n";
    }
}

$miPerro = new Perro();
$miPerro->nombre = "Max";
echo $miPerro->nombre . " dice: ";
$miPerro->emitirSonido();
echo "<br><br>";

class Lenguaje {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function informacion() {
        return  "Lenguaje de porgramacion: " . $this->nombre;
    }
}

class Framework extends Lenguaje {
    public $arquitectura;
    public $funcionalidad;

    public function __construct($nombre, $arquitectura, $funcionalidad) {
        parent::__construct($nombre);
        $this->arquitectura = $arquitectura;
        $this->funcionalidad = $funcionalidad;
    }

    public function informacion() {
        return  "Framework: " . $this->nombre . " Arquitectura: " . $this->arquitectura . " Funcionalidad relevante: " . $this->funcionalidad;
    }
}

$framework = new Framework("Laravel", "MVC", "ELOQUENT ORM");
echo $framework->informacion();
echo "<br><br>";

class Figura {
    protected $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return pow($this->lado, 2);
    }
}

class Cuadrado extends Figura {
    public function calcularPerimetro() {
        return 4 * $this->lado;
    }
}

$valorLado = 5;
$cuadrado = new Cuadrado($valorLado);
echo "El área del cuadrado con lado igual a " . $valorLado .  " es " . $cuadrado->calcularArea() . "<br>";
echo "EL perímetro del cuadrado con lado igual a " . $valorLado .  " es " . $cuadrado->calcularPerimetro();




?>