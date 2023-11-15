<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Dodaj ocenę ✒️</h3>
    <form action="" method="POST">
        <label for="">Imie:</label><br>
        <input type="text" name="firstname" required><br>
        <label for="">Nazwisko:</label><br>
        <input type="text" name="lastname" required><br>
        <label for="">Ocena:</label><br>
        <input type="number" name="rating" required><br>
        <button type="submit">Wyślij</button>
    </form>

    <?php
        $con = mysqli_connect("localhost", "root", "", "5c");

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            @$firstname = $_POST["firstname"];
            @$lastname = $_POST["lastname"];
            @$rating = $_POST["rating"];

            mysqli_query($con, "INSERT INTO oceny (id, firstname, lastname, rating) VALUES ('', '$firstname', '$lastname', $rating)");

            if (mysqli_affected_rows($con) > 0) {
                echo "<p>pomyślnie dodano Ocenę</p>";
            } else {
                echo "<p>wystąpił błąd</p>";
            }
        }

        $result = mysqli_query($con, "SELECT * FROM oceny");

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row["firstname"] . " - " .  $row["lastname"] . " - " .  $row["rating"] . "</p>";
            }
        }

        $result = mysqli_query($con, "SELECT AVG(rating) as avg FROM oceny");
        echo "<p>Średnia ocen: " . mysqli_fetch_assoc($result)['avg'] . "</p>";
    ?>
</body>
</html>