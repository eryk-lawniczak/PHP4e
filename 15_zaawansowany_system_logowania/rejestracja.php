<?php
  session_start();
  function check($val, $msg){
    $val = trim($val);
    $val = htmlspecialchars($val);
    if (empty($val)) {
      header('location: ./index.php?rejestracja=');
      $_SESSION['error'] = $msg;
    }else {
      return ($val);
    }
  }
  function equal($val1, $val2, $msg){
    if($val1 === $val2){
      return true;
    }else {
      header('location: ./index.php?rejestracja=');
      $_SESSION['error'] = $msg;
    }
  }

  if (isset($_POST['przycisk'])) {
    $msg = 'Wypełnij wszytkie pola';
    $imie = check($_POST['imie'], $msg);
    $nazwisko = check($_POST['nazwisko'], $msg);
    $email1= check($_POST['email1'], $msg);
    $email2 = check($_POST['email2'], $msg);
    $haslo1 = check($_POST['haslo1'], $msg);
    $haslo2 = check($_POST['haslo2'], $msg);
    $miasto = check($_POST['miasto'], $msg);
    $login = check($_POST['login'], $msg);

    equal($email1, $email2, 'Email musi być identyczny');
    equal($haslo1, $haslo2, 'Hasła muszą być identyczne');

    require_once('./connect.php');

    $imie = $con->real_escape_string($imie);
    $nazwisko = $con->real_escape_string($nazwisko);
    $email = $con->real_escape_string($email1);
    $pass = $con->real_escape_string($haslo1);
    $miasto = $con->real_escape_string($miasto);

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $query = "SELECT `email` FROM `user` WHERE 'email' = '$email'";

    $result = $con->query($query);
    if ($result->num_rows == 0) {
      $query = "INSERT INTO `user`( `uprawnieniaid`, `imie`, `nazwisko`, `email`, `haslo`, `miasto`) VALUES (1,'$imie','$nazwisko','$email','$pass','$miasto')";

      $con->query($query);

      header('location: ./index.php');
      $_SESSION['error'] = 'Prawidłowo!';
    }else {
      header('location: ./index.php?rejestracja=');
      $_SESSION['error'] = 'Podane email jest zajęty';
    }

  }else {
    header('location: ./index.php');
  }
 ?>
