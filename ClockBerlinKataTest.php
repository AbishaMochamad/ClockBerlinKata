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
        $this->assertEquals("OOOO",$actual);


    }


    public function testSingleMinute1ShouldRetunY():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->singleMinute(1);

        //Assert
        $this->assertEquals("YOOO", $actual);

    }

    public function testSingleMinute2ShouldReturnYY():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->singleMinute(2);

        //Assert
        $this->assertEquals("YYOO",$actual);

    }

    public function testSingleMinute3ShouldReturnYYY():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->singleMinute(3);

        //Assert
        $this->assertEquals("YYYO", $actual);


    }

    public function testSingleMinute4ShouldReturn4():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->singleMinute(4);

        //Assert
        $this->assertEquals("YYYY",$actual);

    }

    public function testRowMinute0ShouldReturn0():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->rowMinute(0);

        //Assert
        $this->assertEquals("OOOOOOOOOOO",$actual);

    }

    public function testRowMinute5ShouldReturnY():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->rowMinute(5);

        //Assert
        $this->assertEquals("YOOOOOOOOOO", $actual);
    }

    public function testRowMinute10ShouldReturnYY():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->rowMinute(10);

        //Assert
        $this->assertEquals("YYOOOOOOOOO", $actual);

    }
    public function testRowMinute15ShouldReturnYY():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->rowMinute(15);

        //Assert
        $this->assertEquals("YYROOOOOOOO", $actual);

    }


}
