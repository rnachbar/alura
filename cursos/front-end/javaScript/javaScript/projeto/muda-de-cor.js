var trs = document.getElementsByTagName("tr");

percorreArray(trs, function(tr) {

	// ao passar o maouse
	// tr.addEventListener("mouseover", function() {
	// 	this.setAttribute("bgcolor", "grey"); // mudar cor do elemento
	// })

	// ao clicar
	// tr.addEventListener("click", function() {
	// 	this.setAttribute("bgcolor", "grey"); // mudar cor do elemento
	// })

	// duplo clique
	tr.addEventListener("dblclick", function() {
		this.setAttribute("bgcolor", "grey"); // mudar cor do elemento
	})

})