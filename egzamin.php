<?php
    echo 'Janusz';
   $liczba = 100;
    echo $liczba;
    echo "<br>Moja ulubiona liczba: $liczba";
        
    //typ skalarny prosty
        
    //typ boolean
        $prawda = true;
        $falsz = false;
    //typ integer
        $calkowita = 200;
        $hex = 0xA;
        $bin = 0b1010;
        $octa = 010;
        echo '<br>'."hex: $hex".'<br>'.
            "oct: $octa".
            '<br>'."bin: $bin";
    //float
        $floating = 5.7;
        echo '<br>'.$floating;
    //string
        $sznurek = 7.25;
        echo '<br>';
        echo "$sznurek";
        echo '$sznurek';
    
    //składnia heredoc
        $imie = "oliwer";
        $napis = <<<ETYKIETA
            moje imie: $imie
ETYKIETA;
echo '<br>'.$napis;

    //składnia nowdoc  - apostrof is a thing
    $nazwisko = "Nowak";
    $napis1 = <<<'B'
    Twoje nazwisko: $nazwisko
B;

echo '<hr>'.'<br>'.$napis1;
    //typy złożone
        //typ array (tablicowy)
        //typ object

    //typ specjalny
        //typ resource
        //typ null

        $inna = null;
        $inna1 = NULL;
    //************************************************************8

    echo "<br> Zmienna o nazwie \$nazwisko ma wartość $nazwisko";
?>