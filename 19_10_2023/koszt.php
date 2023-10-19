<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator ceny</title>
</head>
<body>
    <h2>Koszt twojej trasy</h2>
    <?php 
        if (!empty($_POST)) {
            @$price = $_POST['price']; 
            @$lenght = $_POST['lenght']; 
            @$fuel = $_POST['fuel']; 
            
            echo "<p>Aktualna cena paliwa: $price$</p>"; 
            echo "<p>Dystans który chcesz przejechać: $lenght</p>"; 
            echo "<p>Średnie spalanie: $$</p>"; 
        } else {
            echo "Prześlij coś"
        }

    ?>

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