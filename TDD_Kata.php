<?php

use PHPUnit\Framework\TestCase;

function intToRomanString($number){
    $res = '';
    $symbolesToInt = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
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
class TDD_Kata extends TestCase {
    public function testNumbersFrom1To3AreConvertedWithIs()
    {
        $this->assertEquals('I', intToRomanString(1));
        $this->assertEquals('II', intToRomanString(2));
    }

    public function test1999IsConvertedInMCMXCIX()
    {
        $this->assertEquals('M' . 'CM' . 'XC' . 'IX', intToRomanString(1999));
    }
    public function test692IsConvertedInDCXCII()
    {
        $this->assertEquals('D' . 'C' . 'XC' . 'II', intToRomanString(692));
    }

    public function test544IsConvertedInDXLIV()
    {
        $this->assertEquals('D' . 'XL' . 'IV', intToRomanString(544));
    }
    public function test431IsConvertedInCDXXXI() // Test les chiffres avec 400, avec 10, avec 1
    {
        $this->assertEquals('CD' . 'XXX' . 'I', intToRomanString(431));
    }
}
