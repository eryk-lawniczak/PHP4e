<!DOCTYPE html>
<?php
  session_start();
  unset($_SESSION['imie']);
 ?>
 <html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja strona 3</title>
  </head>
  <body>
    <h3>Strona 1</h3>
    witamy
    <?php
    echo $_SESSION['imie'];
    echo "<br>Identyfikator sesji: ".session_id();
    echo "<br><a href=\"./sesja1.php\">Strona startowa</a>"
     ?>

  </body>
</html>
