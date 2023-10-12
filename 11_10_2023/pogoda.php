<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <div>
            <img src="logo.png" alt="meteo">
        </div>
        <div>
            <h1>Prognoza dla Wrocławia</h1>
        </div>
        <div>
            <p>maj, 2019 r.</p>
        </div>
    </header>
    <main>
        <table>
            <thead>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </thead>
            <?php 
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "prognoza";
    
                $polaczenie = mysqli_connect($host, $user, $pass, $db);

                $zapytanie = "SELECT * FROM pogoda";
                $result = mysqli_query($polaczenie, $zapytanie);

                while($row = mysqli_fetch_row($result)) {
                    echo "<tr>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "<td>$row[4]</td>";
                    echo "<td>$row[5]</td>";
                    echo "<td>$row[6]</td>";
                    echo "</tr>";
                }

                mysqli_close($polaczenie)
            ?>
        </table>
    </main>
    <div>
        <img src="obraz.jpg" alt="Polska, Wrocław">
    </div>
    <div>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <footer>
        <p>Stronę wykonał: Wiktor Sikora</p>
    </footer>
</body>
</html>