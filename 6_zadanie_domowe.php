<?php
$liczby = array(
    array(
        array(
            1,
            2,
            3
        ),
        array(
            4,
            5,
            6,
            7,
            8
        ),
        array(
            40,
            50,
            60,
            70,
            80
        )
    ),    
    array(
        array(
            41,
            22,
            35,
            120,
            13
        ),
        array(
            'asia',
            'julia',
            'daniel',
            'mateusz',
            'kuba'
        )
    ),    
    array(
        array(
            11,
            22,
            33,
            44,
            33
        ),array(
            110,
            220,
            330,
            440,
            303
        ),array(
            0x11,
            0x22,
            0x33,
            0x44,
            0x33
        ),array(
            11,
            22,
            33,
            44,
            33
        ),
    )
);
function wyswietl($arr){
    foreach($arr as $key1 => $value1){
        foreach($value1 as $key2 => $value2){
            echo "<br>";
            foreach($value2 as $key3 => $value3){
                echo $value3." ";
            }
                
        }

    echo "<br>";
    }
        
}
//echo "<pre>";
//print_r($liczby);
//echo "</pre>";
wyswietl($liczby);
?>