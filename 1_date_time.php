<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y Hora en PHP</title>
</head>
<body>
    <?php
    echo "<h1>Fecha y Hora en PHP</h1>";
    echo "<h2>Conseguir Fecha</h2>";


    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");


    echo "<hr><h2>Año de Copyright de sitio web</h2>";
    //&copy; 2010-<?php echo date("Y");




    echo "<hr><h2>La hora con detalles</h2>";

    echo "La hora es " . date("h:i:sa");




    echo "<hr><h2>Zona Horaria</h2>";
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa");




    echo "<hr><h2>Fecha con mktime </h2>";
    $d=mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);




    echo "<hr><h2>Fecha con srttotime </h2>";

    $d=strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("Y-m-d h:i:sa", $d);


    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";


    echo "<hr><h2>Ejemplos variados </h2>";
    //Fecha de los siguientes seis sabados
    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
    }

    //Núm de días hasta el 4 de julio
    $d1=strtotime("July 04");
    $d2=ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 ." days until 4th of July.";










    ?>
    
</body>
</html>