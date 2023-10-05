<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="x">podaj x:</label><br>
        <input type="number" name="x" id="x"><br>
        <label for="y">podaj y:</label><br>
        <input type="number" name="y" id="y"><br>
        <button type="submit">Wyślij</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $x = $_POST["x"];
        $y = $_POST["y"];

        for ($i=$x; $i <= $y; $i++) {
            if ($i % 2 == 1) {
                echo "$i ";
            }
        }
    }
    ?>
</body>
</html>