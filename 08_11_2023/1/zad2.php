<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Wpisz liczbę z której chcesz otrzymać pierwiastek</label><br>
        <input type="number" placeholder="liczba" name="num" required ><br>
        <button type="submit">Wyślij</button>
    </form>

    <?php  
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_POST["num"] > -1) {
                echo "pierwiastek z ". $_POST["num"] . " to " . sqrt($_POST["num"]);
            }  else {
                echo "nie można obliczyć pierwiastka z liczb ujemnej";
            }
        }
    ?>
</body>
</html>