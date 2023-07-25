<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excepciones de PHP</title>
</head>
<body>
    <h1>Lanzar una excepción</h1>
    <p>La throwinstrucción permite que una función o método definido por el usuario genere una excepción. Cuando se lanza una excepción, el código que le sigue no se ejecutará.

    Si no se detecta una excepción, se producirá un error fatal con un mensaje de "Excepción no detectada".

    Intentemos lanzar una excepción sin atraparla:</p>

    <?php
    function divide($dividend, $divisor) {
      if($divisor == 0) {
        throw new Exception("Division by zero");
      }
      return $dividend / $divisor;
    }

    echo divide(5, 0);
    ?>

    <hr>

    <h1>La sentencia try... catch</h1>
    <p>Para evitar el error del ejemplo anterior, podemos usar la try...catchdeclaración para detectar excepciones y continuar el proceso.</p>

    <?php
    try {
        code that can throw exceptions
      } catch(Exception $e) {
        code that runs when an exception is caught
      }
    ?>

    <?php
    function divide2($dividend, $divisor) {
      if($divisor == 0) {
        throw new Exception("Division by zero");
      }
      return $dividend / $divisor;
    }

    try {
      echo divide2(5, 0);
    } catch(Exception $e) {
      echo "Unable to divide.";
    }
    ?>
    <hr>
    <h1>La declaración intentar... atrapar... finalmente</h1>
    <p>La try...catch...finallyinstrucción se puede utilizar para detectar excepciones. El código en el finallybloque siempre se ejecutará independientemente de si se detectó una excepción. Si finallyestá presente, el catchbloque es opcional.</p>
    <?php
    try {
        code that can throw exceptions
      } catch(Exception $e) {
        code that runs when an exception is caught
      } finally {
        code that always runs regardless of whether an exception was caught
      }
    ?>

    <?php
    function divide3($dividend, $divisor) {
      if($divisor == 0) {
        throw new Exception("Division by zero");
      }
      return $dividend / $divisor;
    }

    try {
      echo divide3(5, 0);
    } finally {
      echo "Process complete.";
    }
    ?>

    <p>Muestra una cadena incluso si no se detectó una excepción:</p>

    <?php
    function divide($dividend, $divisor) {
      if($divisor == 0) {
        throw new Exception("Division by zero");
      }
      return $dividend / $divisor;
    }

    try {
      echo divide(5, 0);
    } finally {
      echo "Process complete.";
    }
    ?>

    <hr>
    <h1>El objeto de excepción</h1>
    <p>El objeto de excepción contiene información sobre el error o el comportamiento inesperado que encontró la función.</p>

    <?php
    new Exception(message, code, previous)
    ?>
    <?php
    function divide4($dividend, $divisor) {
      if($divisor == 0) {
        throw new Exception("Division by zero", 1);
      }
      return $dividend / $divisor;
    }

    try {
      echo divide4(5, 0);
    } catch(Exception $ex) {
      $code = $ex->getCode();
      $message = $ex->getMessage();
      $file = $ex->getFile();
      $line = $ex->getLine();
      echo "Exception thrown in $file on line $line: [Code $code]
      $message";
    }
    ?>

</body>
</html>