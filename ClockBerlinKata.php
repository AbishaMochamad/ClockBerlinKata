<?php


class ClockBerlinKata
{
    public function singleMinute($value):string
    {
        if($value == 0){
            return "";
        }
        else if($value == 2){
            return 'YY';
        }
        else if($value == 3){
            return 'YYY';
        }
        else if($value == 4){
            return 'YYYY';
        }

        return 'Y' ;
    }
}