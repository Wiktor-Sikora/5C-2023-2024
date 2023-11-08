<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">PLN do przeliczenia</label><br>
        <input type="number" placeholder="PLN" name="pl" step="0.01" required><br>
        <label for="">Przelicz na: </label>
        <select name="currency" required><br>
            <option value="usd">USD</option>
            <option value="euro">EURO</option>
            <option value="chf">FRANK</option>
        </select><br>
        <button type="submit">Wyślij</button>
    </form>

    <h3>Kantor:</h3>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            @$pl = $_POST["pl"];
            @$currency = $_POST["currency"];

            switch ($currency) {
                case "usd":
                    echo "<p>$pl PLN to " . $pl * 3.21 . " USD</p>";
                    break;
                case "euro":
                    echo "<p>$pl PLN to " . $pl * 4.32 . " EURO</p>";
                    break;
                case "chf":
                    echo "<p>$pl PLN to " . $pl * 3.98 . " Franków</p>";
                    break;
            }
        }
    ?>
</body>
</html>