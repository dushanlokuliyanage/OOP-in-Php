<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destructor</title>
</head>

<body>


    <?php

    abstract class car
    {
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }

        abstract public function intro(): string;
    }


    class Audi extends car
    {
        public function intro(): string
        {
            return "Choose german quality! I'm a $this->name";
        }
    }

    class Volvo extends car
    {
        public function intro(): string
        {
            return "Choose german ! I'm a $this->name";
        }
    }

    class Citroen extends car
    {
        public function intro(): string
        {
            return "Choose german quality! I'm a $this->name";
        }
    }

    // Create objects from the child classes
    $audi = new audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $volvo = new volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";

    $citroen = new citroen("Citroen");
    echo $citroen->intro();



    ?>

</body>

</html>