<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "header.html" ?>

    <?php
    echo ('Hola amigos');
    function sayHi($name, $age)
    {
        echo "<br>";
        echo "Hello $name, you are $age";
    }
    sayHi("Pratt", 24);
    sayHi("Julio", 28);
    sayHi("Ninja", 32);

    $isMale = false;
    $isTall = false;

    if ($isMale && $isTall) {
        echo "<br> You are a male and tall";
    } elseif ($isMale && !$isTall) {
        echo "<br> You are a short male";
    } elseif (!$isMale && $isTall) {
        echo "<br> You are not male but are tall";
    } else {
        echo "<br> You are not male and not tall";
    }

    echo "<hr>"
        ?>

    <form action="site2.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>
    <?php
    $grade = $_POST['grade'];
    switch($grade) {
        case "A":
            echo "You did amazing!";
            break;
        case "B":
            echo "You did pretty good";
            break;
        default:
        echo "hola";
    }
    ?>
    <?php include "footer.html" ?>


</body>

</html>