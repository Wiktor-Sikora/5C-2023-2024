<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <div>
            <h2>Odloty z lotniska</h2>
        </div>
        <div>
            <img src="zad6.png" alt="logotyp">
        </div>
    </header>    
    <main>
        <h4>tabela odlotów</h4>
        <table>
            <thead>
                <th>lp.</th>
                <th>numer rejsu</th>
                <th>czas</th>
                <th>kierunek</th>
                <th>status</th>
            </thead>
            <?php 
            
                $con = mysqli_connect('localhost', 'root', '' , 'egzamin');

                $zapytanie1 = "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM `odloty` ORDER BY czas DESC;";

                $result = mysqli_query($con, $zapytanie1);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "<td>$row[4]</td>";
                        echo "</tr>";
                    }
                }
                mysqli_close($con);
            ?>
        </table>
    </main>
    <footer>
        <div>
            <a href="kw1.jpg" target="_blank">Pobierz obraz</a>
        </div>
        <div>
            <p>
            <?php
                if (!isset($_COOKIE["cookie"])) {
                    setcookie("cookie", "cookie", time() + 3600, "/");
                    echo "<i>Dzień dobry! Sprawdź regulamin naszej strony</i>";
                } else {
                    echo "<i>Miło nam, że nas znowu odwiedziłeś</i>";
                }
            ?>
            </p>
        </div>
        <div>
            Autor: Wiktor Sikora
        </div>
    </footer>    
</body>
</html>