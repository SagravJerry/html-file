<!DOCTYPE html>
<html>
<head>
  <title>subtraction</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="subtraction.php" method="post">

  <center>
    <label>First digit:</label><input type="number" name='num1' value=""min="0"max="9">
      <label>Second digit:</label><input type="number" name='num2' value=""min="0"max="9">
      <label>Third digit:</label><input type="number" name='num3' value=""min="0"max="9">
      <label>Fourth digit:</label><input type="number" name='num4' value=""min="0"max="9">
      <label>Fifth digit:</label><input type="number" name='num5' value=""min="0"max="9">

    <input class="hit"type="submit" name='btn2' value="enter">
  </center>
</form> 
<h3>Subtraction</h3>

<?php
if(isset($_POST['num1']) || isset($_POST['num2']) || isset($_POST['num3']) || isset($_POST['num4']) || isset($_POST['num5'])){
   
}
    ?>

<table>
  <tr>
    <td><p>Subtracting 2 digits:</p>
      <?php 
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $dif1 = $num1 - $num2;
        echo "Formula: $num1 - $num2 = $dif1 <br />";
        echo "The different of two digits is equal to: $dif1"?>    </td>
    <td><p>Subtracting 3 digits:</p>
      <?php 
        $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $num3 = $_POST['num3'];
          $dif2 =  $num1 - $num2 - $num3; 
          echo "Formula: $num1 - $num2 - $num3= $dif2 <br />";
          echo "The different of three digits is equal to: $dif2"?> </td>
  </tr>
  <tr>
    <td><p>Subtracting 4 digits:</p>
      <?php
        $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $num3 = $_POST['num3'];
          $num4 = $_POST['num4'];
          $dif3 = $num1 - $num2 - $num3 - $num4; 
          echo "Formula: $num1 - $num2 - $num3 - $num4 = $dif3 <br />";
          echo "The different of four digits is equal to: $dif3"?>
      </td>
    <td><p>Subtracting 5 digits:</p>
      <?php
        $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $num3 = $_POST['num3'];
          $num4 = $_POST['num4'];
          $num5 = $_POST['num5'];
          $dif4 = $num1 - $num2 - $num3 - $num4 - $num5;
          echo "Formula: $num1 - $num2 - $num3 - $num4 - $num5 = $dif4  <br />"; 
          echo "The different of five digits is equal to: $dif4"?>
    </td>
  </tr>
</table> 

</body>
</html>