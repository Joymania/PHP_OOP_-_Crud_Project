<?php 
abstract class AbstractClass{
    abstract protected function getName($name);
}
class child extends AbstractClass{
    public $value;
    public function getName($name,$prefix='MR.'){
        return "Hi ".$prefix.' '.$name;
    }
    public function getValue($value){
        echo $this->value=$value;
    }
}

$obj=new child();
 echo $obj->getName('Tutul');
 $obj->getValue(17);