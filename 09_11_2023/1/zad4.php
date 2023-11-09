<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pętla for</h2>
    <?php 
        for ($i=1; $i <= 10; $i++) { 
            echo "<p>√$i = " . sqrt($i) . "</p>";
        }
    ?>
    <h2>Pętla while</h2>
    <p>
        <?php 
            $i = 1;
            while ($i <= 10) {
                echo "<p>√$i = " . sqrt($i) . "</p>";
                $i++;
            }
        ?>
    </p>
    <h2>Pętla do while</h2>
    <p>
        <?php 
            $i = 1;
            do {
                echo "<p>√$i = " . sqrt($i) . "</p>";
                $i++;
            } while ($i <= 10);
        ?>
    </p>
</body>
</html>