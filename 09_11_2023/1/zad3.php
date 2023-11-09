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
            $counter = 0; 
            for ($i=100; $i > 0; $i++) {
                if ($i % 5 == 0) {
                    echo "$i ";
                    $counter++;
                }
                if ($counter == 5) {
                    break;
                }
            }
        ?>
    </p>
    <h2>Pętla while</h2>
    <p>
        <?php 
            $counter = 0;
            $i = 100;
            while ($counter < 5) {
                if ($i % 5 == 0) {
                    echo "$i ";
                    $counter++;
                }
                $i++;
            }
        ?>
    </p>
    <h2>Pętla do while</h2>
    <p>
        <?php 
            $counter = 0;
            $i = 100;
            do {
                if ($i % 5 == 0) {
                    echo "$i ";
                    $counter++;
                }
                $i++;
            } while ($counter < 5);
        ?>
    </p>
</body>
</html>