<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>overriding</title>
</head>

<body>

    <?php


    class product
    {

        var $product_name;
        var $cost_price;
        var $sales_price;


        function disply()
        {
            echo '<b>Product Info </b><br><br>';
            echo 'Name of the Product: ' . $this->product_name . '</br> ';
            echo 'Sales of Product: ' . $this->sales_price . '</> <br>';
        }
    }
 

    class computer extends product
    {

        var $prosesser;
        var $hard_disk;
        var $ram;

        function disply()
        {
            echo 'Name of the Product: ' . $this->product_name . '</br> ';
            echo 'Sales of Product: ' . $this->sales_price . '</> <br>';
            echo 'Name of the proseser: ' . $this->prosesser . '</br> ';
            echo 'Sales of hadrd: ' . $this->hard_disk . '</> <br>';
            echo 'Sales of ram: ' . $this->ram . '</> <br>';
        }
    }

    $generl_P = new product;

    $generl_P->product_name = 'Dushan';
    $generl_P->cost_price = 5000;
    $generl_P->sales_price = 600;

    $generl_P->disply();

    echo '<br>';


    $com = new computer;
    $com->product_name = 'Hello';
    $com->cost_price = 5000;
    $com->sales_price = 600;
    $com->prosesser = '';
    $com->hard_disk = '';
    $com->ram = '';
    $com->disply();


    ?>

</body>

</html>