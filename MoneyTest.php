<?php
class MoneyTest extends PHPUnit_Framework_TestCase
{
    // ...

    
    public function testPlus()
    {   
        $re="1";
        $oo = new Fizz(1);
        $this->assertEquals($re,$oo->calculateNumber());
        
    }

    // ...
}
