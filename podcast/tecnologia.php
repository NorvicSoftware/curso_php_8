<?php
namespace Podcast;

class Tecnologia {
    public $nombre;
    public $conductor;
    public $capitulo;

    public function __construct($nombre, $conductor, $capitulo) {
        $this->nombre = $nombre;
        $this->conductor = $conductor;
        $this->capitulo = $capitulo;
    }
}

?>