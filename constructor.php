<?php

class test{
    public $name;
    const roll=12;
    public function __construct($name)
    {
        echo $this->name=$name;
        
    }
    public function roll(){
        return test::roll;
    }
}

$xmpl=new test('tutul ');
echo $xmpl->roll();