<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP y JSON</title>
</head>
<body>
    <h1>PHP - json_encode ()</h1>
    <p>La función json_encode() se usa para codificar un valor en formato JSON.</p>

    <?php
    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

    echo json_encode($age);
    ?>
    <p>Este ejemplo muestra cómo codificar una matriz indexada en una matriz JSON:</p>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");

    echo json_encode($cars);
    ?>
    <hr>
    <h1>PHP - json_decode ()</h1>
    <p>La función json_decode() se usa para decodificar un objeto JSON en un objeto PHP o una matriz asociativa.</p>

    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj));
    ?>

    <p>La función json_decode() devuelve un objeto de forma predeterminada. La función json_decode() tiene un segundo parámetro y, cuando se establece en verdadero, los objetos JSON se decodifican en matrices asociativas.</p>

    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj, true));
    ?>
    <hr>

    <h1>PHP - Acceso a los valores decodificados</h1>
    <p>Aquí hay dos ejemplos de cómo acceder a los valores decodificados desde un objeto y desde una matriz asociativa:</p>


    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    echo $obj->Peter;
    echo $obj->Ben;
    echo $obj->Joe;
    ?>
    <p>Este ejemplo muestra cómo acceder a los valores de una matriz asociativa de PHP:</p>

    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $arr = json_decode($jsonobj, true);

    echo $arr["Peter"];
    echo $arr["Ben"];
    echo $arr["Joe"];
    ?>
    <hr>
    <h1>PHP - Bucle a través de los valores</h1>
    <p>También puede recorrer los valores con un bucle foreach() :</p>

    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    foreach($obj as $key => $value) {
      echo $key . " => " . $value . "<br>";
    }
    ?>
    <p>Este ejemplo muestra cómo recorrer los valores de una matriz asociativa de PHP:</p>

    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $arr = json_decode($jsonobj, true);

    foreach($arr as $key => $value) {
      echo $key . " => " . $value . "<br>";
    }
    ?>




</body>
</html>