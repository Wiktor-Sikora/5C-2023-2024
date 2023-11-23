<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmień hasło</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "menu_template.php"; ?>

    <form action="" method="POST">
        <h2>Zmień hasło:</h2>
        <label for="">Stare hasło:</label><br>
        <input type="password" name="password_old" placeholder="hasło" required><br>
        <label for="">Twoje nowe hasło:</label><br>
        <input type="password" name="password1" placeholder="hasło" required><br>
        <label for="">Powtórz nowe hasło:</label><br>
        <input type="password" name="password2" placeholder="hasło" required><br>
        <button type="submit">Zmień</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        @$password_old = $_POST["password_old"];
        @$password1 = $_POST["password1"];
        @$password2 = $_POST["password2"];

        $current_user_id = $_SESSION["user_id"];
        $con = mysqli_connect("localhost", "root", "", "5c_php_session");

        $result = mysqli_query($con, "SELECT * FROM users WHERE id='$current_user_id'");

        if (mysqli_num_rows($result) == 1) {
            $result = mysqli_fetch_row($result);

            if ($password_old == $result[2] && $password1 == $password2) {

                mysqli_query($con, "UPDATE users SET password='$password1' WHERE id='$current_user_id'");
                
                echo "<p class='success-msg'>Hasło zmienione pomyślnie</p>";
                header('Refresh: 2; URL = podstrona1.php');
            } else {
                echo "<p class='error-msg'>Podane przez ciebie dane są błędnę</p>";
            }
        } else {
            echo "<p class='error-msg'>Wystąpił błąd</p>";
        }


    }
    ?>
</body>
</html>