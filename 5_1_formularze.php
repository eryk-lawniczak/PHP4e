<!--
  Użytkownik podaje w formularzu ile ma ulubionych kolorów. utwórz formularz który wyświetli
  tyle pól tekstowych ile podał kolorów
-->

<!DOCTYPE html>
<html lang="pl" >
  <head>
    <meta charset="utf-8">
    <title>jazda jazda zadanko</title>
  </head>
  <body>
    <form method="post">
      <input type="number" name="ile">
      <input type="submit" name="przycisk" value="Zatwierdź">
    </form>
    <hr>
    <?php
      if(isset($_POST['przycisk']) && $_POST['ile']>0){
        $ile = $_POST['ile'];
      ?>
    <h4>Podaj kolory</h4>
    <form method="post">
      <?php
        for ($i=1; $i <= $ile; $i++) {
          echo "<input type=\"text\" name=\"kolor$i\"><br>";
        }
       ?>
        <input type="submit" name="przycisk2" value="Zatwierdź">
        <input type="hidden" name="ile" value="<?php echo $ile; ?>">
    </form>






  <?php
}
  if(isset($_POST['przycisk2'])){
    echo "<h4>Kolory</h4>";
    $ile = $_POST['ile'];
    for ($i=1; $i <= $ile ; $i++) {
      $kolor = "kolor$i";
      echo "kolor $i: ".$_POST[$kolor]."<br>";
    }
  }
     ?>
  </body>
</html>
