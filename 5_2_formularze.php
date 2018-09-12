<!DOCTYPE html>
<html lang="pl" >
  <head>
    <meta charset="utf-8">
    <title>zadanie2</title>
  </head>
  <body>
    <form method="post">
      <input type="radio" name="hobby" value="f" checked>Film<br>
      <input type="radio" name="hobby" value="m">Muzyka<br>
      <input type="radio" name="hobby" value="s">Sport<br>
      <input type="submit" name="przycisk" value="Wyślij">

    </form>
    <?php
if (isset($_POST['przycisk'])){
  $hobby = $_POST['hobby'];
  switch ($hobby) {
    case 'f':
      header("location: film.php");
      break;
    case 'm':
      header("location: muzyka.php");
      break;
    case 's':
      header("location: sport.php");
      break;

  }
}
     ?>
  </body>
</html>
