<?php


use PHPUnit\Framework\TestCase;

require 'ClockBerlinKata.php';

class ClockBerlinKataTest extends TestCase
{

    public function testSingleMinute0ShouldReturn0():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->singleMinute(0);

        //Assert
        $this->assertEquals("",$actual);


    }


    public function testSingleMinute1ShouldRetunY():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->singleMinute(1);

        //Assert
        $this->assertEquals("Y", $actual);

    }

    public function testSingleMinute2ShouldReturnYY():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->singleMinute(2);

        //Assert
        $this->assertEquals("YY",$actual);

    }
}
