<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_COOKIE['username'])) {
            unset($_COOKIE['username']);
            echo "<p>usunięto ciasteczko username</p>"; 
        } else {
            echo "<p>brak ciasteczka username</p>"; 
        }
    ?>
</body>
</html>