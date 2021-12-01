<?php


class ClockBerlinKata
{
    public function singleMinute($value):string
    {
        if($value == 2){
            return 'YY';
        }
        return 'Y' ;
    }
}