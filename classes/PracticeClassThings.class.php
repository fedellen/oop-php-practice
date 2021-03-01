<?php

class FirstClass {
  /** Properties */
  const CONSTANT = "Cannot be changed";

  /** Methods */
  public static function test() {
    $testing = "Remain calm, this is only a test..";
    return $testing;
  }
}

$ourClass = FirstClass::test();
echo $ourClass;

class SecondClass extends FirstClass {
    /** Properties */
    public static $staticProperty = "This property is static";
  
    /** Methods */
    public static function anotherTest() {
      echo parent::CONSTANT;
      echo self::$staticProperty;
    }
}

$anotherClass = SecondClass::anotherTest();
echo $anotherClass;