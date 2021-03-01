<?php
  // /** Import php files traditionally */
  // include 'includes/person.class.php'

  /** Import php classes with auto load */
  include 'includes/autoLoader.inc.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Object Oriented PHP Practice</title>
  <style>
  body {
    font-size: x-large;
    display: grid;
    justify-content: center;
  }
  </style>
</head>
<body>
  <h1>Object oriented PHP practice</h1>

  <p>
    <?php 
      $personOne = new Person("Freddy", "DudeGuy", 3);
      echo "personOne: ", $personOne -> getFirstName();
    ?>
  </p>

  <p>
    <?php 
      /** Access staic via Object's' method */
      echo $personOne -> getDrinkingAge();
    ?>
  </p>

  <!-- <p>
    <?php 
      /** Unset will destroy or `unset` the object */
      // unset($personOne);
      // echo "unset personOne: ", $personOne -> getName();
    ?>
  </p> -->

  <p>
    <?php 
      /** Access a static property without constructing an Object */
      echo "drinkingAge: ",  Person::$drinkingAge;
    ?>
  </p>

  <p>
    <?php 
      Person::setDrinkingAge(18);
      echo "drinkingAge: ",  Person::$drinkingAge;
    ?>
  </p>




</body>
</html>