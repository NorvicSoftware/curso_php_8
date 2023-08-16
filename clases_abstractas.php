<?php

abstract class MiClaseAbstracta{
    abstract protected function obtenerValor();
    abstract protected function asignarValor($valor);

    public function imprimirValor(){
        echo $this->obtenerValor();
    }

}

class MiClase extends MiClaseAbstracta {
    protected function obtenerValor(){
        return "Mensaje de la clase MiClase";
    }
    
    public function asignarValor($valor){
        return "El valor de la variable es: " . $valor;
    }
}

$clase = new MiClase();

$clase->imprimirValor();
echo "<br>";
echo $clase->asignarValor(100);
echo "<br><br>";


abstract class Programador {
    protected $nombre;
    protected $ingresos;

    public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->ingresos = $salario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getSalarioBase() {
        return $this->ingresos;
    }

    abstract public function calcularIngreso();
}

class Emprendedor extends Programador {
    private $bono;

    public function __construct($nombre, $ingreso, $bono) {
        parent::__construct($nombre, $ingreso);
        $this->bono = $bono;
    }

    public function calcularIngreso() {
        return $this->ingresos + $this->bono;
    }
}

class Freelancer extends Programador {
    private $horasTrabajadas;
    private $tarifaHora;

    public function __construct($nombre, $salarioBase, $horasTrabajadas, $tarifaHora) {
        parent::__construct($nombre, $salarioBase);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->tarifaHora = $tarifaHora;
    }

    public function calcularIngreso() {
        return $this->ingresos + ($this->horasTrabajadas * $this->tarifaHora);
    }
}

class Empleado extends Programador {
    public function calcularIngreso() {
        return $this->ingresos;
    }
}

$emprendedor = new Emprendedor("Hugo Cardona", 7000, 1000);
$freelancer = new Freelancer("Fernando Gomez", 3000, 90, 18);
$empleado = new Empleado("Ana Fernandez", 2000);

echo "Salario de Emprendedor: $" . $emprendedor->calcularIngreso() . "<br>";
echo "Salario de Freelancer: $" . $freelancer->calcularIngreso() . "<br>";
echo "Salario de Empleado: $" . $empleado->calcularIngreso();


?>