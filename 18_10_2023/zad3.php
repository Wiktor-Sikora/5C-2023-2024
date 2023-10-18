<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Pogoda</title>
</head>
<body>
    <h2>Usuń rekord pogodowy</h2>
    <form action="" method="POST">
        <label for="">Podaj ID rekordu który chcesz usunąć</label>
        <input type="number" name="id" placeholder="ID"><br>
        <button type="submit">Wyślij</button><br>
    </form>


    <?php 
        if (!empty($_POST)) {
            $con = mysqli_connect("localhost", "root", "", "prognoza");

            $weather_id = $_POST['id']; 

            $sql = "DELETE FROM pogoda WHERE id = $weather_id"; 

            if ($result = mysqli_query($con, $sql)) {
                if (mysqli_affected_rows($con) > 0) {
                    echo "<p>Pomyślnie usunięto rekord o id $weather_id</p>";
                } else {
                    echo "<p>Nie ma rekordu o id $weather_id</p>";
                }
            } else {
                echo "Error, " . mysqli_error($con);
            }

            mysqli_close($con);

        }
    ?>
</body>
</html>