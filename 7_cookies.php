<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);


setcookie("test_cookie", "test", time() + 3600, '/');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies en PHP</title>
</head>
<body>    
    <?php

    // echo "<hr><h2>Crear-Recoger Cookie</h2>";

    // if(!isset($_COOKIE[$cookie_name])) {
    //     echo "Cookie named '" . $cookie_name . "' is not set!";
    //     } else {
    //     echo "Cookie '" . $cookie_name . "' is set!<br>";
    //     echo "Value is: " . $_COOKIE[$cookie_name];
    //     }

    //echo "Cookie 'user' is deleted.";

    echo "<br>";

    if(count($_COOKIE) > 0) {
        echo "Cookies are enabled.";
      } else {
        echo "Cookies are disabled.";
      }

    
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    ?>
    
    
</body>
</html>