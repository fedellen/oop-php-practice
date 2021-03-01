<?php

class Calc {
  public $operator;
  public $numOne;
  public $numTwo;

  public function __construct(
    string $operator, 
    int $numOne,
    int $numTwo
  ) {
    $this -> operator = $operator;
    $this -> numOne = $numOne;
    $this -> numTwo = $numTwo;
  }

  public function calculator() {
    switch ($this -> operator) {
      case 'add':
        $result = $this -> numOne + $this -> numTwo;
        return $result;
      
      case 'sub':
        $result = $this -> numOne - $this -> numTwo;
        return $result;

      case 'mul':
        $result = $this -> numOne * $this -> numTwo;
        return $result;

      case 'div':
        $result = $this -> numOne / $this -> numTwo;
        return $result;

      default:
        echo "Error: Operator value could not be determined..";
        break;
    }
  }
}