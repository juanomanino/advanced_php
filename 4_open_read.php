<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y Hora en PHP</title>
</head>
<body>    
    <?php
    echo "<h3>";
    echo "<h2>Abrir archivo y leerlo</h2>";

    $myfile = fopen("./handling/webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("./handling/webdictionary.txt"));
    fclose($myfile);

    echo "<br>";

    echo "<hr><h2>Abrir  primera linea del archivo y leerlo</h2>";


    $myfile = fopen("./handling/webdictionary.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
    echo "<br>";
    echo "</h3>";

    echo "<hr><h2>Revisar final de archivo</h2>";


    $myfile = fopen("./handling/webdictionary.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
    }
    fclose($myfile);

    echo "<br>";

    echo "<hr><h2>Revisar una sla letra</h2>";

    $myfile = fopen("./handling/webdictionary.txt", "r") or die("Unable to open file!");
    // Output one character until end-of-file
    while(!feof($myfile)) {
      echo fgetc($myfile);
    }
    fclose($myfile);




    
    ?>
    
    
</body>
</html>