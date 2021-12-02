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
                $value--;
            }
            else{
                $singleMinute = $singleMinute . "O";
            }

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

    public function minutes($value): string
    {
        if($value<4){
            return $this->singleMinute($value) . " " . $this->rowMinute(0);
        }
        if($value>4){
            if($value%5==0){
                return $this->singleMinute(0) . " " . $this->rowMinute($value);
            }
            else{
                $reste = $value-($value-($value%5)) ;
                return $this->singleMinute($reste) . " " . $this->rowMinute($value);
            }
        }

        return $this->rowMinute($value);
    }

    public function singleHour($value): string
    {


        return $this->constructSingleHour($value);
    }

    /**
     * @param $value
     * @return string
     */
    public function constructSingleHour($value): string
    {
        $singleHour = "";
        for($i=0;$i<4;$i++){
            if($value>0){
                $singleHour = $singleHour . "Y";
                $value--;
            }
            else{
                $singleHour = $singleHour . "O";
            }
        }

        return $singleHour;
    }





}