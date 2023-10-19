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
            @$lenght = $_POST['lenght']; 
            @$warm = $_POST['warm']; 

            $price = $lenght * 0.50;

            if ($warm) {
                $price *= 1.15;
            }
            echo "<p>Koszt dowozu: $price zł</p>";
        } else {
            echo "Prześlij coś";
        }

    ?>
</body>
</html>