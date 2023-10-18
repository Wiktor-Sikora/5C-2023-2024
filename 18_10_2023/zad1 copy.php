<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Pogoda</title>
</head>
<body>
    <h2>Dodaj nowy rekord pogodowy</h2>
    <form action="" method="POST">
        <input type="date" name="data_prognozy" placeholder="data_prognozy"><br>
        <input type="number" name="temperatura_noc" placeholder="temperatura w nocy"><br>
        <input type="number" name="temperatura_dzien" placeholder="temperatura w dzień"><br>
        <input type="number" name="opady" placeholder="opady w mm"><br>
        <input type="number" name="cisnienie" placeholder="cisnienie w hPa"><br>
        <input type="hidden" name="miasta_id" value="1"><br>
        <button type="submit">Wyślij</button><br>
    </form>

    <?php 
        if (!empty($_POST)) {
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "prognoza";

            $polaczenie = mysqli_connect("localhost", "root", "", "prognoza");

            $miasta_id = $_POST['miasta_id']; 
            $data_prognozy = $_POST['data_prognozy'];
            $temperatura_noc = $_POST['temperatura_noc'];
            $temperatura_dzien = $_POST['temperatura_dzien'];
            $opady = $_POST['opady'];
            $cisnienie = $_POST['cisnienie'];


            $sql = "INSERT INTO pogoda (miasta_id, data_prognozy, temperatura_noc, temperatura_dzien, opady, cisnienie)
            VALUES ($miasta_id, '$data_prognozy', $temperatura_noc, $temperatura_dzien, $opady, $cisnienie)";

            if (mysqli_query($polaczenie, $sql)) {
                echo "Zapisano pomyślnie";
            } else {
                echo "Error, " . mysqli_error($polaczenie);
            }

            mysqli_close($polaczenie);

        }
    ?>
</body>
</html>