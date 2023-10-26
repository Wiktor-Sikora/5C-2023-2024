<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (!isset($_COOKIE["counter"])) {
            setcookie("counter", 2, time() + 86400 * 30, "/");
            echo "<p>Odwiedziłeś stronę po raz pierwszy</p>";
        } else {
            setcookie("counter", $_COOKIE["counter"] + 1, time() + 86400 * 30, "/");
            echo "<p>Odwiedziłeś stronę już " . $_COOKIE["counter"] . " razy</p>";
            if ($_COOKIE["counter"] >= 10) {
                echo "<p>Odwiedziłeś stronę ponad 10 razy!!!</p>";
            } 
        }
    ?>
</body>
</html>