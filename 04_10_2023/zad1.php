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
        <input type="number" name="n" id="n">
        <button type="submit">Wyślij</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $n = $_POST["n"];
    
        if ($n % 2 == 0) {
            echo "twoja liczba jest parzysta";
        } else {
            echo "twoja liczba jest nieparzysta ";
        }
    }
    ?>
</body>
</html>