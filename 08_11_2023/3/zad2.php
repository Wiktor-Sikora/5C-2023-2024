<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Wybierz język: </label>
        <select name="language" required><br>
            <option value="pl">Polski</option>
            <option value="ang">Angielski</option>
            <option value="de">Niemiecki</option>
            <option value="es">Hiszpański</option>
        </select><br>
        <button type="submit">Wyślij</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            @$lang = $_POST["language"];

            switch ($lang) {
                case "ang":
                    echo "English";
                    break;
                case "de":
                    echo "Deutsch";
                    break;
                case "es":
                    echo "Español";
                    break;
                default:
                    echo "polski";
            }
        }
    ?>
</body>
</html>