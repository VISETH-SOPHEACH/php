<?php
  abstract class demo1 {
    protected $test1;
    public function __construct($Test)
    {
      $this->test1=$Test;
    }
    abstract public function getData();
  }

  class demo2 extends demo1 {
    protected $test2;
    public function __construct($Test, $test2)
    {
      parent:: __construct($Test);
      $this->test2=$test2;
    }
    public function getData () {
      return $this->test1 . $this->test2;
    }
  }
  $obj = new demo2('John ', ' male');
  echo $obj->getData();