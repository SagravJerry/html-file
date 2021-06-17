<!DOCTYPE html>
<html>
<head>
  <title>subtraction</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="" method="post">

  <center>
    <p>Inputs for Area<p>
    <label>Base:</label><input class="text1" type="number" name='val1' value=""placeholder="base">
      <label>Height:</label><input class="text1"type="text" name='val2' value=""placeholder="height">
      <label>length(a):</label><input class="text1"type="text" name='val3' value=""placeholder="length">
      <label>length(b):</label><input class="text1"type="text" name='val4' value=""placeholder="length">
      <label>length(c):</label><input class="text1"type="text" name='val5' value=""placeholder="length">

      
    <input class="hit"type="submit" name='btn2' value="enter">
  </center>
</form> 
<h3>Area and Perimeter of Triangle</h3>

<?php
if(isset($_POST['val1']) || isset($_POST['val2']) || isset($_POST['val3']) || isset($_POST['val4']) || isset($_POST['val5'])){
   
}
    ?>

<table>
  <tr>
    <td><p>Area of Triangle:</p>
      <?php 
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
        $val3 = 1/2;
        $area = $val3*$val2*$val1;
        echo "Formula: (1/2 x b x h) = $area <br />";
        echo "The Area of triangle is: $area"?>    </td>
    <td><p>Perimeter of Triangle</p>
      <?php 
          $a = $_POST['val3'];
          $b = $_POST['val4'];
          $c = $_POST['val5'];
          $p =  $a + $b + $c; 
          echo "Formula: a + b + c = $p <br />";
          echo "The perimeter of triangle is equal to: $p"?> </td>
  </tr>
 
</table> 

</body>
</html>