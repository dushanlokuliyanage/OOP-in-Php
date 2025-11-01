<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Methods</title>
</head>

<body>

    <?php

    class Fruit
    {

        public $name;
        public $color;
        public function __construct($name, $color)
        {

            $this->name = $name;
            $this->color = $color;
        }

        public function intro()
        {
            echo "The fruit is {$this->name} amd the color is {$this->color}.";
        }
    }


    class Strawberry extends Fruit
    {
        public function message()
        {
            echo "Am I a fruit or a berry? ";
            // $this->intro();
        }
    }
    $strawberry = new Strawberry("Storebarry", "red");
    $strawberry->message();
    $strawberry->intro();


    class product
    {
        var $p_name;
        var $cost_price;
        var $sales_price;

        function cal_sales_price()
        {
            $this->sales_price =  round($this->cost_price * 1.2, 2);
        }
    }

class computer extends product {

}


$my_p = new computer;
$my_p->p_name = "Apple";
$my_p->cost_price = "19,000";
$my_p->cal_sales_price();
$my_arry = get_object_vars($my_p);


echo '<pre>';
print_r($my_arry);
echo '</pre>';


echo 'Get parent Class of Computer';
echo '<br>';
echo 'Parent class is  ' . get_parent_class($my_p);
    











    ?>

</body>

</html>