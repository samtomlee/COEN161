<!DOCTYPE html>
<html>
<head>
	<title>Lab 7 - Part 2</title>
</head>
<body>
	<?php 
		$str1 = "racecar";
		$str2 = "madame";

		// function: isPalindrome()
		// returns 'true' if $str is a palindrome, otherwise returns 'false'
		// your code goes here...
		function isPalindrome($str){
			$isP = "Yes";
			for($i = 0; $i < strlen($str)/2; $i++){
				if(substr($str, $i, 1) != substr($str, (strlen($str) - 1 - $i), 1))
					$isP = "No";
			}
			return $isP;
		
		}
		
		echo "'$str1' is a palindrome? " . isPalindrome($str1) . "<br>";
		echo "'$str2' is a palindrome? " . isPalindrome($str2) . "<br>";
	?>
</body>
</html>
