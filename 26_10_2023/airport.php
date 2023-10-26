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

            
            ?>
            <tr>
                <td>dupa</td>
                <td>dupa</td>
                <td>dupa</td>
                <td>dupa</td>
                <td>dupa</td>
            </tr>
        </table>
    </main>
    <footer>
        <div>
            <a href="kw1.jpg" target="_blank">Pobierz obraz</a>
        </div>
        <div>
            <p>dupa</p>
        </div>
        <div>
            Autor: Wiktor Sikora
        </div>
    </footer>    
</body>
</html>