<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Tablice</title>
  </head>
  <body>
<?php
  //tablice indeksowane numerycznie
  $kolory = array('biały', 'czerwony', 'zielony');
  echo "Początkowa zawartość tablicy: <br>";


  for ($i=0; $i < count($kolory); $i++) {
    $element = $i +1;
    echo "Element $element: $kolory[$i]"."<br>";
  }

  $kolory[0] = "aqua";
  $kolory[1] = "magenta";
  $kolory[2] = "orange";

  function wypisz($tablica){
    for ($i=0; $i < count($tablica); $i++) {
      $element = $i +1;
      echo "Element $element: $tablica[$i]"."<br>";
    }
  }

  wypisz($kolory);
  //tablice asocjacyjne

  $dane = array(
    'imie' => "Janusz" ,
    'nazwisko' => "Nowak" ,
    'wiek' => 20 ,
    'narodowosc' => "Polska"
  );

  echo "<hr>Zawartość tablicy \$dane<br>";

  echo<<<TABLICA
    imię: $dane[imie]<br>
    nazwisko: {$dane['nazwisko']}<br>
    wiek: $dane[wiek]<br>
    narodowosc: $dane[narodowosc]<br>
TABLICA;

echo "<hr><hr>";
//for each
echo "For each<br>";
foreach ($dane as $wartosc ) {
  echo "Wartość: $wartosc<br>";
}
echo "<hr><hr>";
foreach ($dane as $klucz => $wartosc) {
  echo "$klucz: $wartosc<br>";
}

//tablice wielowymiarowe
$uczen = array(
  array('Janusz', 'Kowal', 20),
  array('Adrian', 'Kowal', 21),
  array('Julia', 'Tomczak', 18)
);
echo "<br><br>";
for ($i=0; $i < count($uczen); $i++) {
  for ($j=0; $j < count($uczen[$i]); $j++) {
    echo $uczen[$i][$j]."  ";
  }
  echo "<br>";
}
echo "<br>";
foreach ($uczen as $key => $array) {
  foreach ($array as $key1 => $value) {
    //echo $uczen[$key][$key1]."  "; to działa
    echo $value." "; // to też działa
  }
  echo "<br>";
}
//zadanko domowe
//utwórz tablicę 3 wymiarową i napisz dla niej funkcję wyświetlającą zawartość
//(wykorzystaj pętlę for each)

//******************************************************************************

$cyfry = array(
  array(1, 2,3,4),
  array(5,6,7),
  array(8),
  array(9,20,10,11)
);
echo "<br><hr>";
echo "<hr>";

foreach ($cyfry as $key => $array) {
  foreach ($array as $key1 => $value) {
    echo $value." ";
  }
  echo "<br>";
}

echo " <hr>";
echo " <hr>";

//sortowanie

$arr = array(
  10,11,23,4,7,-34,8,23,10,101,-23,244
);

function wyswietl($array){
  foreach ($array as $key => $value) {
    echo $value.", ";
  }
  echo "<br>";
}
wyswietl($arr);

//sortowanie rosnąco
sort($arr);
wyswietl($arr);
//sortowanie malejąco
rsort($arr);
wyswietl($arr);
//*************************************************************

$arr1 = array("Julia", "anna", "krystian", "Zenon");

wyswietl($arr1);
sort($arr1);
wyswietl($arr1); //Julia, Zenon, anna, krystian,

$arr2 = array("Julia", "anna", "krystian", "Zenon");
wyswietl($arr2);

foreach ($arr2 as $key => $value) {
  $value = mb_strtolower($value);
  $arr2[$key] = $value;
}
wyswietl($arr2);
sort($arr2);
wyswietl($arr2);
foreach ($arr2 as $key => $value) {
  $value = ucwords($value);
  $arr2[$key] = $value;
}
wyswietl($arr2);
echo "<hr><HR>";
//sortowanie tablicy asocjacyjnej
$asarr = array(
    'imie' => 'andrzej',
    'pseudonim' => '3endur',
    'wiek' =>24,
    'nazwisko' =>'kowal'
);

wyswietl($asarr);
//sortowanie według zawartości

asort($asarr);
wyswietl($asarr);

echo gettype($asarr['pseudonim'])." ";
echo gettype($asarr['wiek'])."<br>";

arsort($asarr);
wyswietl($asarr);

//sortowanie według klucza
echo "<br>";
echo "<br>";
ksort($asarr);
wyswietl($asarr);
echo "<br>";
krsort($asarr);
wyswietl($asarr);

//wyswietlanie danych z tablicy

var_dump($asarr);
echo "<br>";
print_r($asarr);
echo "<pre>";
print_r($asarr);
echo "</pre>";
echo "<pre>";
var_dump($asarr);
echo "</pre>";
echo "<hr><hr>";

$liczby  = range(10, 0);
echo "<pre>";
print_r($liczby);
echo "</pre>";
$liczby2  = range(2, 15, 2);
echo "<pre>";
print_r($liczby2);
echo "</pre>";
$literki  = range('a', 'k', 3);
echo "<pre>";
print_r($literki);
echo "</pre>";


//shuffle

$liczby3 = range(1,30);
shuffle($liczby3);
echo "<pre>";
print_r($cyfry);
echo "</pre>";

?>
  </body>
</html>
