<?php
class emp {
  public $name, $gender, $age;
  private $salary, $position, $hour;

  #setter
  public function setSalary ($salary){
    $this->salary=$salary;
  }
  public function setPosition ($position){
    $this->position=$position;
  }
  public function setHour ($hour){
    $this->hour=$hour;
  }

  # getter
  public function getSalary (){
    return $this->salary;
  }
  public function getPosition (){
    return $this->position;
  }
  public function getHour (){
    return $this->hour;
  }

  public function output () {
    echo 'Name is : ' . $this->name . ' gender is : ' . $this->gender . ' age is : ' . $this->age .'<br>';
    echo 'salary is : ' . $this->salary . ' position is : ' . $this->position . ' hour is : ' . $this->hour .'<br>';
  }
}

$EMP = new emp();
$EMP->name = 'John';
$EMP->gender = 'M';
$EMP->setSalary(1099);
$EMP->setPosition('Developer');
$EMP->setHour(8);
$EMP->output();

echo $EMP->getHour()*10;