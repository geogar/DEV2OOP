<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="w-50 mx-auto mt-3">
        <input type="text" name="n1" class="form-control mt-1" placeholder="Num 1"><br>
        <input type="text" name="n2" class="form-control mt-1" placeholder="Num 2"><br>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="ops" id="exampleRadios1" value="+" checked>
            <label class="form-check-label" for="exampleRadios1">
                Addition
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ops" id="exampleRadios2" value="-" checked>
            <label class="form-check-label" for="exampleRadios2">
                Subtraction
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ops" id="exampleRadios3" value="*" checked>
            <label class="form-check-label" for="exampleRadios3">
                Multiplication
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ops" id="exampleRadios4" value="/" checked>
            <label class="form-check-label" for="exampleRadios4">
                Division
            </label>
        </div>
        

        <input type="submit" name="submit" class="btn btn-outline-success mt-2" value="Calculate">
    </form>
    <hr>
        <?php
        if(isset($_POST["submit"])){
            
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $op = $_POST["ops"];

            include 'Calculator.php';

            $calc = new Calculator();

            $calc->set_values($n1, $n2, $op);
            echo " <h3 class='text-center'>" .$calc->getFirstNum(). " " .$calc->getOperator(). " " .$calc->getSecondNum(). " = " .$calc->compute();
        
            
        }
    ?>
</body>
</html>
