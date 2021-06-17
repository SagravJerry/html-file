<?php
$num1 = 50;
$num2 = 50;
$num3 = 50;
$num4 = 50;
$num5 = 50;
$ans1 = $num1 * $num2;
$ans2=  $num1 * $num2 * $num3;
$ans3 = $num1 * $num2 * $num3 * $num4;
$ans4 = $num1 * $num2 * $num3 * $num4 * $num5;
echo "First digit: $num1 <br />";
echo "2nd digit: $num2 <br />";
echo "3rd digit: $num3 <br />";
echo "4th digit: $num4 <br />";
echo "5th digit: $num5 <br />";
 ?>

 <!DOCTYPE html>/
 <html>
 <head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
  <h1>Multiplication</h1>
  
<table>
  <tr>
    <td><p>Multiplying 2 digits:</p>
        <?php 
          echo "Formula: $num1 * $num2 * $ans1 <br />";
        echo "The product of two digits is equal to: $ans1"?>

        </td>
    <td><p>Multiplying 3 digits:</p>
      <?php           echo "Formula: $num1 * $num2 * $num3 = $ans2 <br />";
        echo "The product of two digits is equal to: $ans2" ?>

      </td>
  </tr>
  <tr>
    <td><p>Multiplying 4 digits:</p>
      <?php           echo "Formula: $num1 * $num2 * $num3 * $num4 = $ans3 <br />";
        echo "The product of two digits is equal to: $ans3" ?>

        </td>
    <td><p>Multiplying 5 digits:</p>
      <?php 
          echo "Formula: $num1 * $num2 * $num3 * $num4 * $num5= $ans4 <br />";
        echo "The product of two digits is equal to: $ans4"?>

      </td>
  </tr>
</table> 
 
 </body>
 </html>