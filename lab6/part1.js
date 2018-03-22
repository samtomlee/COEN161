(function () {
	var resources = "http://students.engr.scu.edu/~adiaztos/resources/";

	// Create an XMLHttpRequest object
	var x1 = new XMLHttpRequest();
	// Handle succesful responses
	x1.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("sample1").innerHTML = "<p>" + this.responseText + "</p>";
		}
	};
	// Get sample1.php
	x1.open("GET", "http://students.engr.scu.edu/~adiaztos/resources/sample1.php",true);
	x1.send();


	// Create an XMLHttpRequest object
	var x2 = new XMLHttpRequest();
	// Handle succesful responses
	x2.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var elm2 = document.getElementById("sample2");
			elm2.innerHTML = this.responseText;
		}
	};
	// Get sample2.php
	x2.open("GET", "http://students.engr.scu.edu/~adiaztos/resources/sample2.php",true);
	x2.send();

	// Create an XMLHttpRequest object
	var x3 = new XMLHttpRequest();
	// Handle succesful responses
	x3.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var response = JSON.parse(this.responseText);
			var nameStr = "";
			for(var i = 0; i < response.friends.length; i++){
				// console.log(response.friends[i].name)
				nameStr += "<li>" + response.friends[i].name + "</li>\n";
			}
			document.getElementById("sample3").append(document.createElement("ul"));
			document.querySelectorAll("#sample3 ul")[0].innerHTML = nameStr;

		}
	};
	// Get sample3.php
	x3.open("GET", "http://students.engr.scu.edu/~adiaztos/resources/sample3.php",true);
	x3.send();
})();
