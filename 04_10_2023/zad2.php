<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="n1">podaj pierwszą liczbę:</label><br>
        <input type="number" name="n1" id="n1"><br>
        <label for="n2">podaj drugą liczbę:</label><br>
        <input type="number" name="n2" id="n2"><br>
        <button type="submit">Wyślij</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
    
        if ($n1 % $n2 == 0) {
            echo "pierwsza liczba jest podzielna przez drugą";
        } else {
            echo "pierwsza liczba nie jest podzielna przez drugą";
        }
    }
    ?>
</body>
</html>