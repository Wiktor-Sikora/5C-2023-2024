<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pętla for</h2>
    <p>
        <?php 
            for ($i=100; $i > 90 ; $i--) { 
                echo "$i ";
            }
        ?>
    </p>
    <h2>Pętla while</h2>
    <p>
        <?php 
            $i = 100;
            while ($i > 90) {
                echo "$i ";
                $i--;
            }
        ?>
    </p>
    <h2>Pętla do while</h2>
    <p>
        <?php 
            $i = 100;
            do {
                echo "$i ";
                $i--;
            } while ($i > 90);
        ?>
    </p>
</body>
</html>