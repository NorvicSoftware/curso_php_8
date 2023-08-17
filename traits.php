<?php

class Libro {
    public function titulo($nombre){
        echo "Libro: ".  $nombre;
    }
}

trait LibrosBiograficos {
    public function descripcionBiografica(){
        echo "Contienen aspectos en los que se narra la vida de una persona";
    }
}

class Lector extends Libro {
    use LibrosBiograficos;
    public function formato($formato){
        echo "Formato: " . $formato;
    }
}

$libro = new Lector();
$libro->titulo("Steve Jobs");
$libro->descripcionBiografica();
$libro->formato("Electronico");
echo "<br><br>";


trait Geolocalizacion {
    public function obtenerUbicacionActual() {
        $latitud = -17.370764;
        $longitud = -66.185385;
        return [$latitud, $longitud];
    }

    public function calcularDistancia($latitud1, $longitud1, $latitud2, $longitud2) {
        $radioTierra = 6371;
        $dLat = deg2rad($latitud2 - $latitud1);
        $dLon = deg2rad($longitud2 - $longitud1);

        $a = sin($dLat / 2) * sin($dLat / 2) +
             cos(deg2rad($latitud1)) * cos(deg2rad($latitud2)) *
             sin($dLon / 2) * sin($dLon / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distancia = $radioTierra * $c;

        return $distancia;
    }
}

class Usuario {
    use Geolocalizacion;

    public function mostrarUbicacionActual() {
        $ubicacion = $this->obtenerUbicacionActual();
        $latitud = $ubicacion[0];
        $longitud = $ubicacion[1];
        echo "Ubicación actual: Latitud $latitud, Longitud $longitud<br>";
    }
}

$usuario = new Usuario();
$usuario->mostrarUbicacionActual();

$distancia = $usuario->calcularDistancia(-17.370764, -66.185385, -17.806572, -63.187598);
echo "Distancia entre ubicaciones: $distancia km";





?>