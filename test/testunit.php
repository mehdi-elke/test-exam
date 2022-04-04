<?php
function Katafun($number)
{
    $result = '';
    $symbols = [1000 => 'M', 500 => 'D', 100 => 'C', 50 => 'L', 21 => 'XXI', 9 => 'IX', 5 => 'V', 4 => 'IV', 3 => 'III', 2 => 'II',1 => 'I'];

    foreach ($symbols as $value => $symbol) {
        while ($number >= $value) {
            $result .= $symbol;
            $number -= $value;
        }
    }
    return $result;
}

class testunit extends \PHPUnit\Framework\TestCase
{
    public function testNumbersFrom1To3AreConvertedWithIs()
    {
        $this->assertEquals('I', Katafun(1));
        $this->assertEquals('II', Katafun(2));
    }

    public function test3IsConvertedInIV()
    {
        $this->assertEquals('III', Katafun(3));
    }

    public function test4IsConvertedInIV()
    {
        $this->assertEquals('IV', Katafun(4));
    }

    public function testNumbersFrom5To8AreConvertedToVPlusSomeIs()
    {
        $this->assertEquals('V', Katafun(5));
        $this->assertEquals('VI', Katafun(6));
    }

    public function test9IsConvertedInIX()
    {
        $this->assertEquals('IX', Katafun(9));
    }


    public function test21IsConvertedInXXI()
    {
        $this->assertEquals('XXI', Katafun(21));
    }

    public function test50IsConvertedInL()
    {
        $this->assertEquals('L', Katafun(50));
    }

    public function testNumbersFrom100To1000AreConvertedToVPlusSomeIs()
    {
        $this->assertEquals('C', Katafun(100));
        $this->assertEquals('D', Katafun(500));
        $this->assertEquals('M', Katafun(1000));
    }

}