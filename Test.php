<?php

use PHPUnit\Framework\TestCase;

class ConvertToromain{ 

    function ConvertNumber($number)
    {
        $result = '';
        $symbols = [1000 => 'M', 900 => 'CM', 100 => 'C', '90' => 'XC', 10 => 'X', 9 => 'IX', 5 => 'V', 4 => 'IV', 3 => 'III', 2 => 'II',1 => 'I'];
    
        foreach ($symbols as $value => $symbol) {
            while ($number >= $value) {
                $result .= $symbol;
                $number -= $value;
            }
        }
        return $result;
    }


}

class Test extends TestCase
{

    public function testNumbersFrom1To3AreConvertedWithIs()
    {
        $this->assertEquals('I', ConvertToromain(1));
        $this->assertEquals('II', ConvertToromain(2));
    }

    public function test3IsConvertedInIV()
    {
        $this->assertEquals('III', ConvertToromain(3));
    }

    public function test4IsConvertedInIV()
    {
        $this->assertEquals('IV', ConvertToromain(4));
    }

}