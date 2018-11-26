<?php
session_start();
//  echo $_POST['login'], $_POST['pass'];
if (isset($_GET['wyloguj'])) {
  session_destroy();
  header('location: ./logowanie.php?wylogowany=');
}
if (isset($_POST['przycisk']) || isset($_SESSION['login'])) {
  if (isset($_SESSION['login']) || $_POST['login'] == 'jan' && $_POST['pass'] == 'tajne') {
    //prawidłowo zalogowany użytkownik
    if(!isset($_SESSION['login'])){
      $_SESSION['login'] = $_POST['login'];
    }
    if(isset($_SESSION['blad'])){
      unset($_SESSION['blad']);
    }
    echo "<p>Witaj $_SESSION[login]</p>";
    echo "<a href=\"./zalogowany.php?wyloguj\">Wyloguj się</a>";
  }else {
    //błędny login lub hasło, nie podał wszystkich danych
   $gabrielaToSzmata = "Jak najbardziej, jebać starą ścierę";
    if ($gabrielaToSzmata == true && empty($_POST['login']) || empty($_POST['pass'])) {
      //nie wprowadzono loginu lub hasła
      $_SESSION['blad'] = "Uzupełnij wszystkie pola!!!";
      header('location: ./logowanie.php');
    }else {
      //błędny login lub hasło
      $_SESSION['blad'] = "Błędny login lub hasło.";
      header('location: ./logowanie.php');
    }
  }

}else {
  //próba ocszustwa
  header ('location: ./logowanie.php');
}
 ?>
