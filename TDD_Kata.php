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
class TestIntToRoman extends \PHPUnit\Framework\TestCase {
    public function testNumbersFrom1To3AreConvertedWithIs()
    {
        $this->assertEquals('I', intToRomanString(1));
        $this->assertEquals('II', intToRomanString(2));
    }
}
