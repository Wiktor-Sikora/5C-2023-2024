<?php
   session_start();
   
   session_destroy();

   echo '<p>wylogowano</p>';

   header('Refresh: 2; URL = login.php');
?>