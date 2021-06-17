<!DOCTYPE html>
<html>
<head>
  <title>division</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="division.php" method="post">
  <center>
      <label>First digit:</label><input type="number" name='num1' value=""min="0"max="9">
      <label>Second digit:</label><input type="number" name='num2' value=""min="0"max="9">
      <label>Third digit:</label><input type="number" name='num3' value=""min="0"max="9">
      <label>Fourth digit:</label><input type="number" name='num4' value=""min="0"max="9">
      <label>Fifth digit:</label><input type="number" name='num5' value=""min="0"max="9">

  
    <input class="hit"type="submit" name='btn1' value="enter">
  </center>
</form> 
 <h3>Division</h3>
<?php
if(isset($_POST['btn1'])){
   $num1 = $_POST['num1'];
   $num2 = $_POST['num2'];
   $num3 = $_POST['num3'];
   $num4 = $_POST['num4'];
   $num5 = $_POST['num5'];
}
    ?>

<table>
  <tr>
    <td><p>Dividing 2 digits:</p>
      <?php 
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $qou1 = $num1 / $num2;
        echo "Formula: $num1 / $num2 = $qou1 <br />";
        echo "The qoutient of two digits is equal to: $qou1"?>    </td>
    <td><p>Dividing 3 digits:</p>
      <?php 
        $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $num3 = $_POST['num3'];
          $qou2 =  $num1 / $num2 / $num3; 
          echo "Formula: $num1 / $num2 / $num3= $qou2  <br />";
          echo "The qoutient of three digits is equal to: $qou2"?> </td>
  </tr>
  <tr>
    <td><p>Dividing 4 digits:</p>
      <?php
        $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $num3 = $_POST['num3'];
          $num4 = $_POST['num4'];
          $qou3 = $num1 / $num2 / $num3 / $num4; 
          echo "Formula: $num1 / $num2 / $num3 / $num4 = $qou3  <br />";
          echo "The qoutient of four digits is equal to: $qou3"?>
      </td>
    <td><p>Dividing 5 digits:</p>
      <?php
        $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $num3 = $_POST['num3'];
          $num4 = $_POST['num4'];
          $num5 = $_POST['num5'];
          $qou4 = $num1 / $num2 / $num3 / $num4 / $num5;
          echo "Formula: $num1 / $num2 / $num3 / $num4 / $num5 = $qou4  <br />"; 
          echo "The qoutient of five digits is equal to: $qou4"?>
    </td>
  </tr>
</table> 

</body>
</html>