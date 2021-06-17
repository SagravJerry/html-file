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
    <label>Length:</label><input class="text1" type="text" name='val1' value=""placeholder="length">
      <label>Width:</label><input class="text1"type="text" name='val2' value=""placeholder="width">
      
      
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
        $area = $val2*$val1;
        echo "Formula: l x w = $area <br />";
        echo "The Area of rectangle is: $area"?>    </td>
    <td><p>Perimeter of Triangle</p>
      <?php 
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
        $val3 = 2;
        $p =  $val3*($val2 + $val1);
          echo "Formula: 2(l + w)= $p <br />";
          echo "The perimeter of rectangle is equal to: $p"?> </td>
  </tr>
 
</table> 

</body>
</html>