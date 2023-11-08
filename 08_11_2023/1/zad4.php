<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = 1932198142987;
        $b = 817294784211987424321987431987;

        if ($a > $b) {
            echo "<p>zmienna a jest większa od b: $a</p>";
        } elseif ($a == $b) {
            echo "<p>zmienne a i b są takie same: $a</p>";
        } else {
            echo "<p>zmienna b jest większa od a: $b</p>";
        }
    ?>
</body>
</html>