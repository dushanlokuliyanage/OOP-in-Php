<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Access Methods</title>
</head>

<body>

  <?php


  // class Fruit
  // {
  //   public $name;
  //   public $color;
  //   public $weight;

  //   function set_name($n)
  //   {
  //     $this->name = $n;
  //   }
  //   protected function set_color($n) {}
  //   private function set_weight($n)
  //   {
  //     $this->weight = $n;
  //   }
  // }

  // $mango = new Fruit();
  // $mango->set_name('Mango');
  // $mango->set_color('Yellow'); // errors
  // $mango->set_weight('300'); // erross 

  class Emplyooe
  {
    public $name = 'DUsh';
    protected $num = 0759255256;
    private $salery = 600000;
  }


  $emp = new Emplyooe;
  echo $emp->name;
  // echo $emp->num;
  // echo $emp->salery;

  ?>

</body>

</html>