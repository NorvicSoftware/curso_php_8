<?php

interface Vehiculo2 {
    public function obtenerTipo();
    public function cantidadRuedas();
}

class Motocicleta implements Vehiculo2 {

    public function obtenerTipo() {
        return "Scooter";
    }

    public function cantidadRuedas() {
        return 2;
    }

    public function obtenerModelo(){
        return "AM 2020";
    }
}

$scooter = new Motocicleta();
echo "Tipo: " . $scooter->obtenerTipo();
echo "<br>";
echo "Ruedas: " . $scooter->cantidadRuedas();
echo "<br>";
echo "Modelo: " . $scooter->obtenerModelo();
echo "<br><br>";



interface Reproductor {
    public function reproducir($archivo);
    public function pausar();
    public function detener();
}


class ReproductorAudio implements Reproductor {
    public function reproducir($archivo) {
        echo "Reproduciendo archivo de audio: $archivo<br>";
    }

    public function pausar() {
        echo "Audio pausado<br>";
    }

    public function detener() {
        echo "Audio detenido<br>";
    }
}

class ReproductorVideo implements Reproductor {
    public function reproducir($archivo) {
        echo "Reproduciendo archivo de video: $archivo<br>";
    }

    public function pausar() {
        echo "Video pausado<br>";
    }

    public function detener() {
        echo "Video detenido<br>";
    }
}

$reproductorAudio = new ReproductorAudio();
$reproductorVideo = new ReproductorVideo();

$reproductorAudio->reproducir("cancion.mp3");
$reproductorAudio->pausar();
$reproductorAudio->detener();

$reproductorVideo->reproducir("pelicula.mp4");
$reproductorVideo->pausar();
$reproductorVideo->detener();


?>