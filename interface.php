<?php

interface test{
    public function xyz($x,$y,$z);
}

class test2 implements test{
    public function xyz($x,$y,$z){
        return $x*$y*$z;
    }
}

$obj=new test2();
 echo $obj->xyz(5,6,7);