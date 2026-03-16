<?php
class example
{
  public $example1;
  private $example2;
  private $example3;

  public function __construct($example2, $example3)
  {
    $this -> example2 = $example2;
    $this -> example3 = $example3;
  }
  public function getData()
  {
    return "{$this -> example1}" . " {$this -> example2}" . "{$this -> example3}";
  }
}

$obj = new example(10, ' coffee');
echo 'This is result : ' . $obj -> getData();
