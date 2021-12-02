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
                $rest = $value-($value-($value%5)) ;
                $value = $value-$value%5;
                return $this->singleMinute($rest) . " " . $this->rowMinute($value);
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
                $singleHour = $singleHour . "R";
                $value--;
            }
            else{
                $singleHour = $singleHour . "O";
            }
        }


        return $singleHour;
    }

    public function rowHour($value): string
    {

        return $this->constructRowHour($value);
    }

    /**
     * @param $value
     * @return string
     */
    public function constructRowHour($value):string
    {
        $rowHour = "";
        $nbrHour = $value/5;
        for($i=0; $i<4; $i++){
            if($nbrHour>0){
                $rowHour = $rowHour .  "R";
                $nbrHour--;
            }
            else{
                $rowHour = $rowHour . "O";
            }

        }

        return $rowHour;
    }

    public function hour($value):string
    {
        if($value<4){
            return $this->singleHour(4) . " " . $this->rowHour(0);
        }
        else if($value>4){
            if($value%5==0){
                return $this->singleHour(0) . " " . $this->rowHour($value);
            }
            else{
                $rest = $value - ($value-($value%5));
                $value = $value-$value%5;
                return $this->singleHour($rest) . " " . $this->rowHour($value);
            }

        }

        return "";
    }

    public function second($value):string
    {
        if($value%2!=0) return "O";
        return "Y";
    }

    public function clock($hour,$minute,$second):string
    {
        return "\n " . $this->hour($hour) . "\n" . $this->minutes($minute) . "\n" . $this->second($second);
    }

}