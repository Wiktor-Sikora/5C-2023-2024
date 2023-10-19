<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona logowania</title>
</head>
<body>
    <h2>Oblicz cenę paliwa</h2>
    <form action="" method="POST">
        <label for="">Podaj aktualny koszt benzyny:</label><br>
        <input type="number" name="price" placeholder="PLN" required><br>
        <label for="">Podaj ilość kilometrów którą zamierzasz przejechać:</label><br>
        <input type="number" name="lenght" placeholder="Km" required><br>
        <label for="">Podaj średnie spalanie w swoim gruzie:</label><br>
        <input type="number" name="fuel" placeholder="Litry na 100km" required><br>
        <button type="submit">Wyślij</button><br>
    </form>
</body>
</html>