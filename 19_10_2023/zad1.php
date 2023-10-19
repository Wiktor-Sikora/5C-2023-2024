<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Pogoda</title>
</head>
<body>
    <h2>Zaloguj się</h2>
    <form action="" method="POST">
        <label for="">Login:</label><br>
        <input type="text" name="login" placeholder="twój login" required><br>
        <label for="">Hasło:</label><br>
        <input type="text" name="password" placeholder="twoje hasło" required><br>
        <button type="submit">Wyślij</button><br>
    </form>


    <?php 
        if (!empty($_POST)) {
            $con = mysqli_connect("localhost", "root", "", "sikora");

            @$login = $_POST['login']; 
            @$password = $_POST['password']; 

            $sql = "SELECT * FROM users WHERE login = '$login'"; 

            if ($result = mysqli_query($con, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    if ($password == mysqli_fetch_row($result)[2]) {
                        echo "Zalogowano";
                    } else {
                        echo "Nie poprawne hasło";
                    };
                } else {
                    echo "<p>Nie ma użytkownika o loginie: $login</p>";
                }
            } else {
                echo "Error, " . mysqli_error($con);
            }

            mysqli_close($con);

        }
    ?>
</body>
</html>