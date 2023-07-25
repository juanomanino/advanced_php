<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Callback Functions</title>
</head>
<body>
    <h1>Funciones de devolución de llamada</h1>
    <p>Una función de devolución de llamada (a menudo denominada simplemente "devolución de llamada") es una función que se pasa como argumento a otra función.

    Cualquier función existente se puede utilizar como función de devolución de llamada. Para usar una función como función de devolución de llamada, pase una cadena que contenga el nombre de la función como argumento de otra función:

    </p>

    <?php
    function my_callback($item) {
      return strlen($item);
    }

    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map("my_callback", $strings);
    print_r($lengths);
    ?>

    <p>A partir de la versión 7, PHP puede pasar funciones anónimas como funciones de devolución de llamada:</p>

    <?php
    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map( function($item) { return strlen($item); } , $strings);
    print_r($lengths);
    ?>
    <hr>

    <h1>Devoluciones de llamada en funciones definidas por el usuario</h1>

    <p>Las funciones y métodos definidos por el usuario también pueden tomar funciones de devolución de llamada como argumentos. Para usar funciones de devolución de llamada dentro de una función o método definido por el usuario, llámelo agregando paréntesis a la variable y pase argumentos como con las funciones normales:</p>

    <?php
    function exclaim($str) {
      return $str . "! ";
    }

    function ask($str) {
      return $str . "? ";
    }

    function printFormatted($str, $format) {
      // Calling the $format callback function
      echo $format($str);
    }

    // Pass "exclaim" and "ask" as callback functions to printFormatted()
    printFormatted("Hello world", "exclaim");
    printFormatted("Hello world", "ask");
    ?>

















</body>
</html>