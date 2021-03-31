<?php
class test{
    public static $name;
    public static function work(){
        echo "My name is tutul & age is ". self::$name;
    }
}



test::$name=12;
test::work();