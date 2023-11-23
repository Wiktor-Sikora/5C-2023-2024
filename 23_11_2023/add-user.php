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
        <h2>Dodaj użytkownika:</h2>
        <label for="">login nowego użytkownika:</label><br>
        <input type="text" name="login" placeholder="login" required><br>
        <label for="">hasło nowego użytkownika:</label><br>
        <input type="password" name="password" placeholder="hasło" required><br>
        <label for="">rola nowego użytkownika:</label><br>
        <input type="text" name="role" placeholder="hasło" required><br>
        <button type="submit">Zmień</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        @$login = $_POST["login"];
        @$password = $_POST["password"];
        @$role = $_POST["role"];

        $con = mysqli_connect("localhost", "root", "", "5c_php_session");

        if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE login='$login'")) == 0) {
            if (mysqli_query($con, "INSERT INTO users (id, login, password, role) VALUES (NULL, '$login', '$password', '$role')")) {
                echo "<p class='success-msg'>Pomyślnie dodano użytkownika</p>";
            } else {
                echo "<p class='error-msg'>Wystąpił błąd</p>";
            }
        } else {
            echo "<p class='error-msg'>Użytkownik o tym loginie już istnieje</p>";
        }

        


    }
    ?>
</body>
</html>