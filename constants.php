<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destructor</title>
</head>

<body>


    <?php

    class Goodbye
    {
        const LIVING_MESSAGE = "Thanks Sir";
        public function byebye()
        {
            echo self::LIVING_MESSAGE;
        }
    }
    $goodbye = new Goodbye();
    $goodbye->byebye();

    ?>

</body>

</html>