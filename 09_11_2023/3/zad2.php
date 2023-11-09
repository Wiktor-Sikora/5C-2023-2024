<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $i = 10;
        $sum = 0;
        do {
            $sum += $i;
            $i++;
        } while ($sum < 1000);

        echo "<p>Suma: $sum, ilość zsumowanych liczb: $i</p>";
    ?>
</body>
</html>