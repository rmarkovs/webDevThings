<!DOCTYPE html>
	<!-- In Class Assignment 2 - COSC 2328 - Professor McCurry -->
	<!-- Implemented by Rebecca Markovsky -->
<html>
	<head>
		<title>In Class 2 PHP Page! With Methods!</title>
		<style>
			span
			{
				color: blue;
				background-color: lightgrey;
			}
			body
			{
				background-color: lightblue;
				color: olivedrab;
			}
		</style>
	</head>
	<body>
		<?php
		//Part 2
		 	$x = "This is information for my variable";
			function print_center($var)
			{
				echo "<p style = \"text-align:center; color:orange\">
							$var</p>";
			}
			print_center($x);
			//part 3
			$y = 5;
			function print_step($var)
			{
				for ($count = 0; $count <= $var; $count++)
				{
					echo "<p style = \"color:DarkMagenta\">Lets do this again!</p>";
					echo "<br>";
				}
			}
				print_step($y);

			//part 4
				$anInt = 8;
				$aFloat = 9.13;
				function mathOps($var1, $var2)
				{
					$varsAdded = $var1 + $var2;
					$varsSubtracted = $var1 - $var2;
					$varsMult = $var1 * $var2;
					$varsDiv = $var1 / $var2;
					$varsMod = $var1 % $var2;
					echo "<span> we are doing math with $var1 and $var2 <br> Their sum is: $varsAdded<br>
					Their difference is: $varsSubtracted<br> Their product is: $varsMult<br> Their quotient is: $varsDiv<br>
					Their mod is: $varsMod <br><br></span>";

				}
				mathOps($anInt, $aFloat);
				//part 5
					$numArray = array(9,15,8,6,17,16,3,12,18);
					function meanAndMedian($array)
					{
						$mean = 0;
						for($i=0;$i<count($array);$i++)
						{
							$mean += $array[$i];

						}
						$mean = $mean/count($array);
						 echo "<span style=\"background-color:lightblue\">The average of the array elements is: $mean<br><span>";
						 $median = 0;
						 if(count($array)%2 == 0)
						 {
							 $median = ($array[count($array)/2] + $array[count($array) /2 -1])/2;
						 }
						 else {
						 	{
								$median = $array[count($array)/2];

							}
							echo "<span> The median is: $median<br><span>";
						 }

						 }
						 meanAndMedian($numArray);
						 //part 6
						 $wordArray = array("this","is","a","very","simple","sentence","that","is",
					 "stored","as","an","array. Big yet","testing","more");
					 function arrayInVariousAlignments($array)
					 {
						 //determine modulo
						 for($i = 0; $i<count($array); $i++)
						 {
							 $y = $i %4;
							 switch($y)
							 {
							 	case 0:
									echo "<p style= \"text-align:right; color:navy\">$array[$i]</p>";
									break;
								case 1:
										echo "<p style = \"text-align:center; color:red\">$array[$i]</p>";
										break;
								case 3:
										echo "<p style= \"text-align:left; color:green\">$array[$i]</p>";
										break;
							}
						 }
					 }
					 arrayInVariousAlignments($wordArray);
					 //part 7
					 $arraySize = 11;
					 function arrayGenerator($size)
					 {
						 $currentValue = 0;
						 $returnArray = array();
						 for($i = 0; $i<$size; $i++)
						 {
							 	$currentValue = rand(0,29);
								array_push($returnArray,$currentValue);
						 }
						$x = 0;
						while($x<$size)
						{
							if($returnArray[$x] < 9)
							{
								echo "<span style= \"color:DarkRed;\">$returnArray[$x]<span>";
							}
							else if($returnArray[$x]<19)
							{
								echo "<span style = \"color:DarkSlateGray;\">$returnArray[$x]<span>";
							}
							else
							{
								echo "<span style = \"color:lime;\">$returnArray[$x]<span>";
							}
							$x++;
						}
					 }
					 arrayGenerator($arraySize);

		 ?>

	</body>
</html> 
