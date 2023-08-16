<?php

class Laptop {
    public $marca;
    public $modelo;
    public $color;
    private $serie;

    function __construct($marca, $modelo, $color, $serie){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->serie = $serie;
    }

    public function iterarLaptop(){
        echo "Iterar valores de la clase Laptop dentro de la clase <br>";
        foreach ($this as $clave => $valor){
            print "$clave => $valor <br>";
        }
    }
}

$laptop = new Laptop('Apple', 'MacBook Pro', 'Blanco', '2131234212');

echo "Iterar valores de la clase Laptop fuera de la clase <br>";
foreach ($laptop as $clave => $valor){
    print "$clave => $valor<br>";
}
echo "<br><br>";

$laptop->iterarLaptop();
echo "<br><br>";

class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}

$persona1 = new Persona("Juan", 30);
foreach ($persona1 as $clave => $valor) {
    echo "$clave: $valor\n";
}
echo "<br><br>";

class Persona2 {
    public $nombre;
    public $edad;
    public $pais;

    public function __construct($nombre, $edad, $pais) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }
}

$personas = array(
    new Persona2("Daniel Merida", 30, "Mexico"),
    new Persona2("Fernando Carrillo", 25, "Colombia"),
    new Persona2("Carlos Fernandez", 40, "Bolivia")
);

foreach ($personas as $persona) {
    echo "Nombre: " . $persona->nombre . ", Edad: " . $persona->edad . ", País: " . $persona->pais . "<br>";
}


echo "<br><br>";

class Libro {
    public $titulo;
    public $autor;
    public $paginas;
    public $puntuacion;

    public function __construct($titulo, $autor, $paginas, $puntuacion) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->puntuacion = $puntuacion;
    }
}

$libros = array(
    new Libro("Steve Jobs", "Walter Issacson", 550, 5),
    new Libro("MBA", "Josh Kaufman", 370, 4),
    new Libro("Laravel de cero a diez", "Victor Peña", 320, 4),
    new Libro("Lean Startup", "Eric Ries", 350, 4),
    new Libro("Programación en PHP", "Anónimo", 190, 3),
    new Libro("JavaScrip", "Anónimo", 90, 2),
    new Libro("HTML diseño de paginas", "Anónimo", 210, 3),
    new Libro("Programación en Linux", "Anónimo", 150, 3),
    new Libro("PHP basico", "Anónimo", 190, 3),
    new Libro("Programación en Codeigniter", "Anónimo", 157, 3),
    new Libro("Frameworks de PHP", "Anónimo", 190, 4),
);

echo "Libros mas recomendados: <br>";
foreach ($libros as $libro) {
    if($libro->puntuacion >= 4 ) {
        echo "Título: " . $libro->titulo . ", Autor: " . $libro->autor . ", Páginas: " . $libro->paginas . "<br>";
    }

}

?>