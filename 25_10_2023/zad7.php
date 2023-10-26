<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0') {
            echo "Odświeżanie nie liczy się do licznika!!!";
            echo "<p>Odwiedziłeś stronę już " . $_COOKIE["counter2"] . " razy</p>";
        } else {
            if (!isset($_COOKIE["counter2"])) {
                setcookie("counter2", 1, time() + 86400 * 30, "/");
                echo "<p>Odwiedziłeś stronę po raz pierwszy</p>";
            } else {
                setcookie("counter2", $_COOKIE["counter2"] + 1, time() + 86400 * 30, "/");
                echo "<p>Odwiedziłeś stronę już " . $_COOKIE["counter2"] + 1 . " razy</p>";
                if ($_COOKIE["counter2"] + 1 >= 10) {
                    echo "<p>Odwiedziłeś stronę ponad 10 razy!!!</p>";
                } 
            }
        }
    ?>
</body>
</html>