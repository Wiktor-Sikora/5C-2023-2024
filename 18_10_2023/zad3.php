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
        <label for="">Podaj ID rekordu który chcesz wyszukać</label>
        <input type="number" name="id" placeholder="ID"><br>
        <button type="submit">Wyślij</button><br>
    </form>


    <?php 
        if (!empty($_POST)) {
            $con = mysqli_connect("localhost", "root", "", "prognoza");

            $weather_id = $_POST['id']; 

            $sql = "SELECT * from pogoda WHERE id = $weather_id"; 

            if ($result = mysqli_query($con, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_row($result);
                    echo "<h2>Rekord: $row[0]</h2>";
                    echo "<p>miasto: $row[1]</p>";
                    echo "<p>data prognozy: $row[2]</p>";
                    echo "<p>temperatura w nocy: $row[3]</p>";
                    echo "<p>temperatura w dzień: $row[4]</p>";
                    echo "<p>opady w mm: $row[5]</p>";
                    echo "<p>ciśnienie: $row[6]</p>";
                } else {
                    echo "<h2>Nie ma rekordu o ID $weather_id w bazię danych</h2>";
                }
            } else {
                echo "Error, " . mysqli_error($con);
            }

            mysqli_close($con);

        }
    ?>
</body>
</html>