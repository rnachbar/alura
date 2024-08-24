let listaDeNumeros  = [];
let numeroLimite    = 10;
let numeroSecreto   = gerarNumeroAleatorio();
let tentativas      = 1;

function exibirTextoNaTela(tag, texto) {
    let campo       = document.querySelector(tag);
    campo.innerHTML = texto;

    responsiveVoice.speak(texto, 'Brazilian Portuguese Female', {rate: 1.2});
}

function mensagemInicial() {
    exibirTextoNaTela('h1', 'Jogo do número Secreto');
    exibirTextoNaTela('p', 'Escolha um número entre 1 e 10');
}

mensagemInicial();

function verificarChute() {
    let chute = document.querySelector('input').value;

    if (chute == numeroSecreto) {
        exibirTextoNaTela('h1', 'Acertou');

        let palavra     = tentativas > 1 ? 'tentativas' : 'tentativa';
        let mensagem    = `Você descobriu o número secreto em ${tentativas} ${palavra}`;
        exibirTextoNaTela('p', mensagem);

        let botao = document.getElementById('reiniciar');
        botao.removeAttribute('disabled');
    } else {
        if (chute > numeroSecreto) {
            exibirTextoNaTela('p', 'Menor');
        } else {
            exibirTextoNaTela('p', 'Maior');
        }

        limparCampo();
        tentativas++;
    }
}

function gerarNumeroAleatorio() {
    let numeroEscolhido = parseInt(Math.random() * numeroLimite + 1);
    let quantidadesNum  = listaDeNumeros.length;

    if (quantidadesNum == numeroLimite) {
        listaDeNumeros = [];
    }

    if (listaDeNumeros.includes(numeroEscolhido)) {
        return gerarNumeroAleatorio();
    }

    listaDeNumeros.push(numeroEscolhido);
    return numeroEscolhido;
}

function limparCampo() {
    chute = document.querySelector('input');
    chute.value = '';
}

function reiniciarJogo() {
    numeroSecreto   = gerarNumeroAleatorio();
    tentativas      = 1;

    limparCampo();
    mensagemInicial();

    let botao = document.getElementById('reiniciar');
    botao.setAttribute('disabled', true);
}
