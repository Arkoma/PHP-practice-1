<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>integers</title>
  </head>
  <body>
 		<?php
			$var1 = 3;
			$var2 = 4;
		?>
		Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2-5; // should be 7 ?><br />
		<br />
		Absolute value:    <?php echo abs(0 - 300); // removes pos/neg sign ?><br />
		Exponential:			 <?php echo pow(2, 8);    // 2 to the power of 8 = 256 ?><br />
		Square root: 			 <?php echo sqrt(100);    // 10 ?><br />
		Modulo: 					 <?php echo fmod(20, 7);  // 6 ?><br />
		Random:						 <?php echo rand();       //??? ?><br />
		Random (min, max): <?php echo rand(1, 10);  //random number between 1 and 10 inclusive ?><br />
		<br />
		beginning value: <?php echo $var2; ?><br />
		+=4 : <?php $var2 += 4; echo $var2; ?><br />
		-=4 : <?php $var2 -= 4; echo $var2; ?><br />
		*=3 : <?php $var2 *= 3; echo $var2; ?><br />
		/=4 : <?php $var2 /= 4; echo $var2; ?><br />
		<br />
		Increment: <?php $var2++; echo $var2; ?><br />
		Decrement: <?php $var2--; echo $var2; ?><br />
		<br />
		Will add a number to a string if it can: 
			<pre> "1" + 1 will equal <?php echo "1" + 1; ?></pre><br />
			<pre> 1 + "2 houses" will equal <?php echo "2 houses" + 1; ?></pre><br />
  </body>
</html>
