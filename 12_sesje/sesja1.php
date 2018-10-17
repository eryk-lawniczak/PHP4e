<!DOCTYPE html>
<?php
  session_start();
  $_SESSION['imie'] = 'Oliwer';
 ?>
 <html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja strona 1</title>
  </head>
  <body>
    <h3>Strona 1</h3>
    witamy
    <?php
    echo $_SESSION['imie'];
    echo "<br>Identyfikator sesji: ".session_id();
    echo "<br><a href=\"./sesja2.php\">Strona2</a>"
     ?>
<br><a href="./sesja1.php?usunSesje=1">Usuń sesję</a>
<?php
  if(isset($_GET['usunSesje'])&& $_GET['usunSesje']==1){
    session_destroy();
  }
 ?>
  </body>
</html>
