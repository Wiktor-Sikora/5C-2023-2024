<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="n">podaj liczbę:</label><br>
        <input type="number" name="n" id="n"><br>
        <button type="submit">Wyślij</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $n = $_POST["n"];
    
        if ($n >=  100 &&  $n < 150) {
            echo "twoja liczba mieści się w przedziale <100,150)";
        } else {
            echo "twoja liczba nie mieści się w przedziale <100,150)";
        }
    }
    ?>
</body>
</html>