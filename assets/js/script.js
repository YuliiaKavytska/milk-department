function deleteProduct(element){

	var addRequest = new XMLHttpRequest();
		 addRequest.open("GET", element.dataset.link, false);
		 addRequest.send();

	var table = document.querySelector("#table-body");
		 table.innerHTML = addRequest.response;
}

var searchUser = document.querySelector("#user-search");
if(searchUser != null){
	searchUser.onsubmit = function(e){
		e.preventDefault();
		var searUs = searchUser.querySelector("#date-user");
		var query = new XMLHttpRequest();
			 query.open("POST", searchUser.action, false);
			 query.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			 query.send("date=" + searUs.value);

		var userTable = document.querySelector("#table-body-user");
		userTable.innerHTML = query.response;
	}
}

var purcSearch = document.querySelector("#purch");
if(purcSearch != null){
	purcSearch.onsubmit = function(e){
		e.preventDefault();
		var minimum = purcSearch.querySelector("#minimum");
		var maximum = purcSearch.querySelector("#maximum");

		var query = new XMLHttpRequest();
			 query.open("POST", purcSearch.action, false);
			 query.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			 query.send("min=" + minimum.value + "&max=" + maximum.value);

		var table = document.querySelector("#table-perc");
		table.innerHTML = query.response;
	}
}

var sale = document.querySelector("#sale");
if(sale != null){
	sale.onsubmit = function(e){
		e.preventDefault();
		var minimum = sale.querySelector("#minimum");
		var maximum = sale.querySelector("#maximum");

		var query = new XMLHttpRequest();
			 query.open("POST", sale.action, false);
			 query.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			 query.send("min=" + minimum.value + "&max=" + maximum.value);

		var table = document.querySelector("#table-body-sale");
		table.innerHTML = query.response;
	}
}


var val = document.querySelector("#value");
if(val != null){
	val.onsubmit = function(e){
		e.preventDefault();
		var minimum = val.querySelector("#minimum");
		var maximum = val.querySelector("#maximum");

		var query = new XMLHttpRequest();
			 query.open("POST", val.action, false);
			 query.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			 query.send("min=" + minimum.value + "&max=" + maximum.value);

		var table = document.querySelector("#table-value");
		table.innerHTML = query.response;
	}
}