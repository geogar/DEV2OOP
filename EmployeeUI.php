<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="card w-50 mx-auto d-block mt-5">
			<div class="card-body" style="font-size: 14px;">
				<form method="post">
					Name <input type="text" name="name" class="form-control">
					Position <br>
						<input type="radio" name="position" value="staff" >Staff
						<input type="radio" name="position" value="admin">Admin <br>
					Civil Status <br>
						<input type="radio" name="civil" value="single" >Single
						<input type="radio" name="civil" value="married">Married <br>
					Employment Status <br>
						<select name="employment" class="form-control">
							<option value="c">Contractual</option>
							<option value="p">Probationary</option>
							<option value="r">Regular</option>
						</select>
					# of Hours Worked <input type="text" name="hours" class="form-control"><br>

					<input type="submit" name="compute" value="Compute" class="btn btn-success btn-block">

				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
	if(isset($_POST["compute"])){
		function getInputs(){
			$name = $_POST["name"];
			$position = $_POST["position"];
			$civil = $_POST["civil"];
			$employment = $_POST["employment"];
			$hours = $_POST["hours"];

			processData($name, $position, $civil, $employment, $hours);
		}

		function processData($name, $position, $civil, $employment, $hours){
			include 'employee.php';

			$e = new Employee;
			$e->setValues($name, $position, $civil, $employment, $hours);

			echo "<div class='mt-5 container text-center bg-dark text-white'> Net Income: " .$e->computeNetIncome(). "</div>";
		}

		getInputs();
	}
?>
<!-- Employee.php
    properties (private):
        name
        position
        civilStatus
        employmentStatus
        hrsWorked
    
    methods:
        1 day = 8hrs
        1 week = 40hrs only
        45hrs (40hrs regular, 5hrs overtime)

        gross income = regular pay + overtime pay
        net income = gross income - Deductions
        
        Regular Pay
            position
                Staff
                    Contractual: 300/day (calculate first the hourly rate, then multiply to the number of hours worked)
                    Probationary: 350/day
                    Regular: 400/day
                Admin
                    Contractual: 350/day
                    Probationary: 400/day
                    Regular: 500/day
        
        Overtime Pay
            position
                Staff
                    Contractual: 10/hr
                    Probationary: 25/hr
                    Regular: 30/hr
                Admin
                    Contractual: 15/hr
                    Probationary: 30/hr
                    Regular: 40/hr
        
        Deductions
            Healthcare:
                Single = 200
                Married = 75
            
            Tax:
                Single
                    gross income <= 1000
                        tax = 0
                    gross income > 1000
                        tax = 5% of gross income
                Married 
                    gross income <= 1500
                        tax = 0
                    gross income > 1500
                        tax = 3% of gross income -->


                        




















