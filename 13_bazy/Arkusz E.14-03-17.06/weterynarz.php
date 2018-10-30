<!DOCTYPE html>
<html lang="pl" >
  <head>
    <meta charset="utf-8">
    <title>Weterynarz</title>
    <link rel="stylesheet" href="weterynarz.css">
  </head>
  <body>
        <div id="baner">
          <h1>GABINET WETERYNARYJNY</h1>
        </div>
        <div id="lewy">
          <h2>PSY</h2>
          <!-- skrypt 1 -->
          <?php
            //połączenie z serwerem mysql)
          if ($polaczenie = mysqli_connect('localhost', 'root', '')) {
            //echo "Prawidłowe połączenie z serwerem Mysql";
          }else{
            echo "błędne połączenie";
          }

          //połączenie z bazą danych weterynarz
          if(mysqli_select_db($polaczenie, 'weterynarz')){
            //echo "Dobrze!";
          }
          mysqli_set_charset($polaczenie, 'utf8');
          $zapytanie = "SELECT `id`,`imie`,`wlasciciel` FROM `zwierzeta` WHERE `rodzaj` = 1";
echo "<table>";
          if ($rezultat = mysqli_query($polaczenie, $zapytanie)) {
            while ($wiersz = mysqli_fetch_row($rezultat)) {

              echo <<<WIERSZ
              <tr>
              <td>$wiersz[0]</td>
              <td>$wiersz[1]</td>
              <td>$wiersz[2]</td>
              </tr>
WIERSZ;

            }
          }else {
            echo "błąd";
          }
          echo "</table>";
           ?>
          <h2>KOTY</h2>
          <!-- skrypt 2 -->
          <?php
          $zapytanie = "SELECT `id`,`imie`,`wlasciciel` FROM `zwierzeta` WHERE `rodzaj` = 2";

          if ($rezultat = mysqli_query($polaczenie, $zapytanie)) {
            while ($wiersz = mysqli_fetch_assoc($rezultat)) {
              echo <<<WIERSZ
              $wiersz[id]
              $wiersz[imie]
              $wiersz[wlasciciel]
              <br>

WIERSZ;
            }
          }else {
            echo "błąd";
          }
           ?>
        </div>
        <div id="srodek">
          <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
          <!-- skrypt 3 -->
          <?php
          $zapytanie = "SELECT `imie`,`telefon`,`szczepienie`,`opis` FROM `zwierzeta`";
          if ($rezultat = mysqli_query($polaczenie, $zapytanie)) {
            while ($wiersz = mysqli_fetch_assoc($rezultat)) {
              echo <<<WIERSZ
              Pacjent: $wiersz[imie] <br>
              Telefon: $wiersz[telefon],
              Ostatnie szczepienie: $wiersz[szczepienie],
              Informacje: $wiersz[opis]
              <hr>

WIERSZ;
          }
          }else {
            echo "błąd";}
            mysqli_close($polaczenie);
           ?>
        </div>
        <div id="prawy">
          <h2>WETERYNARZ</h2>
          <a href="./logo.jpg"><img src="./logo-mini.jpg" ></a>
          <p>Krzysztof Nowakowski, lekarz weterynarii</p>
          <h2>GODZINY PRZYJĘĆ</h2>
          <table>
            <tr>
              <td>poniedziałek</td>
              <td>15:00-19:00</td>
            </tr>
            <tr>
              <td>wtorek</td>
              <td>15:00-19:00</td>
            </tr>
          </table>
        </div>
  </body>
</html>
