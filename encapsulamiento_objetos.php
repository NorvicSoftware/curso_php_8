<?php

class MiClase{
    public $valor1 = "Publico";
    protected $valor2 = "Protegido";
    private $valor3 = "Privado";

    public function ImprimirValorPublico(){
        echo "Valor desde función: " . $this->valor1;
        echo "<br>";
    }

    public function ImprimirValorProtegido(){
        echo "Valor desde función: " . $this->valor2;
        echo "<br>";
    }

    public function ImprimirValorPrivado(){
        echo "Valor desde función: " . $this->valor3;
        echo "<br>";
    }
}

class MiClase2 extends MiClase{
    public function imprimirValorProtegido2(){
        echo "Valor desde función: " . $this->valor2;
    }
}

$valor = new MiClase();
echo "Valor: " . $valor->valor1;
echo "<br>";
$valor->ImprimirValorPublico();
echo "<br>";

$valor->ImprimirValorProtegido();
$valor2 = new MiClase2();
$valor2->imprimirValorProtegido2();
echo "<br><br>";

$valor->ImprimirValorPrivado();

echo "<br><br>";

class CuentaBancaria {
    private $saldo;
    private $titular;

    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function depositar($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
            echo "Depósito de" . $monto . " realizado correctamente.<br>";
        } else {
            echo "El monto del depósito debe ser mayor que cero.<br>";
        }
    }

    public function retirar($monto) {
        if ($monto > 0 && $monto <= $this->saldo) {
            $this->saldo -= $monto;
            echo "Retiro de " . $monto . " realizado correctamente.<br>";
        } else {
            echo "Monto inválido para el retiro o saldo insuficiente.<br>";
        }
    }
}


$cuenta = new CuentaBancaria("Alex Bravo", 1000);

echo "Titular: " . $cuenta->getTitular() . "<br>";
echo "Saldo actual: $" . $cuenta->getSaldo() . "<br>";
$cuenta->depositar(1530);
$cuenta->retirar(150);
echo "Saldo actual: $" . $cuenta->getSaldo();




?>