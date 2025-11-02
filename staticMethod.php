<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Method</title>
</head>

<body>

    <?php

    class greeting
    {
        public static function welcome()
        {
            echo "Hello World";
        }
    }
    greeting::welcome();

    class Hello
    {
        public static function welcome()
        {
            echo "Hello World";
        }

        public function __construct()
        {
            self::welcome();
        }
    }

    new Hello();





class Employee{

    public static $emp = 0;

public static function add_emp(){
    self::$emp++;
}


}



echo '<br>';
echo '<br>';
Employee::$emp = 10;
echo 'Number of Employyee  '  . Employee::$emp;

echo '<br>';

Employee::add_emp();
echo 'Number of Employyee  '  . Employee::$emp;


     
echo 'Php V: ' . phpversion();








    ?>



</body>

</html>