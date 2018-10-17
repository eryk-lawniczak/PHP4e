<?php

if(isset($_COOKIE['wiek'])) {
  require_once('./header.html');
  echo "Wiek: ". $_COOKIE['wiek'];
  require_once('./footer.html');
}
elseif (empty($_GET['wiek'])) {
  require_once('./header.html');
  require_once('./form.html');
  require_once('./footer.html');
}elseif (!empty($_GET['wiek'])) {
  setcookie('wiek', $_GET['wiek'], time()+60*60*24*3);
  require_once('./header.html');
  echo "<p>Dziękujęmy za podanie danych</p>";
  echo "<p><a href=\"./usunWiek.php?usun=\">Powrót do formularza</a></p>";
  require_once('./footer.html');
}

if (isset($_GET['cookie']) && $_GET['cookie'] == 1) {
  echo "<span style=\"color:red\">Usunięto ciasteczko wiek</span>";
}

?>
