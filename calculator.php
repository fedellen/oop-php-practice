<?php
  declare(strict_types = 1);
  include 'includes/autoLoader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Practice Calculator</title>
</head>
<body style="display:grid; align-items: center;">

<?php
  /** Grab parameters from calculate `POST` */
  $operator = $_POST["operator"];
  $numOne = $_POST["numOne"];
  $numTwo = $_POST["numTwo"];

  if ($operator && $numOne && $numTwo) {
  /** Cast numbers to Integer */
  $calc = new Calc($operator, (int)$numOne, (int)$numTwo);
    try {
      $result = $calc -> calculator();
    } catch (TypeError $error) {
      echo "Error on calculate: " . $error -> getMessage();
    }
  }
?>

  <form action="/calculator.php" method="POST">
    <!-- Conditionally render the latest result  -->
    <?php if ($result) echo "Your Last Result: " . $result ?>
    <p>My very own php calculator</p>
    <input type="number" name="numOne" placeholder="First Number">
    <select name="operator">
      <option value="add">Addition</option>
      <option value="sub">Substracton</option>
      <option value="div">Division</option>
      <option value="mul">Multiplication</option>
    </select>
    <input type="number" name="numTwo" placeholder="Second Number">
    <button type="submit" name="submit">Calculate</button>
  </form>
  
</body>
</html>