<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj użytkownika</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    include "menu_template.php"; 
    if ($_SESSION["user_role"] != "admin") {
        header("Location: podstrona1.php");
    }
    ?>

    <form action="" method="POST">
        <h2>Usuń użytkownika:</h2>

        <select name="user_id">
            <?php
                $con = mysqli_connect("localhost", "root", "", "5c_php_session");
                
                $result = mysqli_query($con, "SELECT * FROM users");
                
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row["id"] . "'>" . $row["login"] . "</option>";
                }
            ?>
        </select>
        <button type="submit">Usuń</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        @$user_id = $_POST["user_id"];

        $con = mysqli_connect("localhost", "root", "", "5c_php_session");

        if (mysqli_query($con, "DELETE FROM users WHERE id='$user_id'")) {
            echo "<p class='success-msg'>Pomyślnie usunięto użytkownika</p>";
        } else {
            echo "<p class='error-msg'>Użytkownik o tym loginie już istnieje</p>";
        }
    }
    ?>
</body>
</html>