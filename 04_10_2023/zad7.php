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
        <label for="n3">podaj trzecią liczbę:</label><br>
        <input type="number" name="n3" id="n3"><br>
        <button type="submit">Wyślij</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
    
        if ($n1 < $n2 && $n1 < $n3) {
            echo "twoja pierwsza liczba, czyli $n1 jest najmniejsza";
        } elseif ($n2 < $n1 && $n2 < $n3) {
            echo "twoja druga liczba, czyli $n2 jest najmniejsza";
        } elseif ($n3 < $n1 && $n3 < $n2) {
            echo "twoja trzecia liczba, czyli $n3 jest najmniejsza";
        } else {            
            echo "niektóre z twoich liczb są takie same";
        }
    }
    ?>
</body>
</html>