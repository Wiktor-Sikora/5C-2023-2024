<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Imie:</label><br>
        <input type="text" name="imie" required><br>
        <label for="">Nazwisko:</label><br>
        <input type="text" name="nazwisko" required><br>
        <label for="">Data urodzenia:</label><br>
        <input type="date" name="data_urodzenia" required><br>
        <button type="submit">Wyślij</button><br>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        @$imie = $_POST["imie"];
        @$nazwisko = $_POST["nazwisko"];
        @$data_urodzenia = $_POST["data_urodzenia"];

        $con = mysqli_connect("localhost", "root", "", "5c");

        $result = mysqli_query($con, "INSERT INTO klasa (id, imie, nazwisko, data_urodzenia) VALUES (NULL, '$imie', '$nazwisko', '$data_urodzenia')");

        if (mysqli_affected_rows($con) > 0) {
            echo "<p>pomyślnie dodano $imie $nazwisko</p>";
        } else {
            echo "<p>wystąpił błąd</p>";
        }
    }
    ?>
</body>
</html>