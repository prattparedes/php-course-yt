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
    echo str_replace("Giraffe", "Panda", $phrase2);
    echo "<br>";
    echo substr($phrase2, 8, 3);
    echo "<hr>";

    echo 40;
    echo -40.85;
    echo 9 + 5;
    echo 12 / 2;
    echo 3 * 4;
    echo "<br>";
    $num = 10;
    $num--;
    echo $num;

    echo "<br> <hr> Form In PHP <hr>"

        ?>
    <form action="site.php" method="get">
        Name: <input type="text" name="name">
        <input type="submit">

    </form>
    <br>
    <?php
    echo $_GET["name"];
    echo "<hr>";
    ?>

    <form action="site.php" method="post">
        Apples: <input type="checkbox" value="apples" name="fruits[]"><br>
        Oranges: <input type="checkbox" value="oranges" name="fruits[]"><br>
        Pineapples: <input type="checkbox" value="pineapples" name="fruits[]"><br>
        Strawberries: <input type="checkbox" value="Strawberries" name="fruits[]"><br>
        <input type="submit">
    </form>
    <?php

    $fruits = $_POST["fruits"];
    echo $fruits[0];
    echo "<hr>";
    ?>

    <form action="site.php" method="post">
        Student: <input type="text" name="student"><br>
        <input type="submit">
    </form>

    <?php
    $grades = array ("Pratt" => "S+", "Moisés" => "A+", "Rodrigo" => "B+");
    echo $grades[$_POST["student"]];
    ?>


</body>

</html>