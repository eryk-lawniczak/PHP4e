<!DOCTYPE html>
<html lang="pl" >
  <head>
    <meta charset="utf-8">
    <title>Sortowanie</title>
  </head>
  <body>
    <?php
      $dir = "./test";
        if (!($fd = opendir($dir))) {
          exit("Nie można otworzyć katalogu $dir");
        }

        $sortuj = 0;
        if (isset($_GET['sortuj'])) {
          $sortuj = $_GET['sortuj'];
        }
        $dane = scandir($dir, $sortuj);

        closedir($fd);
     ?>

  </body>
</html>
