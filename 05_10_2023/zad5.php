<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px solid;
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
    <?php
    echo "<p>tabela z pętli for:</p>";
    echo "<table>";
    for ($i1=1; $i1 <= 10; $i1++) { 
        echo "<tr>";
        for ($i2=1; $i2 <= 10; $i2++) { 
            echo "<td>" . $i1 * $i2 ." </td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<p>tabela z pętli while:</p>";
    echo "<table>";
    $i1 = 1; 
    while ($i1 <= 10) {
        echo "<tr>";
        $i2 = 1; 
        while ($i2 <= 10) {
            echo "<td>" . $i1 * $i2 . "</td>";
            $i2++;
        }
        $i1++;
        echo "</tr>";
    }
    echo "</table>";
    
    echo "<p>tabela z pętli do while:</p>";
    echo "<table>";
    $i1 = 1; 
    do {
        echo "<tr>";
        $i2 = 1;
        do {
            echo "<td>" . $i1 * $i2 . "</td>";
            $i2++;
        } while ($i2 <= 10);
        $i1++;
        echo "</tr>";
    } while ($i1 <= 10);


    echo "</table>";


    ?>
</body>
</html>
