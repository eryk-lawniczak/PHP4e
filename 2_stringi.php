<!doctype html>
<html>
<head>
    <title>Stringi</title>
</head>
<body>
    Masz na imie:
    <?php
        $imie = "Janusz";
        echo  "$imie<hr>";

    $text = <<<TEKST
    zsk - Zespół
    szkół
    komunikacji
TEKST;

    echo "Przed użyciem funkcji nl2br: <br>$text<hr>";
    echo "po użyciu funkcji nlbr2: <br>";
    echo nl2br($text);


    //zamiana na małe literki
    echo '<br>'.strtolower($text);
    //zamiana na duże literki
    echo '<br>'.strtoupper($text);
    //zamiana pierwszej litery na dużą
    $text = "jan Kowal nowak";
    echo '<br>'.ucfirst($text);
    //zamiana wszystkich pierwszych liter na dużą
    $text = "jan Kowal nowak";
    echo '<br>'.ucwords($text).'<br>';
    //zmienna lorem

    $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate quis diam quis hendrerit. Mauris consectetur dictum sapien et condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer porta ipsum ac odio laoreet commodo. Vestibulum ac fermentum massa. Suspendisse nec nunc porta, cursus elit id, faucibus risus. Suspendisse varius ligula efficitur nisi iaculis faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin sed risus sed odio dictum consectetur ut et diam. Vestibulum non sem et lacus congue fermentum. Duis non ipsum feugiat, ornare ligula sed, finibus orci. Donec ut felis a purus ultricies placerat. Ut id mattis lectus.";
        echo $lorem.'<br>'.'<br>';
    //zawijanie wierszy
    $kol = wordwrap($lorem, 50, '<br>');
    echo $kol.'<br><br>';
    //usuwanie białych znaków
    $imie2 = "filip";
    $imie3 = "  filip ";
     echo   strlen($imie2).'<br>'; //długość ciągu znaków
     echo   strlen($imie3).'<br>'; //długość ciągu znaków
     echo   strlen(ltrim($imie3)).'<br>'; //długość ciągu znaków bez białych znaków z lewej
     echo   strlen(rtrim($imie3)).'<br>'; //długość ciągu znaków bez białych znaków z prawej
     echo   strlen(trim($imie3)).'<br>'; //długość ciągu znaków bez białych znaków wszędzie
    //przeszukiwanie
    $adres = "Poznań, ul. Fredry, tel. (61) 445-44-58";

    $szukaj = strstr($adres, "tel");
    echo '<hr>'.$szukaj.'<br>';
    $szukaj1 = strstr($adres, "tel", true);
    echo $szukaj1.'<br>';
    $szukaj2 = strstr($adres, "Tel", true);
    echo $szukaj2.'<br>'; //nic nie wyświetli
    $szukaj3 = stristr($adres, "Tel", true);
    echo $szukaj3.'<br>';

    echo '<br> <hr>';

    $mail = strstr("zsk@poznan.pl", 64);
    echo $mail.'<br>';

    echo '<br> <hr>';

    $ciag1 = "a";
    $ciag2= "c";

    echo strcmp($ciag1, $ciag2);

    $poz = strpos("abcdefg", "cde");
        echo '<br>'.$poz;

    $text1 = "abcdabcd";
    $text2 ="abc";

    if (strpos($text1, $text2) === false){
        echo "Ciąg $text2 nie został znaeziony w ciągu $text1";
    }
    else{
        echo "Znalzłem $text2!";
    }
    //przetwarzanie siadjnrknjekjndgfjnfgjnorsno;i
    $zmien = str_replace("%imie%", "janusz", "%imie% to nie janusz imie %imie% to styl życia ");
    echo '<br>'.$zmien;
    //napisz program ktory będzie cenzurował zdanie z formularza

    echo <<<FORM
        <form method="post">
        <input type="text" name="dane"><br>
        <input type="submit"><br>
    </form>
FORM;
    if(isset($_POST['dane']))
    {
        echo $_POST['dane'];
    }

    if(isset($_POST['dane']))
    {
        $cenzura = array("zsk", "zsł", "zse");
        $zamiana = array("*__*" ,"*__*","*__*" );
        $dane = $_POST['dane'];
        $poprawioneDane = str_replace($cenzura, $zamiana, $dane);
        echo "Dane przed zamianą $dane"."<br>";
        echo "Dane po zmianie $poprawioneDane";
    }
    ?>

    </body>
</html>
