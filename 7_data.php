<!DOCTYPE html>
<html lang="pl" >
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //data 19.09.2018

    echo date("Y"),"<br>"; //2018
    echo date("y"),"<br>"; //18
    echo date("y-m-d"),"<br>"; //18-09-19
    echo date("Y-M-D"),"<br>"; //2018-Sep-Wed
    echo date("e"),"<br>"; //Europe/Berlin
    echo date("F"),"<br>"; //September

//czas
  echo date("g"),"<br>"; //2 format 12-godzinny bez zera na początku
  echo date("G"),"<br>"; //14 format 24-godzinny bez zera na początku
  echo date("h"),"<br>"; //02 format 12-godzinny z zerem
  echo date("H"),"<br>"; //14 format 24 godzinny z zerem

  echo date("i"),"<br>"; //25 liczba minut z zerem
  echo date("I"),"<br>"; //1 czas letni lub zimowy (1 i 2)

  echo date("j"),"<br>"; //dzień miesiąca bez 0
  echo date("l"),"<br>"; //wensdeay dzień tygodnia
  echo date("L"),"<br>"; //0 znacznik roku przestępnego
  echo date("m"),"<br>"; //miesiąc z 0
  echo date("n"),"<br>"; //miesiąc bez 0
  echo date("O"),"<br>"; //+0200 różnica do czasu Greenwich
  echo date("o"),"<br>"; //2018 rok
  echo date("P"),"<br>"; //+02:00 różnica do czasu Greenwich z :

  echo date("s"),"<br>"; //26 sekundy
  echo date("S"),"<br>"; //th kolejność

  echo date("t"),"<br>"; //30 liczba dni miesiąca
  echo date("T"),"<br>"; //strefa czasowa
  echo date("U"),"<br>"; //znacznik czasu unix
  echo date("w"),"<br>"; //3 dzien tygodnia
  echo date("W"),"<br>"; //38 numer tygodnia w roku
  echo date("z"),"<br>"; //261 dzien tygodnia

  //***************************************************

  //getdate

  $date = getdate();
  $day = $date['mday'];
  $month = $date['mon'];
  $year = $date['year'];
  $weekday = $date['wday']; //dzien tygodnia 0-6, 0-niedziela
  $yearday = $date['yday'] +1; //dzien roku
  $weekday1 = $date['weekday']; //dzien tygodnia 0-6, 0-niedziela
  $month1 = $date['month'];
  echo "$month1 <br>";

switch ($month) {
  case '1':
    $month = "styczeń";
    break;
  case '2':
    $month = "luty";
    break;
  case '3':
    $month = "marzec";
    break;
  case '4':
    $month = "kwiecien";
    break;
  case '5':
    $month = "maj";
    break;
  case '6':
    $month = "czerwiec";
    break;
  case '7':
    $month = "lipiec";
    break;
  case '8':
    $month = "sierpień";
    break;
  case '9':
    $month = "wrzesień";
    break;
  case '10':
    $month = "paźdiernik";
    break;
  case '11':
    $month = "listopad";
    break;
  case '12':
    $month = "grudzień";
    break;

}

switch ($weekday) {
  case '0':
    $weekday = "niedziela";
    break;
  case '1':
    $weekday = "poniedziałek";
    break;
  case '2':
    $weekday = "wtorek";
    break;
  case '3':
    $weekday = "środa";
    break;
  case '4':
    $weekday = "czwartek";
    break;
  case '5':
    $weekday = "piątek";
    break;
  case '6':
    $weekday = "sobota";
    break;

}

echo "$day-$month-$year, $weekday";

//znacznik czasu

$r1 = 2018;
$m1 = 9;
$d1 = 19;

$r2 = 1999;
$m2 = 3;
$d2= 7;

$czas1 = mktime(0,0,0,$m1,$d1,$r1);//godzina minuta sekunda miesiąc dzień rok
$czas2 = mktime(0,0,0,$m2,$d2,$r2);//godzina minuta sekunda miesiąc dzień rok
$czas = abs($czas2 - $czas1);
echo "<br>".$czas;

$dni = floor($czas/(60*60*24));
$lata = floor($dni/365);
echo "Ilość sekund: $czas <br>
      Ilość dni: $dni<br>
      Lata: $lata<br>";

//strtotime

echo "<hr>";
echo "<hr>";

$data = mktime();
echo $data,"<br>";
echo $datadzisiejsza = strtotime("now"),"<br>";
echo $dataurodzenia = strtotime("7 march 1999"),"<br>";
$szymon = abs($datadzisiejsza -$dataurodzenia);
echo $szymon,"<br>";

$dziesiecDniWstecz = strtotime("-10 day");
echo $dziesiecDniWstecz,"<br>";
$wczoraj = strtotime("yestarday");
echo $wczoraj,"yesterday <br>";

$nastepnyWeekend = strtotime("next week");
echo $nastepnyWeekend,"<br>";

$jutro = strtotime("tomorrow");
echo $jutro,"<br>";

$przyszlosc = strtotime("+10 day 8 hours 40 minutes 15 seconds");
echo $przyszlosc,"<br>";

/*Ile sekund ma jeden dzień*/

$dzisiaj = strtotime("today");
$dzienSekundy = $jutro - $dzisiaj;
echo $dzienSekundy,"<br>";
     ?>
  </body>
</html>
