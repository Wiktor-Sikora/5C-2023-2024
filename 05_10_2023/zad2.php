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
        
        echo "<p>pętla for:</p>";
        $helper = 0;
        for ($i=$x; $i <= $y; $i += 2) { 
            echo "$i ";
        }
        echo "<br>";
        for ($i=$y; $i >= $x; $i -= 4) { 
            echo "$i ";
        }

        echo "<p>pętla while:</p>";
        $i = $x;
        while ($i <= $y) {
            echo "$i ";            
            $i += 2;
        }
        $i = $y;
        echo "<br>";
        while ($i >= $x) {
            echo "$i ";
            $i -= 4;
        }

        echo "<p>pętla do while:</p>";
        $i = $x;
        do {
            echo "$i ";
            $i += 2;
        } while ($i <= $y);
        echo "<br>";
        $i = $y;
        do {
            echo "$i ";
            $i -= 4;
        } while ($i >= $x);
    }
    ?>
</body>
</html>