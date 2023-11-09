<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Podaj a funkcji</label><br>
        <input type="number" name="a" placeholder="a"><br>
        <label for="">Podaj b funkcji</label><br>
        <input type="number" name="b" placeholder="b"><br>
        <button type="submit">Wyślij</button><br>
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            @$a = $_POST["a"];
            @$b = $_POST["b"];

            echo "<p>Wynik: " . abs($a - $b) / 2 . "</p>";
        }
    ?>
</body>
</html>