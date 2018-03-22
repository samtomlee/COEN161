<!DOCTYPE html>
<html>
<head>
	<title>Lab 7 - Part 3</title>
</head>
<body>
	<h2>My Multiplication Table</h2>
	<table align="left" border="1" cellpadding="3" cellspacing="0">
		<?php 
			// Constant used to determine the range of the mulplication table
			define('MAX', '6');
			
			// your code goes here...
			echo "<table border = \"1\" style='border-collapse: collapse'>";
			for($row=1; $row<=MAX; $row++){
				echo "<tr> \n";
				for($col = 1; $col <= MAX; $col++){
					$m = $row * $col;
					echo "<td>$row * $col = $m<td> \n";
				}
				echo "</tr>";
			}
			echo "</table>";
		?>
	</table>
</body>
</html>
