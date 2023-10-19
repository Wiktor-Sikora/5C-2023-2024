<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator kosztu dowozu</title>
</head>
<body>
    <h2>Oblicz cenę dowozu</h2>
    <form action="pizza.php" method="POST">
        <label for="">Podaj dystans:</label><br>
        <input type="number" step="0.01" name="lenght" placeholder="Km" required><br>
        <label for="">Ciepła</label>
        <input type="checkbox" name="warm"><br>
        <button type="submit">Wyślij</button><br>
    </form>
</body>
</html>