<?php

// =======================
// 1. TRAIT
// =======================
trait Logger
{
  public function log($message)
  {
    echo "[LOG]: $message<br>";
  }
}

// =======================
// 2. INTERFACE
// =======================
interface Payable
{
  public function calculateSalary();
}

// =======================
// 3. ABSTRACT CLASS
// =======================
abstract class Person
{
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  abstract public function getRole();

  public function getName()
  {
    return $this->name;
  }
}

// =======================
// 4. BASE CLASS (ENCAPSULATION)
// =======================
class Employee extends Person implements Payable
{
  use Logger;

  protected $baseSalary;

  // Static property
  public static $employeeCount = 0;

  public function __construct($name, $baseSalary)
  {
    parent::__construct($name);
    $this->baseSalary = $baseSalary;
    self::$employeeCount++;
  }

  // Encapsulation (getter/setter)
  public function setSalary($salary)
  {
    $this->baseSalary = $salary;
  }

  public function getSalary()
  {
    return $this->baseSalary;
  }

  public function getRole()
  {
    return "Employee";
  }

  // Polymorphism (method override possible)
  public function calculateSalary()
  {
    return $this->baseSalary;
  }

  // Static method
  public static function getEmployeeCount()
  {
    return self::$employeeCount;
  }

  // Destructor
  public function __destruct()
  {
    // echo "Destroying Employee: {$this->name}<br>";
  }
}

// =======================
// 5. INHERITANCE + POLYMORPHISM
// =======================
class Manager extends Employee
{
  private $bonus;

  public function __construct($name, $baseSalary, $bonus)
  {
    parent::__construct($name, $baseSalary);
    $this->bonus = $bonus;
  }

  public function getRole()
  {
    return "Manager";
  }

  // Polymorphism (override)
  public function calculateSalary()
  {
    return $this->baseSalary + $this->bonus;
  }
}

// =======================
// 6. ANOTHER CHILD CLASS
// =======================
class Developer extends Employee
{
  private $overtime;

  public function __construct($name, $baseSalary, $overtime)
  {
    parent::__construct($name, $baseSalary);
    $this->overtime = $overtime;
  }

  public function getRole()
  {
    return "Developer";
  }

  public function calculateSalary()
  {
    return $this->baseSalary + $this->overtime;
  }
}

// =======================
// 7. USAGE (OBJECTS)
// =======================

// Object creation
$emp = new Employee("John", 500);
$mgr = new Manager("Alice", 1000, 300);
$dev = new Developer("Bob", 800, 200);

// Method calls
echo $emp->getName() . " is a " . $emp->getRole() . "<br>";
echo "Salary: " . $emp->calculateSalary() . "<br><br>";

echo $mgr->getName() . " is a " . $mgr->getRole() . "<br>";
echo "Salary: " . $mgr->calculateSalary() . "<br><br>";

echo $dev->getName() . " is a " . $dev->getRole() . "<br>";
echo "Salary: " . $dev->calculateSalary() . "<br><br>";

// Trait usage
$emp->log("Employee logged in");

// Static usage
echo "<br>Total Employees: " . Employee::getEmployeeCount();
