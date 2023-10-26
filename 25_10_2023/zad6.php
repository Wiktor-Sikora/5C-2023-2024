<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Data twoich urodzin:</label><br>
        <input type="date" name="birthday" id="" required><br>
        <button type="submit">Wyślij</button>
    </form>    

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            setcookie("birthday", $_POST["birthday"], time() + 86400 * 365 * 10, "/");
        } 

        if (isset($_COOKIE["birthday"])) {
            if ($_COOKIE["birthday"] == date("Y-m-d")) {
                echo "Wszystkiego najlepszego!!! 🎂 🎉🎉🎉";
            }
        }
    ?>
</body>
</html>