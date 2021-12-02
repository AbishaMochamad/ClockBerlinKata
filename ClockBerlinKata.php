<?php


class ClockBerlinKata
{
    public function singleMinute($value):string
    {
        if($value == 0){
            return 'OOOO';
        }
        else if($value == 2){
            return 'YYOO';
        }
        else if($value == 3){
            return 'YYYO';
        }
        else if($value == 4){
            return 'YYYY';
        }

        return 'YOOO' ;
    }

    public function rowMinute($value):string
    {
        if($value == 5){
            return "YOOOOOOOOOOO";
        }
        if($value == 10){
            return "YYOOOOOOOOOO";
        }
        return 'OOOOOOOOOOOO';
    }

}