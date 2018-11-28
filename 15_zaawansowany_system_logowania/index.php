<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>System logowania</title>
    <style media="screen">
      input{

      }
    </style>
  </head>
  <body>
    <?php
    if (isset($_GET['rejestracja'])) {

?>
<!-- novalidate pomija required -->
<form action="./rejestracja.php" method="post" >
     <input type="text" name="imie" placeholder="imie"  required><br>
     <input type="text" name="nazwisko" placeholder="nazwisko" required><br>
     <input type="email" name="email1" placeholder="email" required><br>
     <input type="email" name="email2" placeholder="potwierdź email" required><br>
     <input type="password" name="haslo1" placeholder="haslo" required><br>
     <input type="password" name="haslo2" placeholder="haslo" required><br>
     <input type="text" name="miasto" placeholder="miasto" required><br>
     <input type="text" name="login" placeholder="login" required><br>
     <input type="submit" name="przycisk" value="Zarejestruj się"><br>
   </form>
   <a href="./index.php">Zaloguj się</a>
<?php
    }else {
      if (isset($_SESSION['error'])) {
        echo "$_SESSION[error]";
        unset($_SESSION['error']);
      }
      ?>
<!-- autocomplete="off" -->
       <form action="./login.php" method="post" >
            <input type="text" name="name" placeholder="login" required><br>
            <input type="password" name="login" placeholder="haslo" required><br>
            <input type="submit" name="przycisk" value="Zaloguj się"><br>
          </form>
          <a href="./index.php?rejestracja=">Zarejestruj się</a>
          <?php
    }
      ?>

  </body>
</html>
