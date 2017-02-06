// var tdAltura = document.getElementById("altura-2");
// var tdPeso = document.getElementById("peso-2"); 

// var peso2 = tdPeso.textContent;
// var altura2 = tdAltura.textContent;

// var paciente2 = { peso : peso2, altura : altura2 }; // {} = objeto, chave : valor

// var tdAltura = document.getElementById("altura-1");
// var tdPeso = document.getElementById("peso-1"); 

// var peso1 = tdPeso.textContent;
// var altura1 = tdAltura.textContent;

// var paciente1 = { peso : peso1, altura : altura1 }; // {} = objeto, chave : valor

// var pacientes = [paciente1, paciente2]; // [] = array

var trsPacientes = document.getElementsByClassName("paciente");

// length pega o tamanho do array e menos 1 por ser a ultima posição do array
for (var posicaoAtual = 0; posicaoAtual <= trsPacientes.length - 1; posicaoAtual++) {
	var pacienteTr = trsPacientes[posicaoAtual];

	var tdNome = pacienteTr.getElementsByClassName("info-nome")[0];
	var tdPeso = pacienteTr.getElementsByClassName("info-peso")[0];
	var tdAltura = pacienteTr.getElementsByClassName("info-altura")[0];

	var paciente = {
		nome : tdNome.textContent, // pegando o conteudo com o textContent
		peso : tdPeso.textContent,
		altura : tdAltura.textContent
	}

	if (paciente.altura != 0) {
		// js executa as contas da esquerda para a direita
		var imc = paciente.peso / (paciente.altura * paciente.altura); 

		var tdImc = pacienteTr.getElementsByClassName("info-imc")[0];
		tdImc.textContent = imc; //atualizando o elemento com o IMC calculado

		console.log(imc);
	} else {
		console.log("Não executei por que altura eh igual a zero");
	}
}

/* Sessão de comentários

regra imc - peso / altura * altura

var ehDiferenteDeZero = (altura != 0); // varivel de comparação, tipo boolean (true ou false)

DOM - Document Object Model, é uma representação de uma página html no mundo Javascript e pode ser acessado a partir da variável document, que representa a raiz de nossa página

retorna o objeto que representa o id - manipulando DOM
var tdPeso = document.getElementById("peso-2"); 

textContent pega conteudo, altera conteudo de um elemento

var titulo = document.getElementById("titulo"); // Seleciona elemento
var conteudo = titulo.textContent; // Pega texto dentro do elemento
console.log(conteudo); // Imprime o conteudo

var tdDoImc = document.getElementById("imc-1"); // pega o td do imc do paciente 1
tdDoImc.textContent = imc; //Altera o conteúdo do td para o valor da variável imc

Um objeto em Javascript, nada mais é que uma variável que possui, dentro dela, chaves e valores
paciente["altura"]; // pega valor do objeto
dot notation para pegar valores de um objeto - mais usado
paciente.peso; 
paciente.altura;

var paciente2 = { peso : peso2, altura : altura2 }; // {} = objeto, chave : valor
var pacientes = [paciente1, paciente2]; // [] = array

getElementsByTagName = pega os elementos por tag, todas as tags passadas
getElementsByClassName = pega os elementos pela classe

*/ 


