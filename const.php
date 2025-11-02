<?php

class Emp {
    public const Emp_All = 0.08;
public $basic_salary = 600000;

    public function Emp_All(){
        return $this->basic_salary * self::Emp_All;
    }

}


$emp_1 = new Emp;
echo 'Emp rate: ' . Emp::Emp_All; 
echo '<br>';
echo 'Hello ' . $emp_1->Emp_All();
?>