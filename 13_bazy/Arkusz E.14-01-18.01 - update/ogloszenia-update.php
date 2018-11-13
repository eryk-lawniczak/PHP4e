<!DOCTYPE html>
<html lang="pl" >
  <head>
    <meta charset="utf-8">
    <title>Portal ogłoszeniowy</title>
    <link rel="stylesheet" href="./styl1.css">
  </head>
  <body>
    <div class="baner">
      <h1>Portal Ogłoszeniowy</h1>
    </div>
    <div class="lewy">
      <h2>Kategorie ogłoszeń</h2>
      <ol>
        <li>Książki</li>
        <li>Muzyka</li>
        <li>Filmy</li>
      </ol>
      <div class="tabelka">
        <table class="tabelka">
          <tr>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Telefon</th>
            <th>email</th>
          </tr>

          <?php
          $polaczenie = @new mysqli('localhost', 'root', '', 'ogloszenia');
          if (!$polaczenie->connect_errno) {
            $zapytanie = "SELECT `id`, `imie`,`nazwisko`,`telefon`,`email` FROM `uzytkownik`";
            if ($wynik = $polaczenie->query($zapytanie)) {

              while ($wiersz = $wynik->fetch_assoc()) {

                echo<<<wiersz
                <tr>
                  <td>$wiersz[imie]</td>
                  <td>$wiersz[nazwisko]</td>
                  <td>$wiersz[telefon]</td>
                  <td>$wiersz[email]</td>
                  <td><a href="./delete.php?usun=$wiersz[id]">Usuń</a></td>
                  <td><a href="./ogloszenia-update.php?update=$wiersz[id]">Aktualizuj</a></td>

                </tr>
wiersz;

              }
            }else{
              echo "blad";
            }
          }
          else {
            echo "Blad: $polaczenie->connect_errno";
          }
           ?>
        </table>
<h3>Dodaj użytkownika</h3>
<form id="dodaj" action="./insert.php" method="post">
  <input type="text" name="imie" placeholder="Imie"><br>
  <input type="text" name="nazwisko" placeholder="nazwisko"><br>
  <input type="text" name="telefon" placeholder="telefon"><br>
  <input type="text" name="email" placeholder="email"><br>
  <input type="submit" name="przycisk" placeholder="Dodaj użytkownika"><br>
</form>
<?php

if (isset($_GET['update'])) {
  ?>
  <form id="dodaj" action="./ogloszenia-update.php" method="post">
    <input type="text" name="imie" placeholder="Imie"><br>
    <input type="text" name="nazwisko" placeholder="nazwisko"><br>
    <input type="text" name="telefon" placeholder="telefon"><br>
    <input type="text" name="email" placeholder="email"><br>
    <input type="submit" name="przycisk" placeholder="Aktualizuj"><br>
  </form>
  <?php
  echo "ok";
} else {
  echo "blad";
}?>

      </div>
    </div>
    <div class="prawy">
      <h2>Ogłoszenia kategorii książki</h2>
      <!-- skrypt 1 -->
      <?php
      $polaczenie = @new mysqli('localhost', 'root', '', 'ogloszenia');
      if (!$polaczenie->connect_errno) {
        //echo " Błąd: $polaczenie->connect_errno";
        $zapytanie = "SELECT `id`,`tytul`,`tresc` FROM `ogloszenie` WHERE kategoria = 1;";

        if($wynik = $polaczenie->query($zapytanie)) {
            while($wiersz = $wynik->fetch_assoc()){
            $zapytanie2 = "SELECT `telefon` FROM `uzytkownik` JOIN ogloszenie on uzytkownik.id = ogloszenie.uzytkownik_id WHERE ogloszenie.id = $wiersz[id];";
            $wynik2 = $polaczenie->query($zapytanie2);
            $wiersz2 = $wynik2->fetch_assoc();
            echo<<<WIERSZ
            <h3>$wiersz[id] $wiersz[tytul]</h3>
            <p>$wiersz[tresc]</p>
            <p>Telefon kontaktowy: $wiersz2[telefon]</p>
WIERSZ;
}
          }
        else{
          echo "blad";
        }
      }else{
        echo " Błąd: $polaczenie->connect_errno";
        /*
        serwer: 2002 dla złej nazwy hosta - localhost1
        użytkownik: 1044
        hasło: 1045
        baza: 1049
        */
      }


       ?>
    </div>
    <div class="stopka">
      Portal ogłoszeniowy opracował: PESEL
    </div>
  </body>
</html>
