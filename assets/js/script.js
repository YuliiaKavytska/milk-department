function deleteProduct(element){

	var addRequest = new XMLHttpRequest();
		 addRequest.open("GET", element.dataset.link, false);
		 addRequest.send();

	var table = document.querySelector("#table-body");
		 table.innerHTML = addRequest.response;

}

