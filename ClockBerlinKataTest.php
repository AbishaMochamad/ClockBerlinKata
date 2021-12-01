<?php


use PHPUnit\Framework\TestCase;

require 'ClockBerlinKata.php';

class ClockBerlinKataTest extends TestCase
{
    public function testSingleMinute1ShouldRetunY():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->singleMinute(1);

        //Assert
        $this->assertEquals("Y", $actual);

    }
}
