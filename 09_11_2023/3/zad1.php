<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sum = 0;
        $i = 100;
        $counter = 1;
        while ($counter <= 100) {
            if ($i % 2 == 0) {
                $sum += $i;
                $counter++;
            }
            $i++;
        }
        echo "<p>suma 100 kolejnych liczb patrzystych poczynając od 100: $sum</p>"
    ?>
</body>
</html>