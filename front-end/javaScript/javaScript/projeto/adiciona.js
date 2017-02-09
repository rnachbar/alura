var botao = document.querySelector("#adicionar-paciente"); // seleciona por id #
botao.addEventListener("click", function(event) {

	event.preventDefault(); // impede comportamento padrão

	var campoNome = document.querySelector("#campo-nome");
	var campoPeso = document.querySelector("#campo-peso");
	var campoAltura = document.querySelector("#campo-altura");

	// js não aceita quebra de linha no meio de string então concatenamos cada quebra de linha
	var pacienteNovo = "<tr class='paciente'>"+
							"<td class='info-nome'>"+ campoNome.value +"</td>"+
							"<td class='info-peso'>"+ campoPeso.value +"</td>"+
							"<td class='info-altura'>"+ campoAltura.value +"</td>"+
							"<td class='info-imc'></td>"+
						"</tr>";

	// querySelector sempre retorna um elemento só, buscando por tag
	var tabela = document.querySelector("table");
	tabela.innerHTML = tabela.innerHTML + pacienteNovo;

	campoNome.value = "";
	campoAltura.value = "";
	campoPeso = "";

})


/* Sessão de comentários

var tabela = document.getElementsByTagName("table")[0];
var tabela = document.querySelector("table");
document.querySelectorAll("table"); // seleciona um array com todos elementos
textContent só funciona com texto, para html usar o innerHTML

*/
