<?php

class test{
    public $name;

    public function __construct($name)
    {
        $this->name=$name; 
    }
    public function get_name(){
        echo "My name is ".$this->name;
    }

}
class test2 extends test{
    public $roll=12;
    public function roll(){
        echo "My roll is ".$this->roll;
    }
    public function get_name(){
        echo "My name is ".$this->name." roll is ".$this->roll;
    }
}
class test3 extends test2{
    
}
$xmpl=new test('tutul');

$xmpl2=new test2('tutul');
$xmpl2->get_name();
