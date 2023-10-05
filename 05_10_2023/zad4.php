<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="n">podaj liczbę którą chcesz sprawdzić na bycię liczbą pierwszą:</label><br>
        <input type="number" name="n" id="n"><br>
        <button type="submit">Wyślij</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $n = $_POST["n"];
    
        $x = 0;
        if ($n <= -2) {
            for ($i=-1; $i >= $n; $i--) { 
                if ($n % $i == 0) {
                    $x++;
                }
            }
        } else {
            for ($i=1; $i <= $n; $i++) { 
                if ($n % $i == 0) {
                    $x++;
                }
            }
        }
        if ($x == 2) {
            echo "$n jest liczbą pierwszą";
        } else {
            echo "$n nie jest liczbą pierwszą";
        }
    }
    ?>
</body>
</html>
