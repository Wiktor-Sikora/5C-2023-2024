<?php 
    session_start();
    if ($_SESSION["auth"] != true) {
        header("Location: login.php");
    }

    echo "<h3>Witaj " . $_SESSION["user_login"]. "</p>"
?>

<div class="link-container">
    <div class="link-tab">
        <a class="link-menu" href="podstrona1.php">Strona główna</a>
    </div>
    <?php include "admin_template.php"; ?>
    <div class="link-tab">
        <a class="link-menu" href="password-change.php">Zmień hasło</a>
    </div>
    <div class="link-tab">
        <a class="link-menu" href="logout.php">Wyloguj się</a>
    </div>
</div>