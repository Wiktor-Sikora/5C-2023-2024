<?php
if ($_SESSION['user_role'] == "admin") {
    echo "
    <div class='link-tab'>
        <a class='link-menu' href='add-user.php'>Dodaj użytkownika</a>
    </div>
    <div class='link-tab'>
        <a class='link-menu' href='delete-user.php'>Usuń użytkownika</a>
    </div>";
}
?>