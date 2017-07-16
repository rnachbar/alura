var botao = document.querySelector("#buscar-paciente");
botao.addEventListener("click", function() {
	
	// objeto do javascript que fz requisições http
	var xhr = new XMLHttpRequest();

	xhr.open("GET", "https://api-pacientes.herokuapp.com/pacientes");
	xhr.addEventListener("load", function() {

		if (xhr.status == 200) {
			var resposta = xhr.responseText;
			var pacientes = JSON.parse(resposta);

			pacientes.forEach(function(paciente) {
	            addPacienteNaTabela(paciente);
	        });
		} else {
			console.log(xhr.status);
			console.log(xhr.responseText);
		}
		
	});
	xhr.send();
});