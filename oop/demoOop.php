<?php
# access modifire : public, private, portected
# data member, function member or method
class Books
{
  public $book_name = 'English';
  public $book_price;
  private $book_id;

  # setTer function 
  public function setId($BOOK_id)
  {
    $this->book_id = $BOOK_id;
  }

  # getter function
  public function getId()
  {
    return $this->book_id;
  }

  public function output()
  {
    echo $this->book_name . '<br>';
    echo $this->book_id . '<br>';
    echo $this->book_price . '$';
  }
}

$book = new Books();
$book->book_price = 28;
$book->setId(2);
$book->output();

echo '<br>' . $book->getId();