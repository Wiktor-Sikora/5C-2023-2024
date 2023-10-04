<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="n">podaj rok:</label><br>
        <input type="number" name="n" id="n"><br>
        <button type="submit">Wyślij</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $n = $_POST["n"];
        
        if ($n % 400 == 0 || ($n % 100 != 0 && $n % 4 == 0)) {
            echo "$n jest rokiem przestępnym";
        } else {
            echo "$n nie jest rokiem przestępnym";
        }
    }
    ?>
</body>
</html>