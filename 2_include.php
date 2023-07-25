<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir archivos en PHP</title>
</head>
<body>    
    <?php
        echo "<h1>Incluir archivos en PHP</h1>";

        echo "<h2>Ejemplo 1 de incluir</h2>";
        //Tenemos este footer y hacemos esto
        include './incluir/footer.php';

    
        echo "<hr><h2>Ejemplo 2</h2>";

        include './incluir/menu.php';

        echo "<hr><h2>Ejemplo 3</h2>";
        include './incluir/vars.php';
        echo "I have a $color $car.";

        //Con require, si no encuentra el archivo, deja de ejecutar el codigo
        // require 'noFileExists.php';
        // echo "I have a $color $car.";

        

    ?>
    
    
</body>
</html>