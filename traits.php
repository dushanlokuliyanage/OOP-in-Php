<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>


    <?php

    trait message1
    {
        public function msg1()
        {
            echo "OOP is fun";
        }
    }

    class welcome
    {
        use message1;
    }

    $obj = new welcome();
    $obj->msg1();

    ?>

</body>

</html>