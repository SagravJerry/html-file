<!DOCTYPE html>
<html>
<head>
	<title>addition</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<fieldset>
<form action="" method="post">
	<center>

		<label>First digit:</label><input type="number" name='num1' value=""min="0"max="9">
    	<label>Second digit:</label><input type="number" name='num2' value=""min="0"max="9">
    	<label>Third digit:</label><input type="number" name='num3' value=""min="0"max="9">
    	<label>Fourth digit:</label><input type="number" name='num4' value=""min="0"max="9">
    	<label>Fifth digit:</label><input type="number" name='num5' value=""min="0"max="9">

 	
		<input class="hit"type="submit" name='btn1' value="enter">
	</center>
</form>	
<h3>Addition</h3>
<?php

if(isset($_POST['num1'])){
        		$num1 = $_POST['num1'];
    			$num2 = $_POST['num2'];
    			$num3 = $_POST['num3'];
    			$num4 = $_POST['num4'];
    			$num5 = $_POST['num5'];
    			$add4 = $num1 + $num2 + $num3 + $num4 + $num5;
   
}
    ?>


<table>
	<tr>
		<td><p>adding 2 digits:</p>
			<?php 
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$add1 = $num1 + $num2;
				echo "Formula: $num1 + $num2 = $add1 <br />";
				echo "The sum of two digits is equal to: $add1"?>		</td>
		<td><p>adding 3 digits:</p>
			<?php 
				$num1 = $_POST['num1'];
   		 		$num2 = $_POST['num2'];
    			$num3 = $_POST['num3'];
    			$add2 =  $num1 + $num2 + $num3; 
    			echo "Formula: $num1 + $num2+ $num3= $add2 <br /> ";
    			echo "The sum of three digits is equal to: $add2"?> </td>
	</tr>
	<tr>
		<td><p>adding 4 digits:</p>
			<?php
			 	$num1 = $_POST['num1'];
    		 	$num2 = $_POST['num2'];
    			$num3 = $_POST['num3'];
    			$num4 = $_POST['num4'];
    			$add3 = $num1 + $num2 + $num3 + $num4;
    			echo "Formula: $num1 + $num2+ $num3 + $num4 = $add3 <br />";
    			echo "The sum of four digits is equal to: $add3"?>
			</td>
		<td><p>adding 5 digits:</p>
			<?php
				
    			echo "Formula: $num1 + $num2+ $num3 + $num4 + $num5 = $add4 <br />";
    			echo "The sum of five digits is equal to: $add4"?>
		</td>
	</tr>
</table> 
</fieldset>

</body>
</html>