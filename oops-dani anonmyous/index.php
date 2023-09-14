<?php
// Regular Class

include_once "classes/simpleclass.class.php";
$obj = new SimpleClass();
$obj->helloWorld();


// Anonymous class
// Anonymous class dont get sstored in memory so they are less heavy to use.

$newObj = new class(){
    public function helloWorld(){
        echo "Hello World";
    }
};
$newObj->helloWorld();