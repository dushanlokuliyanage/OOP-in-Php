<?php

class emp
{
    public $emp_name;

    public function __construct($emp_name)
    {
        $this->emp_name = $emp_name;
        echo "Emp is {$this->emp_name} is created";
    }
}
