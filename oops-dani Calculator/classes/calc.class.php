<?php

class Calc{

    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operatorVar, int $num1Var,int $num2Var){

        $this->operator = $operatorVar;
        $this->num1 = $num1Var;
        $this->num2 = $num2Var;
    }
    public function calculator(){
        switch($this->operator){
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                // break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                // break;
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                // break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                // break;
            default:
                echo "Error";
                break;

        }
    }
}