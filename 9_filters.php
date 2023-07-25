<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros php</title>
</head>
<body>    
    <h1>La extensión de filtro PHP</h1>
    <p>Los filtros PHP se utilizan para validar y desinfectar la entrada externa.

    La extensión de filtro PHP tiene muchas de las funciones necesarias para verificar la entrada del usuario y está diseñada para hacer que la validación de datos sea más fácil y rápida.

    La filter_list()función se puede usar para enumerar lo que ofrece la extensión de filtro PHP:</p>

    <table>
      <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
      </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
  </table>
  <hr>

  <h1>
  Desinfectar una cuerda
  </h1>

  <p>El siguiente ejemplo usa la filter_var()función para eliminar todas las etiquetas HTML de una cadena:</p>

  <?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
echo"<hr>"
?>

<h1>Validar un entero</h1>

<p>El siguiente ejemplo usa la filter_var()función para verificar si la variable $int es un número entero. Si $int es un número entero, la salida del siguiente código será: "El número entero es válido". Si $int no es un número entero, la salida será: "El número entero no es válido":
</p>

<?php
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
?>
<hr>

<h1>Sugerencia: filter_var() y problema con 0</h1>

<p>En el ejemplo anterior, si $int se estableció en 0, la función anterior devolverá "El número entero no es válido". Para resolver este problema, utilice el siguiente código:</p>

<?php
$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
?>
<hr>
<h1>Validar una dirección IP</h1>
<p>El siguiente ejemplo usa la filter_var()función para verificar si la variable $ip es una dirección IP válida:</p>


<?php
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}
?>
<hr>

<h1>Desinfectar y validar una dirección de correo electrónico</h1>

<p>El siguiente ejemplo usa la filter_var()función para eliminar primero todos los caracteres ilegales de la variable $email, luego verifica si es una dirección de correo electrónico válida:</p>

<?php
$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
?>
<hr>

<h1>Desinfectar y validar una URL</h1>

<p>El siguiente ejemplo usa la filter_var()función para eliminar primero todos los caracteres ilegales de una URL y luego verificar si $url es una URL válida:</p>


<?php
$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}
?>













</body>
</html>