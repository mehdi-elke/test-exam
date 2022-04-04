<?php
function intToRomanString($number){
    $res = '';
    $symbolesToInt = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        100 => 'C',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];

    foreach ($symbolesToInt as $value => $symbol) {
        while ($number >= $value) {
            $res .= $symbol;
            $number -= $value;
        }
    }
    return $res;
}

print_r(intToRomanString(23));