<?php
    class School{
        private $name;
        private $level;
        private $units;
        private $lab;

        public function set_values($name, $level, $units, $add){
            $this->name = $name;
            $this->level = $level;
            $this->units = $units;
            $this->lab = $add;
        }

        public function compute(){
            $total_tuition = $this->get_total() + $this->get_addOn();

            return $total_tuition;
        }

        public function get_total(){
            if($this->level == 1){
                return $this->units * 550;
            }else if($this->level == 2){
                return $this->units * 630;
            }else if($this->level == 3){
                return $this->units * 470;
            }else if($this->level == 4){
                return $this->units * 501;
            }
        }

        public function get_addOn(){
            if($this->lab == "yes"){
                if($this->level == 1){
                    return 3359;
                }else if($this->level == 2){
                    return 4000;
                }else if($this->level == 3){
                    return 2890;
                }else if($this->level == 4){
                    return 3555;
                } 
            }else{
                return 0;
            }
        }
    }
?>