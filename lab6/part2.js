(function () {
	var template = document.getElementById("template");

	// remove template from the page, since it is only a template
	var parent = template.parentNode;
	parent.removeChild(template);

	// Create an XMLHttpRequest object
	var x = new XMLHttpRequest();
	// Set onreadystatechange
	x.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var contact = JSON.parse(this.responseText);
			populateContacts(contact);
		}
	}
	// Open and send requests
	x.open("GET", "http://students.engr.scu.edu/~adiaztos/resources/contacts.php", true);
	x.send();
	// This function takes the list of contacts and clones a new element from the
	// template with the value of each contact
	function populateContacts(contacts) {
		for(var i = 0; i < contacts.length; i++){
			var node = template.cloneNode(true);
			node.id = contacts[i].id;
			document.getElementsByClassName("card-body")[0].append(node);
			document.querySelectorAll("#index")[i].innerHTML = (i+1);
			document.querySelectorAll('input[name="name"]')[i].value = contacts[i].name;
			document.querySelectorAll('input[name="email"]')[i].value = contacts[i].email;

		}

	}

	// submits a request with the search query for the filtered list of contacts
	function search() {
		// clear the current contacts list
		while (parent.lastChild)
			parent.removeChild(parent.lastChild);

		//get the search query and return the contacts
		var query = "http://students.engr.scu.edu/~adiaztos/resources/contacts.php?query=";
		query += document.getElementById("searchField").value;
		x.open("POST", query, true);
		x.send();

	}

	// assign the search function as the click handler for search button
	document.getElementById("searchBtn").onclick = function(){search();};

})();
