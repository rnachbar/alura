/* Código principal */
alert("Boas vindas ao Jogo do Número Secreto!!!");

let numeroMaximo    = 100;
let numeroSecreto   = parseInt(Math.random() * numeroMaximo + 1);
let tentativas      = 1;
let chute;

while (chute != numeroSecreto) {
    chute = prompt(`Informe seu chute (número) até ${numeroMaximo}:`);

    if (chute == numeroSecreto) {
        break;
    } else {
        alert(`Você error o número secreto ${chute}`); // Template Strings

        if (numeroSecreto > chute) {
            alert(`Maior que ${chute}`); // Template Strings
        } else {
            alert(`Menor que ${chute}`); // Template Strings
        }

        tentativas++;
    }
}

let palavraTentativa = tentativas > 1 ? "tentativas" : "tentativa";
alert(`Você acertou o número secreto ${numeroSecreto} com ${tentativas} ${palavraTentativa}.`); // Template Strings

/* Desafio */
// alert("Boas vindas ao nosso site!");

// let nome            = "Lua";
// let idade           = 25;
// let numeroDeVendas  = 50;
// let saldoDisponivel = 1000;

// alert("Erro! Preencha todos os campos");
// let mensagemDeErro  = "Erro! Preencha todos os campos";
// alert(mensagemDeErro);

// nome                = prompt("Informe seu nome");
// idade               = prompt("Informe sua idade");

// if (idade >= 18) {
//     alert("Pode tirar a habilitação!");
// }
