<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Pogoda</title>
</head>
<body>
    <h2>Zmień rekord pogodowy</h2>
    <form action="zad4.1.php" method="POST">
        <label for="">Podaj ID rekordu który chcesz zmienić</label>
        <input type="number" name="id" placeholder="ID"><br>
        <button type="submit">Wyślij</button><br>
    </form>

    <?php 
        if (!empty($_POST)) {
            $con = mysqli_connect("localhost", "root", "", "prognoza");

            $weather_id = $_POST['id']; 
            $miasta_id = $_POST['miasta_id']; 
            $data_prognozy = $_POST['data_prognozy'];
            $temperatura_noc = $_POST['temperatura_noc'];
            $temperatura_dzien = $_POST['temperatura_dzien'];
            $opady = $_POST['opady'];
            $cisnienie = $_POST['cisnienie'];

            $sql = "UPDATE pogoda SET 
            miasta_id=$miasta_id, data_prognozy='$data_prognozy', temperatura_noc=$temperatura_noc, temperatura_dzien=$temperatura_dzien, opady=$opady, cisnienie=$cisnienie
            WHERE id = $weather_id";

            if (mysqli_query($con, $sql)) {
                if (mysqli_affected_rows($con) > 0) {
                    echo "<p>Pomyślnie zmieniono rekord o id $weather_id</p>";
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