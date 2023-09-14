<?php
class Rectangle{
    public $length;
    public $width;

    public function __construct($l, $w){
        $this->length = $l;
        $this->width = $w;
    }
    public function area(){
        $area = $this->length * $this->width;
        return $area;
    }
    public function perimeter(){

        $perimeter = 2*($this->length + $this->width);
        return $perimeter;
    }
}

$obj = new Rectangle(6,6);
echo $obj->area();
echo "<br>";
echo $obj->perimeter();
echo "<br>";

