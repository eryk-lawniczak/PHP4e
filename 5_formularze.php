<!DOCTYPE html>
<html lang="pl" >
  <head>
    <meta charset="utf-8">
    <title>formularze</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="imie" placeholder="Imię..."><br>
      <input type="text" name="nazwisko" placeholder="Nazwisko..."><br>
      <input type="submit" name="przycisk" value="Wciśnij mnie"><br>
    </form>
<?php
if (isset($_POST['przycisk'])){
  $imie = $_POST['imie'];
  $nazwisko = $_POST['nazwisko'];
  if(empty($imie) || empty($nazwisko)){
    echo "wprowadź poprawne dane";
  }else{
    echo "Nazywasz się: <span style=\"color:red\">$imie $nazwisko</span>";
  }
}
?>

  </body>
</html>
