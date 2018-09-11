<?php
$a = 1.0;
$b = 1;

if ($a == $b) { //będą równe
  echo "równe";
}else{
  echo "różne";
}
echo "<br>";
if ($a === $b) { //będą różne bo === to pytanie o identycznosć nawet typu
  echo "równe";
}else{
  echo "zmienne";
}
echo "<br>";
echo gettype($a)."<br>";
echo gettype($b)."<br>";

$x = 2;
echo $x++; //2
echo ++$x;//4
echo $x;//4
$y = $x++;//4
echo $y;//4
$y = ++$x;//6
echo $y;//7
echo ++$y;


echo "<br><hr>";

$tekst1 = "4dssd";
$tekst2 = "Drugi tekst";
$tekst3 = "7";
$liczba1 = 14;
$j = -1;
$c = 100;

//operatory rzutowania

//bool int float, string array objcet unserialize

 $dwa = (int)$tekst1; // 4 bo liczba na pocxzątku
 $trzy = (int)$tekst3; //7
 echo $trzy."<br>";
 $j = (bool)$j;
 echo $j."<br>";//1

 $c = (unset)$c;
 echo $c."<br>";//nic nie wyswietla
echo gettype($c)."<br>";

$tekst2 = (int)$tekst2;
echo $tekst2."<br>";// 0

$liczba1 = (float)$liczba1;
echo $liczba1."<br>";// 14
echo gettype($liczba1)."<br>";//double

//rozmiar typu int

echo PHP_INT_SIZE."<br>";

//kontrola typu zmiennych

$tekst = "szkola";
$x = 10;
$a = 20;
$y = true;
$z = NULL;
$w;

echo gettype($tekst)."<br>";
echo gettype($x)."<br>";
echo gettype($a)."<br>";
echo gettype($y)."<br>";
echo gettype($z)."<br>";
echo @gettype($w)."<br><hr>";

echo is_string($tekst); //1
echo is_string($x); //nic
echo is_bool($y); // 1
echo is_float($a); // 1
echo is_int($x); // 1

echo @is_null($w)."<hr>"; // 1

//zmienne superglobalne
// _GET _POST _COOKIE _FILES _SESSION

echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['SCRIPT_NAME']."<br>";
echo $_SERVER['SERVER_PROTOCOL']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";

$lokal = $_SERVER['DOCUMENT_ROOT'];
$lokal .=$_SERVER['SCRIPT_NAME']; //dołączenie do stringu
echo $lokal."<hr>";

//stałe
//nazwy z dużych litery

define('NAZWISKO', 'Kowal');

echo NAZWISKO;
NAZWISKO = nowa;
 ?>
