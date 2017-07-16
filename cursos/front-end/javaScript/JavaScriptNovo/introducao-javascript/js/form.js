// escutando eventos
// no evento click, chama função mostraMensagem
// titulo.addEventListener("click", mostraMensagem);
// function mostraMensagem() {
// 	console.log("Olá, eu fui clicado!");
// }

// funcão anonima
// titulo.addEventListener("click", function() {
// 	console.log("Olá, eu fui clicado!");
// });

var botaoAdicionar = document.querySelector("#adicionar-paciente");
botaoAdicionar.addEventListener("click", function(event) {
	event.preventDefault(); // previne o comportamento padrão
	
	var form = document.querySelector("#form-adiciona");
	var paciente = obtenhaInformacoesDoForm(form);
	var erros = validaPaciente(paciente);

	if (erros.length > 0) {
		exibeMensagensDeErro(erros);
		return; // sai da função e não executa o resto do código
	}
	
	addPacienteNaTabela(paciente);
	
	form.reset(); // limpa os campos
	var mensagensErro = document.querySelector("#mensagens-erro");
	mensagensErro.innerHTML = "";

	console.log(pacienteTr);
});

// objetos são representações de coisas em comum
function obtenhaInformacoesDoForm(form) {

	// criando objeto com { }
	var paciente = {
		nome: form.nome.value,
		peso: form.peso.value,
		altura: form.altura.value,
		gordura: form.gordura.value,
		imc: calculaImc(form.peso.value, form.altura.value)
	}

	return paciente;
}

function montaTr(paciente) {

	// criando os elementos da tabela, createElement criar um elemento
	var pacienteTr = document.createElement("tr");
	pacienteTr.classList.add("paciente");

	// appendChild coloca como filho, adiciona como filho
	pacienteTr.appendChild(montaTd(paciente.nome, "info-nome"));
	pacienteTr.appendChild(montaTd(paciente.peso, "info-peso"));
	pacienteTr.appendChild(montaTd(paciente.altura, "info-altura"));
	pacienteTr.appendChild(montaTd(paciente.gordura, "info-gordura"));
	pacienteTr.appendChild(montaTd(paciente.imc, "info-imc"));

	return pacienteTr;
}

function montaTd(dado, classe) {

	var td = document.createElement("td");
	td.textContent = dado;
	td.classList.add(classe);

	return td;
}

function validaPaciente(paciente) {

	var erros = [];

	// if em uma linha
	if (paciente.nome.length == 0) erros.push("O nome não pode ser em branco");
	if (!validaPeso(paciente.peso)) erros.push("Peso é inválido!");
	if (paciente.peso.length == 0) erros.push("O peso não pode ser em branco");
	if (!validaAltura(paciente.altura)) erros.push("Altura inválida!");
	if (paciente.altura.length == 0) erros.push("A altura não pode ser em branco");
	if (paciente.gordura.length == 0) erros.push("A gordura não pode ser em branco");

	return erros;

}

function exibeMensagensDeErro(erros) {

	var ul = document.querySelector("#mensagens-erro");
	ul.innerHTML = "";

	erros.forEach(function(erro) {
		var li = document.createElement("li");
		li.textContent = erro;
		ul.appendChild(li);
	});

}

function addPacienteNaTabela(paciente) {

	var pacienteTr = montaTr(paciente);
	var tabela = document.querySelector("#tabela-pacientes");
	tabela.appendChild(pacienteTr);
}