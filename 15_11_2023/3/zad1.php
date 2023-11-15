<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Wypełnij formularz 🥺</h3>
    <form action="" method="POST">
        <label for="">Data urodzenia:</label><br>
        <input type="date" name="birthdate" required><br>
        <label for="">Płeć:</label><br>
        <select name="gender" required>
            <option value="Mężczyzna">Mężczyzna</option>
            <option value="Kobieta">Kobieta</option>
            <option value="Inna">Inna</option>
        </select><br>
        <label for="">Uwagi:</label><br>
        <textarea name="comments" cols="30" maxlength="100" rows="10" required></textarea><br>
        <label for="">Czy zgadzasz się na agregację danych: </label><input type="checkbox" name="agreement" required><br>
        <button type="submit">Wyślij</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            @$date = $_POST["date"];
            @$gender = $_POST["gender"];
            @$comments = $_POST["comments"];
            @$agreement = $_POST["agreement"];

            $con = mysqli_connect("localhost", "root", "", "5c");

            $result = mysqli_query($con, "INSERT INTO customer_info (id, birthdate, gender, comments, agreement) VALUES (NULL, '$date', '$gender', '$comments', '$agreement')");

            if (mysqli_affected_rows($con) > 0) {
                echo "<p>pomyślnie dodano opinie</p>";
            } else {
                echo "<p>wystąpił błąd</p>";
            }
        }
    ?>
</body>
</html>