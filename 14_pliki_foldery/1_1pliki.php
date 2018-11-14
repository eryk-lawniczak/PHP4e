<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Pliki i foldery</title>
  </head>
  <body>
    <?php
    $dir = "./test";
      if (!($fd = opendir($dir))) {
        exit("Nie można otworzyć katalogu $dir");
      }
      echo "<ul>";
      while (($plik = readdir($fd)) !== false) {
        if($plik != '.' && $plik !='..'){
        echo "<li>$plik</li>";
      }
      }
      echo "</ul>";
      closedir($fd);
   ?>

  </body>
</html>
