<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Properties</title>
</head>

<body>

    <?php
    class proper
    {
        public static $value = 3.14159;
    }

    // Get static property
    echo proper::$value;
    ?>
</body>

</html>