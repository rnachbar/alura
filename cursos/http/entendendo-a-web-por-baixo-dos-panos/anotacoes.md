# Anotações do curso de HTTP

* HTTP é um protocolo e um protocolo é um conjunto de regras bem definidas para que o modelo de requisição e resposta possam conversar através das mesmas regras.

* Na requisição (cliente) eu posso enviar n dados (exemplo de login: email, password) que chegam no servidor mas até chegar lá (no servidor), podemos ter vários intermediários (pois estamos trabalhando com aplicações web, então os dados passam por roteadores, modens, provedores e outros intermediários antes de chegar no servidor) e isso pode se tornar perigoso pois o http transmite texto puro, dessa forma alguém pode ver esses dados que estão sendo transmitidos por isso existe uma outra versão do HTTP que é o HTTPS, que nada mais é que o protocolo HTTP, com todas as regras do protocolo HTTP mas com uma camada de mais segurança que é a camada de SSL/TLS (Secure Sockets Layer/Transport Layer Security).

* HTTP -> Hypertext Transfer Protocol (Protocolo de Transferencia de Texto).
* HTTPS -> HTTP + SSL/TLS (HTTP com uma camada a mais de segurança).

* Para o HTTPS, o navegador tem um certificado digital (identidade, que possui uma chave pública que criptografa os dados que são enviados ao servidor) e o a aplicação tem uma chave privada (só essa aplicação tem) onde, com essa chave, é possível descriptografar os dados enviados.

* O navegador tem um certificado digital (identidade), esse certificado digital tem a chave pública e essa chave serve para criptografar os dados que estão saindo da minha máquina (navegador). Esses dados são enviados de maneira criptografada para o servidor da aplicação e dessa forma os intermediários (modem, roteador, provedor) não vão conseguir descriptografar esses dados. Só quem consegue descriptografar é quem tem a chave privada.

* No Chrome, na área de inspeção (F12) na aba `Security`, conseguimos ver qual o certificado da aplicação.

* O browser confia em algumas autoridades certificadoras (órgão ou entidade confiável que emite o certificado digital).

* Autoridade Certificadora (CA)
* CA (Certificate Authority)

* Uma autoridade certificadora (CA - Certificate Authority) é um órgão que garante ao navegador e ao usuário que a identidade de um servidor é realmente válida. Portanto, podemos trocar informações com este sem riscos!

Aprendemos no vídeo que o HTTPS usa uma chave pública e uma chave privada. As chaves estão ligadas matematicamente, o que foi cifrado pela chave pública só pode ser decifrado pela chave privada. Isso garante que os dados cifrados pelo navegador (chave pública) só podem ser lidos pelo servidor (chave privada). Como temos duas chaves diferentes envolvidas, esse método de criptografia é chamado de criptografia assimétrica. No entanto, a criptografia assimétrica tem um problema, ela é lenta.

Por outro lado, temos a criptografia simétrica, que usa a mesma chave para cifrar e decifrar os dados, como na vida real, onde usamos a mesma chave para abrir e fechar a porta. A criptografia simétrica é muito mais rápida, mas infelizmente não tão segura. Como existe apenas uma chave, ela ficará espalhada pelos clientes (navegadores) e qualquer um, que tem a posse dessa chave, pode decifrar a comunicação.

Agora, o interessante é que o HTTPS usa ambos os métodos de criptografia, assimétrica e simétrica. Como assim? Muita calma, tudo o que aprendemos é verdade! Só faltou o grande final :)

No certificado, vem a chave pública para o cliente utilizar, certo? E o servidor continua na posse da chave privada, ok? Isso é seguro, mas lento e por isso o cliente gera uma chave simétrica ao vivo. Uma chave só para ele e o servidor com o qual está se comunicando naquele momento! Essa chave exclusiva (e simétrica) é então enviada para o servidor utilizando a criptografia assimétrica (chave privada e pública) e então é utilizada para o restante da comunicação.

Então, HTTPS começa com criptografia assimétrica para depois mudar para criptografia simétrica. Essa chave simétrica será gerada no início da comunicação e será reaproveitada nas requisições seguintes. Bem-vindo ao mundo fantástico do HTTPS :)



