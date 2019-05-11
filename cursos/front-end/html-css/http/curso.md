HTTP e os fundamentos da Web

O que veremos no curso: como funciona a comunição na Web, os fundamento e conceitos principais.

### AULA 1 

* Quando se esta no navegador e se acessa um site existe uma comunição, o navegador pede para o site a sua página principal;
* Nessa comunicação o navegar representa o CLIENTE e o site é o servidor. O cliente envia a requisição e o servidor responde a requisição;
* O cliente (navegador) pede informações para o servidor (site) que responde;
* Na web sempre existirá um cliente e um servidor, comunicação client-server;
* Entre o cliente (navegador) e o servidor (site) existem regras de comunicação;
* Protocolo HTTP é o mais comum na web;
* HTTP define as regras de comunicação entre o cliente e servidor na internet;

* Na internet sempre tem um cliente e um servidor
* Entre o cliente e o servidor precisam haver regras de comunicação
* As regras são definidas dentro de um protocolo
* HTTP é o protocolo mais importante na internet

### AULA 2

* Sempre há um cliente, sempre há um servidor e o protocolo http segue esse modelo (client-server);
* Navegar é o cliente;
* O site é o servidor;
* O protocolo http segue o modelo client-server
* HTTP define algumas regras de comunicação entre cliente e servidor;
* HTTPS é a versão segura do protocolo http;
* http é texto puro;
* Usando o protocolo http signfica que enviamos os nossos dados na rede em texto puro, quando logamos em um site e informamos nossa senha, com o http esse dado é enviado como texto puro;
* O navegador não se comunica diretamente com o site;
* o navegador primeiro se comunica com o roteador (wi-fi, modem), depois para o servidor do provedor de rede, dai vai para a nuvem do site, a hospedagem do site até chegar no site;
* Cada um desses intermediários, que não controlamos, poderia interceptar esses dados usando http (texto puro);
* https é seguro;
* Empresas confirmar a segurança do site através de certificados digitais;
* Certificados digitais têm data validade;
* Trafegar os dados de forma segura é resolvida através da criptografia;
* Enviar os dados de forma criptografada;
* O certificado confirma a identidade (segurança) e contém a chave pública de criptografia;
* O navegador usa uma chave pública, o certificado criptografa os dados e envia os dados criptografados;
* Quando chega no site (servidor) é utilizado uma chave privada;
* Chave publica é usada para criptografar os dados que o navegador vai enviar;
* No lado do servidor é necessário descriptografar os dados;
* São usadas chaves assímetricas * uma chave pública para criptografar e outra chave privada para descriptografar;
* Dados que foram criptografados pela chave pública só podem ser descriptografados pela chave privada e vice-versa, se é criptografado pela chave privada só pode ser descriptografado pela chave pública;
* HTTP não usa criptografia;

* só com HTTPs a web é segura
* HTTPs significa usar um certificado digital do servidor
* o certificado prova a identidade e tem validade
* o certificado possui uma chave publica
* a chave é utilizada pelo navegador para criptografar os dados

### AULA 3

* Para ser seguro o site tem que ter um certificado e o certificado confirma sua segurança e também possui a chave pública para criptografia de dados;
* Só com o https o site, app são seguros;
* www.meusite.com.br * Domínio;
* O domínio é o endereço;
* O domínio tem uma hierarquia:
	* br indica o país (Brasil);
	* com indica que é um site comercial;
	* meusite é o nome do site;
	* www é o prefixo de web (world wide web) (opcional);
* O domínio é para o usuário acessar o site com mais facilidade, o navegador usa o endereço IP;
* nslookup www.alura.com.br -> da o ip do site;
* O navegador já sabe a porta padrão do protocolo https;
* Porta padrão HTTP :80;
* Porta padrão HTTPS :443;
* Recurso: /alguma-coisa; (/home, /index);
* protocolo://dominio:porta/recurso -> URL (unified resource locator);

* URL são os endereços da Web
* Uma URL começa com o protocolo (http://) seguido pelo domínio (www.alura.com.br)
* Após o domínio é especificado o caminho para um recurso (/curso/http)
* Um recurso é algo concreto na aplicação que queremos acessar

### AULA 4

* O cliente (navegador) envia informações e o servidor responde;
* O cliente faz a requisição e o servidor devolve a resposta;
* HTTP segue request-response (requisição-resposta);
* Cada requisição e resposta é independente da outra;
* Cookies são pequenos arquivos de texto que guardam informações do usuário;
* Uma requisição precisa incluir todas as informações;
* HTTP é um protocolo stateless, não sabe das requisições anteriores;
* Cada requisição é independente;

* o protocolo HTTP segue o modelo Requisição-Resposta
* sempre o cliente inicia a comunicação
* uma requisição precisa ter todas as informações para o servidor gerar a resposta
* HTTP é stateless, não mantém informações entre requisições
* As plataformas de desenvolvimento usam sessões para guardar informações entre requisições

### AULA 5

* Metodo GET para receber os dados;
* Status 200 é OK;
* 200 é código de resposta que significa OK;
* Todos os códigos que comecem com 2, do lado do servidor, significa que deu certo;
* Status 301 é redirecionamento (moved permanently);
* Status 404 não foi encontrado;
* Status 500 erro no processamento;

* depurar uma requisição HTTP
* o primeiro método HTTP - GET
* códigos de resposta como 200, 301 e 404
* cabeçalhos da resposta como Location

### AULA 6

* GET -> parâmetros na URL;
* POST -> envia os parâmetros no corpo da requisição;
* DELETE - apagar um recurso;
* PUT - atualizar um recurso;

* para declarar um parâmetro da requisição usamos ? após do recurso
* vários parâmetros são separados pelo &
* params são utilizados para definir detalhes da pesquisa ou enviar dados de um formulário
* params no GET fazem parte da URL
* existem outros métodos HTTP como POST, DELETE e PUT
* params no POST fazem parte do corpo da requisição

https://cursos.alura.com.br/course/otimizacao-performance-web
https://cursos.alura.com.br/course/performance-http2-critical-path
