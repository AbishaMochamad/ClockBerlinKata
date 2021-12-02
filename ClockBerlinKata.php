<?php


class ClockBerlinKata
{
    public function singleMinute($value):string
    {
        /*if($value == 0){
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
        }*/

        return $this->constructSingleMinute($value);
    }
    /**
     * @param $value
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
       /*if($value == 5){
            return "YOOOOOOOOOOO";
        }
        if($value == 10){
            return "YYOOOOOOOOOO";
        }
        if($this->constructRowMinute($value)){
            return "YYROOOOOOOOO";
        }*/

        return $this->constructRowMinute($value);
    }

    /**
     * @param $value
     * @return string
     */
    public function constructRowMinute($value): string
    {

       $color = $value/5;
        $rowMinute = "";
        for($i=1; $i<=11;$i++){
            if($i%3==0 && $i<=$color){
                $rowMinute = $rowMinute . "R";
            }
            else if($i<=$color && !$i%3==0){
                $rowMinute = $rowMinute . "Y";
            }
            else if($i > $color){
                $rowMinute = $rowMinute . "O";
            }
        }
        return $rowMinute;
    }


}