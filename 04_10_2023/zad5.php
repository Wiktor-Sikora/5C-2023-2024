<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="n">podaj wiek:</label><br>
        <input type="number" name="n" id="n"><br>
        <button type="submit">Wyślij</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $n = $_POST["n"];
        
        if ($n < 0) {
            echo "jeszcze się nie urodziłeś?";
        } elseif ($n < 11) {
            echo "jesteś dzieckiem";
        } elseif ($n < 18) {
            echo "jesteś nastolatkiem";
        } else {
            echo "jesteś dorosły";
        }
    }
    ?>
</body>
</html>