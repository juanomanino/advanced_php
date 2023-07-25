<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $cumpleanios = $_POST["cumpleanios"];

    if (!empty($nombre) && !empty($cumpleanios)) {
        $registro = "Nombres: $nombre, Cumpleanos: $cumpleanios\n";

        // Abre o crea el archivo "registros.txt" en modo append
        $archivo = fopen("registros.txt", "a");
        fwrite($archivo, $registro);
        fclose($archivo);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Registro</title>
</head>
<body>
    <h1>Crear Registro</h1>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="cumpleanios">Cumpleaños:</label>
        <input type="text" id="cumpleanios" name="cumpleanios" required><br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>