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

        // Method 

        function set_name($name)
        {
            $this->name = $name;
        }

        function get_name()
        {
            return $this->name;
        }
    }

    ?>


</body>

</html>