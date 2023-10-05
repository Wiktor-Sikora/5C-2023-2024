<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="y">podaj wysokość szachownicy:</label><br>
        <input type="number" name="y" id="y"><br>
        <label for="x">podaj długość szachownicy:</label><br>
        <input type="number" name="x" id="x"><br>
        <button type="submit">Wyślij</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $y = $_POST["y"];
        $x = $_POST["x"];
        
        $flicker = 0;
        if ($x < 1 || $y < 1) {
            echo "szachownica musi mieć wymiary przynajmniej 1 na 1";
        } else {
            for ($i1=1; $i1 <= $y; $i1++) { 
                for ($i2=1; $i2 <= $x; $i2++) {
                    if ($flicker % 2 == 0) {
                        echo "x";
                    } else {
                        echo "o";
                    }
                    $flicker++;
                }
                $flicker++;
                echo "<br>";
            }
        }
    }
    ?>
</body>
</html>