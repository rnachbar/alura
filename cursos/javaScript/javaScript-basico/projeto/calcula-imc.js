// DOM - Document Object Model, é uma representação de uma página html no mundo Javascript e pode ser acessado a partir da variável document, que representa a raiz de nossa página
// textContent pega conteudo, altera conteudo de um elemento
// var titulo = document.getElementById("titulo"); // Seleciona elemento
// var conteudo = titulo.textContent; // Pega texto dentro do elemento
// console.log(conteudo); // Imprime o conteudo
// var tdDoImc = document.getElementById("imc-1"); // pega o td do imc do paciente 1
// tdDoImc.textContent = imc; //Altera o conteúdo do td para o valor da variável imc

// peso / altura * altura

// retorna o objeto que representa o id - manipulando DOM
var tdPeso = document.getElementById("peso-2"); 
var tdAltura = document.getElementById("altura-2");

// Um objeto em Javascript, nada mais é que uma variável que possui, dentro dela, chaves e valores
// objeto, chave : valor
var paciente = {
	peso : tdPeso.textContent,
	altura : tdAltura.textContent 
};
// paciente["altura"]; // pega valor do objeto
// dot notation para pegar valores de um objeto - mais usado
// paciente.peso; 
// paciente.altura; 

// var ehDiferenteDeZero = (altura != 0); // varivel de comparação, tipo boolean (true ou false)
if (paciente.altura != 0) {
	// js executa as contas da esquerda para a direita
	var imc = paciente.peso / (paciente.altura * paciente.altura); 

	var tdImc = document.getElementById("imc-2");
	tdImc.textContent = imc; // modificando o valor de um elemento

	console.log(imc);
} else {
	console.log("Não executei por que altura eh igual a zero");
}


