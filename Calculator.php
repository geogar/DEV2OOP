<?php
    class Calculator{
        private $num1;
        private $num2;
        private $op;

        public function set_values($n1, $n2, $op){
            $this->num1 = $n1;
            $this->num2 = $n2;
            $this->op = $op;
        }

        public function getFirstNum(){
            return $this->num1;
        }

        public function getSecondNum(){
            return $this->num2;
        }

        public function getOperator(){
            return $this->op;
        }

        public function compute(){
            if($this->op == "+"){
                $ans = $this->num1 + $this->num2;
            }else if($this->op == "-"){
                $ans = $this->num1 - $this->num2;
            }else if($this->op == "*"){
                $ans = $this->num1 * $this->num2;
            }else if($this->op == "/"){
                $ans = $this->num1 / $this->num2;
            }

            return $ans;
        }
    }
?>


