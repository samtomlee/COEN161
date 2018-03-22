<!DOCTYPE html>
<html>
<head>
	<title>Lab 7 - Part 1</title>
</head>
<body>
	<?php 
		// Variable Declarations
		$num1 = 1;
		$num2 = 1.01;
		$num3 = 1e3;

		$str1 = "hello";
		$str2 = "there";
		$str3 = "world";

		// What does this echo statement print out and why?
		// It prints out $num1 + $num2 because to print out the desired sum of the two variables,
		// echo requires double quotations rather than single quotations.
		echo '$num1 + $num2 <br>';

		// What does this echo statement print out and why?
		// It prints out 1 + 1.01 because it takes + to be a character between the two variable 
		// values.
		echo "$num1 + $num2 <br>";

		// What does this echo statement print out and why?
		// This statement prints out 1001 becuase by changing the variable outside the echo
		// statement, it calculates the correct value.
		$num3 += $num1;
		echo "$num3 <br>";

		// What does this echo statement print out and why?
		// Like the first statement, this echo statement prints out $str1 $str2 because of the 
		// use of single quotes rather than double quotes.
		echo '$str1 $str3 <br>';

		// What does this echo statement print out and why?
		// This echo statement prints out hello world because it uses the string variables
		// and adds the space character in between them.
		echo "$str1 $str3 <br>";
		
		// What does this echo statement print out and why?
		// This echo statement prints hello there because it concatenates the first string with 
		// the second string variable, adding a space in betweem the two "words", and then printing
		// the outcome.
		$str1 .= " " . $str2;
		echo "$str1 <br>";
	?>
</body>
</html>
