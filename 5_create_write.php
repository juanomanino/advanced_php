<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear archivos en PHP</title>
</head>
<body>    
    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    echo "<hr><h2>Crear archivo</h2>";

    $myfile = fopen("./crear/testfile.txt", "w");


    echo "<hr><h2>Escribir archivo</h2>";

    $myfile = fopen("./crear/newfile.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);

    echo "<hr><h2>Sobreescribir archivo</h2>";



    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "Mickey Mouse\n";
    fwrite($myfile, $txt);
    $txt = "Minnie Mouse\n";
    fwrite($myfile, $txt);
    fclose($myfile);


    echo "<hr><h2>Añadir al archivo</h2>";


    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = "Donald Duck\n";
    fwrite($myfile, $txt);
    $txt = "Goofy Goof\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    
    ?>
    
    
</body>
</html>