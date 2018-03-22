(function () {
	var resources = "http://students.engr.scu.edu/~adiaztos/resources/";

	// Load sample1.php
	$("#sample1").load("http://students.engr.scu.edu/~adiaztos/resources/sample1.php");
	// Load sample2.php
	$("#sample2").load("http://students.engr.scu.edu/~adiaztos/resources/sample2.php");
	// Get sample3.php
	$.get("http://students.engr.scu.edu/~adiaztos/resources/sample3.php", function(data){
		var list = document.createElement("ul");
		$("#sample3 h3").after(list);
		var obj = JSON.parse(data);
		var friends = obj.friends;
		// console.log(friends); checking to make sure array was loaded properly
		$.each(friends, function(index, value) {
			// console.log(value.name) check to make sure all the names were cycled through
			$("#sample3 ul").append("<li>" + value.name + "</li>");
		});
	});
})();
