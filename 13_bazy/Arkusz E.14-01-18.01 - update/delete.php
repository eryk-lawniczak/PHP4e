<?php
  $polaczenie = @new mysqli('localhost', 'root', '', 'ogloszenia');
  if (!$polaczenie->connect_errno) {
    $id = $_GET['usun'];
    $zapytanie = "DELETE FROM `uzytkownik` WHERE `uzytkownik`.`id` = $id";
    $wynik = $polaczenie->query($zapytanie);
    header('location: ./ogloszenia-dodawanie.php');
  }else {
    header('location: ./ogloszenia-dodawanie.php');
  }

 ?>
