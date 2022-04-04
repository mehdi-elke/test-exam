<?php

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    public function testNumbersFrom1To3AreConvertedWithIs()
    {
        $this->assertEquals('I', ConvertToromain(1));
        $this->assertEquals('II', ConvertToromain(2));
    }

}