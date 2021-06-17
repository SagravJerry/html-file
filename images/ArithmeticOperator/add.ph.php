<?php
$num1 = 50;
$num2 = 50;
$num3 = 50;
$num4 = 50;
$num5 = 50;
$add1 = $num1 + $num2;
$add2 =  $num1 + $num2 + $num3;
$add3 = $num1 + $num2 + $num3 + $num4;
$add4 = $num1 + $num2 + $num3 + $num4 + $num5;
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<h1>Addition</h1>
 	
<table>
  <tr>
    <td><p>Adding 2 digits:</p>
    		<?php 
    			echo "Formula: $num1 + $num2 = $add1 <br />";
				echo "The sum of two digits is equal to: $add1"?>

        </td>
    <td><p>Adding 3 digits:</p>
    	<?php     			echo "Formula: $num1 + $num2 +$num3 = $add2 <br />";
				echo "The sum of two digits is equal to: $add2" ?>

      </td>
  </tr>
  <tr>
    <td><p>Adding 4 digits:</p>
    	<?php     			echo "Formula: $num1 + $num2 + $num3 +$num4 = $add3 <br />";
				echo "The sum of two digits is equal to: $add3" ?>

        </td>
    <td><p>Adding 5 digits:</p>
    	<?php 
    			echo "Formula: $num1 + $num2 + $num3 +$num4 +$num5= $add4 <br />";
				echo "The sum of two digits is equal to: $add4"?>

      </td>
  </tr>
</table> 
 
 </body>
 </html>