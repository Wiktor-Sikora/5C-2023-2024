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

            $sql = "SELECT * FROM pogoda WHERE id = $weather_id"; 

            if ($result = mysqli_query($con, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_row($result);
                    echo "<h2>Rekord: $row[0]</h2>";
                    echo "<form action='zad4.2.php' method='POST'>";
                        echo "<label>ID miasta:</label><br>";
                        echo "<input type='number' name='miasta_id' value='$row[1]'><br>";
                        echo "<label>data:</label><br>";
                        echo "<input type='date' name='data_prognozy' value='$row[2]'  placeholder='data_prognozy'><br>";
                        echo "<label>temperatura w nocy:</label><br>";
                        echo "<input type='number' name='temperatura_noc' value='$row[3]' placeholder='temperatura w nocy'><br>";
                        echo "<label>temperatura w dzień:</label><br>";
                        echo "<input type='number' name='temperatura_dzien' value='$row[4]' placeholder='temperatura w dzień'><br>";
                        echo "<label>opady:</label><br>";
                        echo "<input type='number' name='opady' value='$row[5]' placeholder='opady w mm'><br>";
                        echo "<label>ciśnienie:</label><br>";
                        echo "<input type='number' name='cisnienie' value='$row[6]' placeholder='cisnienie w hPa'><br>";
                        echo "<input type='hidden' name='id' value='$weather_id'>";
                        echo "<button type='submit'>Wyślij</button><br>";
                    echo "</form>";                    
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