<?php

  $polaczenie = @new mysqli('localhost', 'root', '', 'ogloszenia');
  if (!$polaczenie->connect_errno) {
    if(isset($_POST['przycisk']) && !empty($_POST['imie']) && !empty($_POST['nazwisko'])){
      $imie = $_POST['imie'];
      $nazwisko = $_POST['nazwisko'];
      $telefon = $_POST['telefon'];
      $email = $_POST['email'];

      $zapytanie = "INSERT INTO `uzytkownik`(`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES (NULL,'$imie','$nazwisko','$telefon','$email')";
      $wynik = $polaczenie->query($zapytanie);
      header('location: ./ogloszenia-update.php');

    }else {
        header('location: ./ogloszenia-update.php');
    }
    // $zapytanie = "";
    // $wynik = $polaczenie->query($zapytanie);
    // header('location: ./ogloszenia-usuwanie.php');
  }else {
    header('location: ./ogloszenia-update.php');
  }

 ?>
