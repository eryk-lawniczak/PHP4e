<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="./przychodnia.css">
  </head>
  <body>

  <div id="baner">
    <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
  </div>
  <div id="lewy">
    <h3>LISTA PACJENTÓW</h3>
    <!-- skrypt 1 -->
    <?php

    if ($connect = mysqli_connect('localhost', 'root', '', 'przychodnia')) {
    //echo "poprawnie";
    }else {
      echo "błąd 1";
    }

    mysqli_set_charset($connect, 'utf8');
    $zapytanie = "SELECT `id`,`imie`,`nazwisko` FROM `pacjenci` WHERE 1";

    if ($rezultat = mysqli_query($connect, $zapytanie)) {
      while ($wynik = mysqli_fetch_assoc($rezultat)) {
        echo "$wynik[id] ";
        echo "$wynik[imie] ";
        echo "$wynik[nazwisko] ";
        echo "<br>";
      }
    }else {
      echo "blad 2";
    }

     ?>

    <br><br>
    <form id="formularz" method="post">
      Podaj ID<br>
      <input type="number" name="numer"><br>
      <input type="submit" name="przycisk" value="Pokaż dane">

    </form>

    <h3>LEKARZE</h3>
    <ul>
      <li>pn - śr
        <ol>
          <li>Anna Kwiatkowska</li>
          <li>Jan Kowalewski</li>
        </ol>
      </li>
      <li>czw - pt
        <ol>
          <li>Krzysztof Nowak</li>
        </ol>
      </li>
    </ul>
  </div>
  <div id="prawy">
    <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
    <!-- skrypt 2-->
<?php
if (isset($_POST['przycisk'])) {
  $zapytanie = "SELECT `imie`,`nazwisko`,`choroby_przewlekle`,`uczulenia` FROM `pacjenci` WHERE id =$_POST[numer]";

  if ($rezultat = mysqli_query($connect, $zapytanie)) {
    while ($wynik = mysqli_fetch_assoc($rezultat)) {
      echo "Imie i nazwisko: $wynik[imie] $wynik[nazwisko]<br>";
      echo "Choroby przewlekłe: $wynik[choroby_przewlekle] <br>";
      echo "Uczulenia: $wynik[uczulenia] ";
      echo "<br>";
    }
  }else {
    echo "blad 2";
  }
}

 ?>
  </div>
  <div id="stopka">
    <p>utworzeone przez: PESEL</p><br>
    <a href="./kwerendy.txt" download="kwerendy.txt"\>Pobierz blik z kwerendami</a>
  </div>

  </body>
</html>
