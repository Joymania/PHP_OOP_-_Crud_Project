<?php

    class car{
        public $color;
        private $year;
        public $weight;
        public $color2=array('Red','Orrange','Black');

        public function year2($year){
            if(in_array($year,$this->color2)){
               $this->year=$year; 
            }
              
        }
        public function getYear(){
            return $this->year;
        }

    }

    $myCar=new Car();
    // $myCar->color='Red';
    // echo $myCar->color;
    $myCar->year2('White');
    echo $myCar->getYear();

?>