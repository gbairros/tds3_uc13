<?php
class Date {
    private $day;
    private $month;
    private $year;

    function __construct($day, $month, $year) {
        $this->setDay($day); 
        $this->setmonth($month);
        $this->setYear($year);
    }

    private function getMaxMonthDay($month):int { 
        //fevereiro
        if(($month == 2)){
            return 28;
        } 
        //Abril, Junho, Setembro, Novembro
        else if (($month == 4 || $month == 6 || $month == 9 || $month == 11)){
            return 30;
        }
        //Janeiro, Marco, Maio, Julho, Agosto, Outubro, Dezembro
        else if(($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) ){
            return 31;
        }
       
    } 


    private function validateMonthSize($month) { 
        //fevereiro
        if(($this->month == 2) && ($this->day > 0 && $this->day <= 29)){
            return true;
        } 
        //Abril, Junho, Setembro, Novembro
        else if (($this->month == 4 || $this->month == 6 || $this->month == 9 || $this->month == 11) && ($this->day > 0 && $this->day <= 30)){
            return true;
        }
        //Janeiro, Marco, Maio, Julho, Agosto, Outubro, Dezembro
        else if(($this->month == 1 || $this->month == 3 || $this->month == 5 || $this->month == 7 || $this->month == 8 || $this->month == 10 || $this->month == 12) && ($this->day > 0 && $this->day <= 31) ){
            return true;
        }
       
    } 
        
    public function getDate() {
        if($this->validateMonthSize($this->month)){
            return $this->day ."/".$this->month ."/".$this->year;
        }
        return "ERRO";
    }
    
    public function getDay() { 
        return $this->day; 
    }

    public function setDay($day) { 
        if(is_numeric($day) && $day > 0 && $day <=  31) {
            $this->day =  $day;
        } 
    }

    public function getMonth() { 
        return $this->month; 
    }

    public function setMonth($month) { 
        if (is_numeric($month) && $month > 0 && $month <= 12){
            $this->month = $month;
        }
    } 

    public function getYear() { 
        return $this->year; 
    }

    public function setYear($year) { 
        if(is_numeric($year) && $year > 0){
           $this->year = $year; 
        }
    }

    public function nextDate($day, $month, $year){ 
        if($day == $this->getMaxMonthDay($month)){
            $nextDay = 1;
            $nextMonth = $month + 1;
        }
        else{
            $nextDay = $day + 1;
            $nextMonth = $month;
        }

        if($day == $this->getMaxMonthDay($month) && $month == 12){
            $nextDay = 1;
            $nextMonth = 1;
            $nextYear = $year +1 ;  
        }
        else{
            $nextYear = $year;  
        }

        return $nextDay . "/" . $nextMonth . "/".$nextYear;
    }

    public function nextDateCorrect(){ 
        if($this->day == $this->getMaxMonthDay($this->month)){
            $nextDay = 1;
            $nextMonth = $this->month + 1;
        }
        else{
            $nextDay = $this->day + 1;
            $nextMonth = $this->month;
        }

        if($this->day == $this->getMaxMonthDay($this->month) && $this->month == 12){
            $nextDay = 1;
            $nextMonth = 1;
            $nextYear = $this->year +1 ;  
        }
        else{
            $nextYear = $this->year;  
        }

        
        return new Date($nextDay,$nextMonth, $nextYear);
    }
}
