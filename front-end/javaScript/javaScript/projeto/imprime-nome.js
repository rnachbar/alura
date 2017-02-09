var trsPacientes = document.getElementsByClassName("paciente");

percorreArray(trsPacientes, function(pacienteTr) {
	// pegando o elemento
	var tdNome = pacienteTr.getElementsByClassName("info-nome")[0];
	var tdPeso = pacienteTr.getElementsByClassName("info-peso")[0];
	var tdAltura = pacienteTr.getElementsByClassName("info-altura")[0];

	var pacienteAtual = {
		// pegando o conteudo com o textContent
		nome : tdNome.textContent,
		peso : tdPeso.textContent,
		altura : tdAltura.textContent,
		// função anonima
		pegaImc : function() {
			// this pega do objeto atual
			if (this.altura != 0) {
				// js executa as contas da esquerda para a direita
				var imc = this.peso / (this.altura * this.altura);
				return imc;
			} else {
				console.log("Não executei por que altura eh igual a zero");
			}
		}
	}

	console.log(pacienteAtual.nome);

});
