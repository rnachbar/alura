// var pacientes = document.querySelectorAll(".paciente");

// pacientes.forEach(function(paciente) {
// 	paciente.addEventListener("dblclick", function() {
// 		// this esta sempre atrelado ao dono do evento
//		// paciente tem um evento, this é o paciente
// 		this.remove();
// 	});
// });

// console.log(paciente);

var table = document.querySelector("table");
table.addEventListener("dblclick", function(event) {
	event.target.parentNode.classList.add("fadeOut");

	setTimeout(function() {
		var alvoEvento = event.target;
		var paiDoAlvo = event.target.parentNode;
		paiDoAlvo.remove();
	}, 500);

});

