<?php

require_once __DIR__ . '/podcast/tecnologia.php';
require_once __DIR__ . '/podcast/entretenimiento.php';
require_once __DIR__ . '/podcast/noticias.php';

use Podcast\Tecnologia;
use Podcast\Entretenimiento;
use Podcast\Noticias;

$tecnologia = new Tecnologia('Laravel news', 'Franz Dev', 35);
$entretenimiento = new Entretenimiento('Honda Space', 'Hugo Vargas', 2);
$noticias = new Noticias('CNN', 'Guztavo Medina', 200);

echo "Podcast tecnologia: " . $tecnologia->nombre . " Conductor: " . $tecnologia->conductor . " Capitulo: " . $tecnologia->capitulo . "<br>";
echo "Podcast entretenimiento: " . $entretenimiento->nombre . " Conductor:" . $entretenimiento->conductor . " Capitulo: " . $entretenimiento->capitulo . "<br>";
echo "Podcast noticias: " . $noticias->nombre . " Conductor: " . $noticias->conductor . " Capitulo: " . $noticias->capitulo . "<br>";




?>