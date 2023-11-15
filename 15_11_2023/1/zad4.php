<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Imie - Nazwisko - Data urodzenia</p>
    <?php 
        $con = mysqli_connect("localhost", "root", "", "5c");

        $result = mysqli_query($con, "SELECT * FROM klasa");

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row["imie"] . " - " .  $row["nazwisko"] . " - " .  $row["data_urodzenia"] . "</p>";
            }
        } 
    ?>
</body>
</html>