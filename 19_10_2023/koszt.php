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
            
            echo "<p>Aktualna cena paliwa: $price PLN</p>"; 
            echo "<p>Dystans który chcesz przejechać: $lenght km</p>"; 
            echo "<p>Średnie spalanie: $fuel l/100km</p>";
            
            echo "<p>Koszt przejazdu: " . ($fuel / $lenght) * 100 * $price  . "</p>";
        } else {
            echo "Prześlij coś";
        }

    ?>
</body>
</html>