<!DOCTYPE html>
<html>
<head>
	<title>Lab 7 - Part 4</title>
</head>
<body>
	<?php 
		$cityList = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
		?>
		<h2>Country Capitals</h2>
		<ul>
			<?php 
				// your code goes here...
				ksort($cityList);
				echo "<ul>";
				foreach($cityList as $city => $capital){
					echo "<li> The capital of " .  $city . " is " . $capital . ".</li>";
				}
			?>
		</ul>
</body>
</html>
