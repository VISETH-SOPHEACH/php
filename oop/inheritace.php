<?php
class vehicle
{
  protected $name;
  protected $model;
  protected $year;

  public function __construct($name, $model, $year)
  {
    $this->name = $name;
    $this->model = $model;
    $this->year = $year;
  }

  public function getData()
  {
    return 'Engine start';
  }

  public function Show()
  {
    echo 'This is name : ' . $this->name . '<br>' . 'This is model : ' . $this->model . '<br>' . 'This is year : ' . $this->year;
  }
}
class car extends vehicle
{
  protected $door;
  protected $price;

  public function __construct($name, $model, $year, $Door, $Price)
  {
    parent::__construct($name, $model, $year);
    $this->door = $Door;
    $this->price = $Price;  // right ( $Price ) variable is constructor
  }

  public function Show()
  {
    parent::Show();
    echo '<br> Door is : ' .   $this->door . '<br>' . 'price is : ' . $this->price;
  }

  public function getData()
  {
    return "Car engine started <br>";
  }
}


$obj = new car('bmw', 'honda', '2025', 4, '109999$');
echo $obj->getData();
$obj->Show();
