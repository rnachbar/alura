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

	var imc = pacienteAtual.pegaImc();

	var tdImc = pacienteTr.getElementsByClassName("info-imc")[0];
	tdImc.textContent = imc; //atualizando o elemento com o IMC calculado
	console.log(imc);

});

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


