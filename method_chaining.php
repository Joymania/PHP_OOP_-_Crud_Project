<?php

    class car{
        public $name;
        private $age;

        public function setName($name){
            $this->name=$name;
            return $this;
        }
        public function setAge($age){
            $this->age=$age;
            return $this;
        }
        public function getInfo(){
            echo "My name is ".$this->name." & age is ".$this->age;
        }

    }

    $myCar=new Car();
    // $myCar->color='Red';
    // echo $myCar->color;
    // $myCar->year2('White');
    // echo $myCar->getYear();

    echo $myCar->setName('Khorshed Hasan')->setAge('25')->getInfo();

?>