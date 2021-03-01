<?php

class Person {
  /** Properties */
  private $firstName;
  private $lastName;
  private $age;

  public static $drinkingAge = 21;

  public function __construct($firstName, $lastName, $age) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->age = $age;
  }

  /** Methods */
  public function setFirstName(string $firstName) {
    $this -> firstName = $firstName;
  }

  public function getFirstName() {
    return $this -> firstName;
  }

  public function getDrinkingAge() {
    return self::$drinkingAge;
  }

  public static function setDrinkingAge($newDrinkingAge) {
    self::$drinkingAge = $newDrinkingAge;
  }

}

class Pet extends Person {
  public function owner() {
    $a = $this -> getFirstName();
    return $a;
  }
}