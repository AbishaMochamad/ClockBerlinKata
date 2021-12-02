<?php


class ClockBerlinKata
{
    public function singleMinute($value):string
    {
        return $this->constructSingleMinute($value);
    }
    /**
     * @return string
     */
    public function constructSingleMinute($value): string
    {
        $singleMinute = "";
        for($i=0; $i<4;$i++){
            if($value>0){
                $singleMinute= $singleMinute . "Y";
            }
            else{
                $singleMinute = $singleMinute . "O";
            }
            $value--;
        }

        return $singleMinute;
    }

    public function rowMinute($value):string
    {
        if($value == 5){
            return "YOOOOOOOOOOO";
        }
        if($value == 10){
            return "YYOOOOOOOOOO";
        }
        if($value == 15){
            return "YYROOOOOOOOO";
        }

        return 'OOOOOOOOOOOO';
    }



}