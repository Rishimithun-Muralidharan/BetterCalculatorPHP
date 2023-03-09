<!DOCTYPE html>
<html lang = "en">
  <head>
    <title>Better Calculator</title>
    <meta charset="UTF-8">

  </head>
  <body>
    <form action="bettercalculator.php" method="post">
      <p>What is the first number</p><input type="number" name="number1">
      <br>
      <p>What is the second number</p><input type="number" name="number2">
      <br>
      <p>What is the arithmetic operation: +, -, *, /</p><input type="textbox" name="arithmeticop">
      <br>
      <p><input type="submit"></p>

    </form>

    <?php

    $num1 = $_POST ["number1"];
    $num2 = $_POST ["number2"];
    $arithmeticop = $_POST["arithmeticop"];

    if ($arithmeticop == "+") {
      echo $num1 + $num2;
    } else if ($arithmeticop == "-") {
      echo $num1 - $num2;
    } else if($arithmeticop == "*") {
      echo $num1 * $num2;
    } else {
      echo $num1 / $num2;
    }

    




   ?>
   


  </body>
  
</html>