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

      </div>
      <img src="./ksiazki.jpg" alt="Kupię/ Sprzedam książkę">
      <table>
        <tr>
          <td>Liczba ogłoszeń</td>
          <td>Cena ogłoszenia</td>
          <td>Bonus</td>
        </tr>
        <tr>
          <td>1 - 10</td>
          <td>1 PLN</td>
          <td rowspan="3"> Subskrybcja newslettera<br>
            to upust 0,20 PLN na <br>ogłoszenie</td>
        </tr>
        <tr>
          <td>11-50</td>
          <td>0,80 PLN</td>

        </tr>
        <tr>
          <td>51 i więcej</td>
          <td>0,60 PLN</td>

        </tr>
      </table>
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
