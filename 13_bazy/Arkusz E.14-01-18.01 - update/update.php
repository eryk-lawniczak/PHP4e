<?php

  $polaczenie = @new mysqli('localhost', 'root', '', 'ogloszenia');
  if (!$polaczenie->connect_errno) {
    if(isset($_POST['przycisk']) && !empty($_POST['imie']) && !empty($_POST['nazwisko'])){
      $imie = $polaczenie->real_escape_string($_POST['imie']);
      $nazwisko = $polaczenie->real_escape_string($_POST['nazwisko']);
      $telefon = $polaczenie->real_escape_string($_POST['telefon']);
      $email = $polaczenie->real_escape_string($_POST['email']);
      $id = $polaczenie->real_escape_string($_POST['id']);

      $zapytanie = "UPDATE `uzytkownik` SET `imie`='$imie',`nazwisko`='$nazwisko',`telefon`='$telefon',`email`='$email' WHERE id = $id";
      $wynik = $polaczenie->query($zapytanie);

     header('location: ./ogloszenia-update.php');
var_dump($id);
var_dump($zapytanie);
    }else {
        header('location: ./ogloszenia-update.php');
    }
    // $zapytanie = "";
    // $wynik = $polaczenie->query($zapytanie);
    // header('location: ./ogloszenia-usuwanie.php');
  }else {
    header('location: ./ogloszenia-usuwanie.php');
  }

 ?>
