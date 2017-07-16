// querySelector busca informação passada
// boa prética não buscar pela tag e sim por outras opções (classe (seletor css .), id(seletor css #))
var titulo = document.querySelector(".titulo");

// textContent pega o conteudo
titulo.textContent = "Aparecida Nutricionista";


// var pacientes = document.querySelector(".paciente"); // querySelector trás apenas um elemento
var pacientes = document.querySelectorAll(".paciente"); // querySelectorAll retorna um array com todos os elementos

// percorrendo tamanho do array de pacientes (pacientes.length)
for(var i = 0; i < pacientes.length; i++) {
	console.log(pacientes[i]);

	var paciente = pacientes[i];

	var tdPeso = paciente.querySelector(".info-peso");
	var peso = tdPeso.textContent;

	var tdAltura = paciente.querySelector(".info-altura");
	var altura = tdAltura.textContent;

	var tdImc = paciente.querySelector(".info-imc");

	var pesoEhValido = validaPeso(peso);
	var alturaEhValida = validaAltura(altura);

	if (!pesoEhValido) {
		pesoEhValido = false;
		console.log("Peso inválido!");
		// escrevedo valor calculado do imc no HTML
		tdImc.textContent = "Peso inválido!";
		// paciente.style.backgroundColor = "lightcoral"; // mudando estilo (CamelCase é a denominação em inglês para a prática de escrever palavras compostas ou frases, no JS nao podemos separar palavras, usar camelcase para propriedades com duas palavras)
		paciente.classList.add("paciente-invalido"); // adicionando classe css
	}

	if (!alturaEhValida) {
		alturaEhValida = false;
		console.log("Altura inválida!");
		// escrevedo valor calculado do imc no HTML
		tdImc.textContent = "Altura inválida!";
		// paciente.style.backgroundColor = "lightcoral"; // mudando estilo (CamelCase é a denominação em inglês para a prática de escrever palavras compostas ou frases, no JS nao podemos separar palavras, usar camelcase para propriedades com duas palavras)
		paciente.classList.add("paciente-invalido"); // adicionando classe css
	}

	if (pesoEhValido && alturaEhValida) {
		var imc = calculaImc(peso, altura);
		// escrevedo valor calculado do imc no HTML
		tdImc.textContent = imc; 
	}

}

function validaPeso(peso) {

	if (peso >= 0 && peso < 1000) {
		return true;
	} else {
		return false;
	}
}

function validaAltura(altura) {

	if (altura >= 0 && altura <= 3.0) {
		return true;
	} else {
		return false;
	}
}

function calculaImc(peso, altura) {
	var imc = 0;
	imc = peso / (altura * altura);
	return imc.toFixed(2); // toFixed() limita números de casas decimais
}

