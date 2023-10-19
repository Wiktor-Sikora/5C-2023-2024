<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolory</title>
</head>
<body>
    <h2>Zmodyfikuj stronę!</h2>
    <form action="kolory.php" method="POST">
        <label for="">Podaj kolor tła:</label><br>
        <input type="text" name="bg" placeholder="HEX" required><br>
        <label for="">Podaj kolor tekstu:</label><br>
        <input type="text" name="text" placeholder="HEX" required><br>
        <button type="submit">Wyślij</button><br>
    </form>
</body>
</html>