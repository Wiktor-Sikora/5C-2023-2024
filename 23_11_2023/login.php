<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj się</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <h2>Zaloguj się:</h2>
        <label for="">Login do twojego konta:</label><br>
        <input type="text" name="login" placeholder="login" required><br>
        <label for="">Hasło do twojego konta:</label><br>
        <input type="password" name="password" placeholder="hasło" required><br>
        <button type="submit">Zaloguj się</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        @$login = $_POST["login"];
        @$password = $_POST["password"];

        $con = mysqli_connect("localhost", "root", "", "5c_php_session");

        $result = mysqli_query($con, "SELECT * FROM users WHERE login='$login' and password='$password'");
        if (mysqli_num_rows($result) == 1) {
            $result = mysqli_fetch_row($result);
            if ($result[1] == $login && $result[2] == $password) {
                session_start();

                $_SESSION["auth"] = true;
                $_SESSION["user_id"] = $result[0];
                $_SESSION["user_login"] = $result[1];
                $_SESSION["user_role"] = $result[3];

                header("Location: podstrona1.php");
            } else {
                echo "<p class='error-msg'>Błędna nazwa użytkownika</p>";
            }
        } else {
            echo "<p class='error-msg'>Błędna nazwa użytkownika</p>";
        }
    }
    ?>
</body>
</html>