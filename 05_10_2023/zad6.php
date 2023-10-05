<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="n1">podaj wysokość twojego prostokąta:</label><br>
        <input type="number" name="n1" id="n1"><br>
        <label for="n2">podaj długość twojego prostokąta:</label><br>
        <input type="number" name="n2" id="n2"><br>
        <button type="submit">Wyślij</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];

        if ($n1 < 1 || $n2 < 1) {
            echo "prostokąt musi mieć wymiary przynajmniej 1 na 1";
        } else {
            for ($i1 = 1; $i1 <= $n1; $i1++) {
                echo "<p>"; 
                for ($i2=1; $i2 <= $n2 ; $i2++) {
                    if ($i1 == 1 || $i1 == $n1) {
                        echo "*";
                    } elseif ($i2 == 1 || $i2 == $n2) {
                        echo "*";
                    } else {
                        echo "&nbsp;&nbsp;";
                    }
                }
                echo "</p>"; 
            }
        }
    }
    ?>
</body>
</html>
