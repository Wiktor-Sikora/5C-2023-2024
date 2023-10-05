<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, tr {
            border: 1px solid;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="n1">podaj ilość wierszy:</label><br>
        <input type="number" name="n1" id="n1"><br>
        <label for="n2">podaj il:</label><br>
        <input type="number" name="n2" id="n2"><br>
        <button type="submit">Wyślij</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        if ($n1 <= 0) {
            echo "ilość wierszy nie może być mniejsza niż 1";
        } else {
            echo "<h2>Tabela:</h2>";
            echo "<table>";
            for ($i1=1; $i1 <= $n1 ; $i1++) { 
                echo "<tr>";
                for ($i2=1; $i2 <= $n2 ; $i2++) { 
                    echo "<th>kocham PHP ❤️ 🥵</th>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>