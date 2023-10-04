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
    
        if ($n < 0) {
            echo "twoja liczba jest mniejsza od 0";
        } elseif ($n == 0) {
            echo "twoja liczba jest równa 0";
        } else {
            echo "twoja liczba jest większa od 0";
        }
    }
    ?>
</body>
</html>