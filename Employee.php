<?php
	class Employee{
		private $name;
		private $position;
		private $civil;
		private $employment;
		private $totalHours;

		public function setValues($name, $position, $civil, $employment, $hours){
			$this->name = $name;
			$this->position = $position;
			$this->civil = $civil;
			$this->employment = $employment;
			$this->totalHours = $hours;
		}

		public function computeNetIncome(){
			$reg_pay = $this->computeRegularPay();
			$ot_pay = $this->checkOT();
			$grossIncome = $reg_pay + $ot_pay;

			$healthcare = $this->getHealthCare();
			$tax = $this->computeTax($grossIncome);
			$net = $grossIncome - ($healthcare + $tax);

			return number_format($net,2);

		}

		public function computeRegularPay(){
			if($this->totalHours > 40){
				if($this->position == "staff"){
					if($this->employment == "c"){return (300/8) * 40;}
					else if($this->employment == "p"){return (350/8) * 40;}
					else if($this->employment == "r"){return (400/8) * 40;}
				}else if($this->position == "admin"){
					if($this->employment == "c"){return (350/8) * 40;}
					else if($this->employment == "p"){return (400/8) * 40;}
					else if($this->employment == "r"){return (500/8) * 40;}
				}
			}else{
				if($this->position == "staff"){
					if($this->employment == "c"){return (300/8) * $this->totalHours;}
					else if($this->employment == "p"){return (350/8) * $this->totalHours;}
					else if($this->employment == "r"){return (400/8) * $this->totalHours;}
				}else if($this->position == "admin"){
					if($this->employment == "c"){return (350/8) * $this->totalHours;}
					else if($this->employment == "p"){return (400/8) * $this->totalHours;}
					else if($this->employment == "r"){return (500/8) * $this->totalHours;}
				}
			}
			
		}

		public function checkOT(){
			if($this->totalHours > 40){
				$ot = $this->totalHours - 40;
			}else{
				$ot = 0;
			}

			if($this->position == "staff"){
				if($this->employment == "c"){return ($ot * 10);}
				else if($this->employment == "p"){return ($ot * 25);}
				else if($this->employment == "r"){return ($ot * 30);}
			}else if($this->position == "admin"){
				if($this->employment == "c"){return ($ot * 15);}
				else if($this->employment == "p"){return ($ot * 30);}
				else if($this->employment == "r"){return ($ot * 40);}
			}

		}

		public function getHealthCare(){
			if($this->civil == "single"){return 200;}
			else if ($this->civil == "married"){return 75;}
		}

		public function computeTax($grossIncome){
			if($this->civil == "single"){
				if($grossIncome <= 1000){
					$tax = 0;
				}else{
					$tax = $grossIncome * 0.05;
				}
			}else if($this->civil == "married"){
				if($grossIncome <= 1500){
					$tax = 0;
				}else{
					$tax = $grossIncome * 0.03;
				}
			}

			return $tax;
		}
	}
?>