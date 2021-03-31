<?php
class test{
    public $name;
    const roll=12;

    public function work($name){
        $this->name=$name;
        echo "My name is {$this->name} and my roll is ".self::roll;
    }

}

$xmpl=new test();
$xmpl->work("tutul");
echo test::roll;