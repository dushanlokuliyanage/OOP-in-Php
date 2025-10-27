<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constructor</title>
</head>

<body>


    <?php


    class hellowWorld
    {

        public $dushan;
        public $maling;

        function __construct($dushan)
        {
            $this->dushan = $dushan;
        }
        function get_name()
        {
            return $this->dushan;
        }
    }

    $myName = new hellowWorld("Dushan Malinga");
    echo $myName->get_name();




    echo "<br>";




    class car
    {
        public $brand;
        public $model;

        public function __construct($brand, $model)
        {
            $this->brand = $brand;
            $this->model = $model;
        }

        public function about()
        {
            return "This car is " . $this->brand . "And model is " .$this->model;
        }
    }

    $aboutCar = new car("Toyota Corolla ", "New Model");
    echo $aboutCar->about();









    ?>

</body>

</html>