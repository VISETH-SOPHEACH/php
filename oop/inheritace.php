<?php
// class vehicle
// {
//   protected $name;
//   protected $model;
//   protected $year;

//   public function __construct($name, $model, $year)
//   {
//     $this->name = $name;
//     $this->model = $model;
//     $this->year = $year;
//   }

//   public function getData()
//   {
//     return 'Engine start';
//   }

//   public function Show()
//   {
//     echo 'This is name : ' . $this->name . '<br>' . 'This is model : ' . $this->model . '<br>' . 'This is year : ' . $this->year;
//   }
// }
// class car extends vehicle
// {
//   protected $door;
//   protected $price;

//   public function __construct($name, $model, $year, $Door, $Price)
//   {
//     parent::__construct($name, $model, $year);
//     $this->door = $Door;
//     $this->price = $Price;  // right ( $Price ) variable is constructor
//   }

//   public function Show()
//   {
//     parent::Show();
//     echo '<br> Door is : ' . $this->door . '<br>' . 'price is : ' . $this->price;
//   }

//   public function getData()
//   {
//     return "Car engine started <br>";
//   }
// }


// $obj = new car('bmw', 'honda', '2025', 4, '109999$');
// echo $obj->getData();
// $obj->Show();

class Employee
{
  protected $name;
  protected $baseSalary;

  public function __construct($name, $baseSalary)
  {
    $this->name = $name;
    $this->baseSalary = $baseSalary;
  }

  public function getDetails()
  {
    return "Name : " . $this->name . ", Base salary : $" . $this->baseSalary;
  }
}

class Manager extends Employee
{
  protected $role;

  public function __construct($name, $baseSalary, $role)
  {
    # Override 
    parent::__construct($name, $baseSalary);
    $this->role = $role;
  }

  public function getDetails()
  {
    return parent::getDetails() . " | Role : " . $this->role;
  }

  public function calculateBonus()
  {
    return $this->baseSalary * 0.10;
  }
}

class Developer extends Employee
{
  protected $programmingLanguage;

  public function __construct($name, $baseSalary, $programmingLanguage)
  {
    # Override 
    parent::__construct($name, $baseSalary);
    $this->programmingLanguage = $programmingLanguage;
  }

  public function getDetails()
  {
    return parent::getDetails() . " | Programming Langusge : " . $this->programmingLanguage;
  }
}

$manager = new Manager("Sokha", 1000, "IT");
$developer = new Developer("Dara", 800, "PHP");

echo $manager->getDetails();
echo "<br>Bonus: $" . $manager->calculateBonus();
echo "<br><br>";
echo $developer->getDetails();
