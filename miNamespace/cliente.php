<?php
require_once __DIR__ . '/../miNamespace/persona.php';

use \miNamespace\Persona;

$cliente = new Persona();
echo $cliente->saludar('Juan carlos');

?>