<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>HOLA AMIGUITOS</h1>
    <?php
    echo 'Hello World';
    echo "<h1>Pratt's Site</h1>";
    echo "<hr>";
    echo "<p>This is my site </p>";

    $characterName = "Pratt";
    $characterAge = 23;
    echo "Probando variables en php, nombre: $characterName, edad: $characterAge <br>";
    $characterName = "Miauri";
    echo "Probando variables en php, nombre: $characterName, edad: $characterAge <br>";
    $characterAge = 26;
    echo "Probando variables en php, nombre: $characterName, edad: $characterAge <br>";

    echo '<hr>';

    $phrase2 = 'Giraffe Academy';
    echo strtolower($phrase2);
    echo strtoupper($phrase2);
    echo strlen($phrase2);
    echo $phrase2[0];
    echo $phrase2[4];
    echo $phrase2[8];
    // $phrase2[2] = "X";
    echo "<hr>";
    echo str_replace("Giraffe", "Panda", $phrase2)

    ?>
</body>

</html>