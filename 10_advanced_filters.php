<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros PHP avanzados</title>
</head>
<body>    
    <h1>Validar un entero dentro de un rango</h1>
    <p>El siguiente ejemplo usa la filter_var()función para verificar si una variable es de tipo INT y está entre 1 y 200:</p>

    <?php
    $int = 122;
    $min = 1;
    $max = 200;

    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
      echo("Variable value is not within the legal range");
    } else {
      echo("Variable value is within the legal range");
    }
    ?>
    <hr>

    <h1>Validar dirección IPv6</h1>
    <p>El siguiente ejemplo usa la filter_var()función para verificar si la variable $ip es una dirección IPv6 válida:</p>

    <?php
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
      echo("$ip is a valid IPv6 address");
    } else {
      echo("$ip is not a valid IPv6 address");
    }
    ?>
    <hr>

    <h1>Validar URL: debe contener QueryString</h1>

    <p>El siguiente ejemplo usa la filter_var()función para verificar si la variable $url es una URL con una cadena de consulta:</p>

    <?php
    $url = "https://www.w3schools.com";

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
      echo("$url is a valid URL with a query string");
    } else {
      echo("$url is not a valid URL with a query string");
    }
    ?>
    <hr>

    <h1>Eliminar caracteres con valor ASCII > 127</h1>
    <p>El siguiente ejemplo usa la filter_var()función para desinfectar una cadena. Eliminará todas las etiquetas HTML y todos los caracteres con valor ASCII > 127 de la cadena:</p>

    <?php
    $str = "<h1>Hello WorldÆØÅ!</h1>";

    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;
    ?>













</body>
</html>