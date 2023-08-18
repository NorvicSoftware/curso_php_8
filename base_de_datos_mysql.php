<?php

$servername = "localhost";
$username = "root";
$password = "Scaf123Bisa#";
$dbname = "curso_php8";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos MySQL";
echo "<br>";

$sql = "INSERT INTO alumnos (nombre, edad, carrera)
        VALUES ('Juan Bravo', 23, 'Sistemas informaticos')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conn->error;
}
echo "<br>";

$sql2 = "UPDATE alumnos SET nombre = 'Juan Delgado', edad = 19 WHERE id = 1";

if ($conn->query($sql2) === TRUE) {
    echo "Datos actulizados correctamente";
} else {
    echo "Error al actualizar datos: " . $conn->error;
}
echo "<br>";

$sql3 = "DELETE FROM alumnos WHERE id = 2";

if ($conn->query($sql3) === TRUE) {
    echo "Datos eliminados correctamente";
} else {
    echo "Error al eliminar datos: " . $conn->error;
}
echo "<br>";

$sql1 = "SELECT * FROM alumnos";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nombre: " . $row["nombre"] . " - Edad: " . $row["edad"] . " - Carrera:" . $row["carrera"] . "<br>";
    }
} else {
    echo "0 resultados";
}


// Cerrar la conexión
$conn->close();


?>