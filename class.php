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

    $classes  = get_declared_classes();

    echo '<pre>';
    print_r($classes);
    echo '</pre>';



    $name  =  '0';
    if (class_exists($name)) {
        echo "Class was  '.$name.' is was Avalibel";
    } else {
        echo "Class was $name is not was Avalibel";
    }


    class emplyooi
    {
        var $id;
        var $fname;
        var $lname;
        var $is_active = false;
    }

    $empyooi_1 = new emplyooi;

    $empyooi_1->id = 10;
    $empyooi_1->fname = 'Dushan';
    $empyooi_1->lname = 'Malinga';
    $empyooi_1->is_active = 1;

    echo ' <h2>This is empylooi Datails </h2>';
    echo '<br>';
    echo 'Id: ' . $empyooi_1->id;
    echo '<br>';
    echo 'First Name: ' . $empyooi_1->fname;
    echo '<br>';
    echo 'Last Name :' . $empyooi_1->lname;
    echo '<br>';
    echo 'Status : ' . $empyooi_1->is_active;

    $list_var = get_class_vars('emplyooi');

    echo ' <h3>Class Variables </h3>';
    echo '<br>';
    echo '<pre>';
    print_r($list_var);
    echo '</pre>';



        $list_var = get_object_vars($empyooi_1);

    echo ' <h3>Class  </h3>';
    echo '<br>';
    echo '<pre>';
    print_r($list_var);
    echo '</pre>';

    if(property_exists('emplyooi','lname')){
        echo "Goood";
    }else{
          echo "Bad";
    }

    ?>


</body>

</html>