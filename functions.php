<?php

    class Calculator{
        function add($x,$y){
            echo"Sumation = ".($x+$y)."<br>";
        }
        function sub($x,$y){
            echo"Subtraction  = ".($x-$y)."<br>";
        }
        
        function multi($x,$y){
            echo"Multiplication = ".($x*$y)."<br>";
        }        
        function div($x,$y){
            echo"Division = ".($x/$y)."<br>";
        }
    }
    class Calculation_2{

        public $a=0;
        public $b=0;
        public $result;

        public function getValue($x,$y)
        {
            $this->a = $x;
            $this->b = $y; 
            return $this;
        }
        public function getResult(){
            $this->result = ($this->a+$this->b); 
            return $this->result;
        }
    }





?>