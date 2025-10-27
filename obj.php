<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class OOP in Php</title>
</head>

<body>

    <?php

    class Furit
    {

        //Properties - It's mean variables
        public $name;
        public $color;
        public $hello;
        public $dushan;

        // Method 

        function set_name($name) {
            $this->name = $name;
        }

        function get_name()  {
            return $this->name;
        }

        function set_color($color){
         $this->color = $color;
        }

        function get_color() {
            return $this->color;
        }

function helloWorld($hello){
$this->hello = $hello;
}



    }

    $apple = new Furit();

    $apple->set_name('Apple');
    $apple->set_color('Red');

    echo "Name: " .  $apple->get_name();
    echo "<br>";
    echo   "Color: "  . $apple->get_color();


   echo "<br>";
$dusha = new Furit();
$dusha->helloWorld("Dushan Malinga");


echo $dusha->hello;



   echo "<br>";

  

$dushan = new Furit();
 $dushan = (1);
var_dump($dusha instanceof Furit);



    ?>


</body>

</html>