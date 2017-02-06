// peso / altura * altura

var peso = 100;
var altura = 2.0;

// var ehDiferenteDeZero = (altura != 0); // varivel de comparação, tipo boolean (true ou false)

if (altura != 0) {
	// js executa as contas da esquerda para a direita
	var imc = peso / (altura * altura); 
	console.log(imc);
} else {
	console.log("Não executei por que altura eh igual a zero");
}


