<?php 
echo "Dodano rezerwację do bazy";

$con = mysqli_connect("localhost", "root", "", "baza");


$data = $_POST["data"];
$ile = $_POST["ile"];
$telefon = $_POST["telefon"];
$zgoda = $_POST["telefon"];

$query = mysqli_query($con, "INSERT INTO `rezerwacje` (`id`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES (NULL, '3', '$data', '$ile', '$telefon');");

mysqli_close($con);
?>