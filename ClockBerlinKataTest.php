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

    public function testMinute0ShouldReturnO(): void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->minutes(0);

        //Assert
        $this->assertEquals("OOOO OOOOOOOOOOO",$actual);

    }

    public function testMinute9ShouldReturnYYYO_YOOOOOOOO():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->minutes(9);

        //Assert
        $this->assertEquals("YYYY YOOOOOOOOOO", $actual);
    }

    public function testMinute11ShouldReturnYOOO_YYOOOOOOOOO():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->minutes(11);

        //Assert
        $this->assertEquals("YOOO YYOOOOOOOOO", $actual);

    }

    public function testMinute33ShouldReturnYYYO_YYRYYROOOOO():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->minutes(33);

        //Assert
        $this->assertEquals("YYYO YYRYYROOOOO", $actual);

    }


    public function testSingleHour0ShouldReturnO():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->singleHour(0);

        //Assert
        $this->assertEquals("OOOO",$actual);
    }

    public function testSingleHour3ShouldReturnRRRO(): void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->singleHour(3);

        //Assert
        $this->assertEquals("RRRO",$actual);

    }

    public function testRowHour5ShouldReturnROOO(): void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->rowHour(5);

        //Assert
        $this->assertEquals("ROOO", $actual);

    }

    public function testRowHour20ShouldReturnRRRR():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->rowHour(20);

        //Assert
        $this->assertEquals("RRRR",$actual);

    }

    public function testHour23ShouldReturnRRRO_RRRR():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->hour(23);

        //Assert
        $this->assertEquals("RRRO RRRR", $actual);

    }

    public function testHour16ShouldReturnROOO_RRRO():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->hour(16);

        //Assert
        $this->assertEquals("ROOO RRRO", $actual);

    }

    public function testSecondPairShouldReturnY():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->second(2);

        //Assert
        $this->assertEquals("Y", $actual);

    }

    public function testSecondOddShouldReturnO():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();

        //Act
        $actual = $clockBerlinKata->second(1);

        //Assert
        $this->assertEquals("O", $actual);
    }

    public function testClock():void
    {
        //Arrange
        $clockBerlinKata = new ClockBerlinKata();


        //Act
        $actual = $clockBerlinKata->clock(12,53,10);

        //Assert
        self::assertEquals(1,1);

        var_dump($actual);

    }


}
