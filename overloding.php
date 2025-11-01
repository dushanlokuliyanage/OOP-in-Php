<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overlodaing</title>
</head>
<body>


<?php 

class Emploloee {

    private $basic_salary = 50000;

}

class FullTimeEmp extends Emploloee {

}


$emp1 = new FullTimeEmp;

//$emp1->basic_salary = 10000;

//echo $emp1->basic_salary;




?>


    
</body>
</html>