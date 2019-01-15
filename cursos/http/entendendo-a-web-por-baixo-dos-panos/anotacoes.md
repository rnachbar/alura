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

* Endereço: http (`protocolo`) :// www.alura.com.br (`domínio`)

* `$ nslookup google.com` esse comando (feito via terminal do computador) server para informar alguns dados do domínio passado como, por exemplo, o endeço IP do domínio.

* Um domínio é um nome fácil de ser gravado mas as aplicações web são representadas através de endereçamentos de IP (IP do servidor).

* DNS (Domain Name System).
* Não precisamos digitar o IP para acessar sites por causa do DNS.
* DNS é um serviço que resolve para você o nome de um domínio.
* Quando eu digito no navegar google.com.br, essa requisição conversa com o servidor DNS, que age como se fosse um banco de dados onde temos números (IP) para vários domínios e ele verifica qual o endereço IP do que foi digitado.

* HTTP - Porta padrão 80.
* HTTPS - Porta padrão 443.
* FTP - Porta padrão 21.
* SSH - Porta padrão 22.

* Um servidor pode ter várias portas abertas para acessos (`Listen 8081` e configuração de `vhost`).
* O servidor não responde para uma porta que não esteja aberta e da erro de timeout.

* Quando utilizamos `HTTP` nos omitimos qual porta está sendo utilizada. Mas isso não impede que no fim do domínio coloquemos :80 (portão padrão do HTTP - http://www.google.com:80). Isso indica que estamos fazendo uma requisição para esse domínio mas lá no servidor acessa a porta 80.

* URL (Uniform Resource Locator).
* URI (Uniform Resource Identifier).
* URN (Uniform Resource Name).

* HTTP não guarda estado, cada requisição é única (independente) no mundo do WEB.
* Quando fazemos uma requisição, a requisição seguinte não sabe o que foi passado na anterior.

* Cookies são pares de chaves ou valores onde armazenamos dados, por exemplo, para uma sessão de usuário logado.
* A tecnologia de sessão só é possível porque o browser consegue guardar cookies.

* O protocolo HTTP segue o modelo REQUISIÇÃO-RESPOSTA.
* HTTP é STATELESS (não guarda estado/sem estado).
* STATELESS significa que cada requisição é única e não são guardadas informações de requisições antigas.
* Toda requisição HTTP deve enviar novas informações sem considerar requisições antigas.

* Um cookie é um pequeno arquivo de texto, normalmente criado pela aplicação web, para guardar algumas informações sobre usuário no navegador. Quais são essas informações depende um pouco da aplicação. Pode ser que fique gravado alguma preferência do usuário. Ou algumas informações sobre as compras na loja virtual ou, como vimos no vídeo, a identificação do usuário. Isso depende da utilidade para a aplicação web.

* É importante lembrarmos que a comunicação sempre começa com o cliente: é ele quem pede as informações. O servidor responde apenas o que foi requisitado e nunca inicia a comunicação.

* No HTTP: Request -> espera -> Resposta

* Método GET no HTTP, é um método ou uma ação de busca/requisição.

* Código de retorno HTTP (Status Code) `301` - Redirecionamento permanente (força o redirecionamento).
* Código de retorno HTTP (Status Code) `200` - Sucesso.
* Código de retorno HTTP (Status Code) `404` - Não existe.
* Código de retorno HTTP (Status Code) `500` - Erro de processamento (provável erro de código).

* Status Code `2XX` - Successful responses.
* Status Code `3XX` - Redirection messages.
* Status Code `4XX` - Client error responses responses.
* Status Code `5XX` - Server error responses.
* https://httpstatuses.com/
* https://httpstatusdogs.com/
* https://http.cat/

* TCP - protocolo de rede que roda abaixo do HTTP.

* `GET` - Recebe dados (params na URL).
* `POST` - Submeter dados (params no corpo da requisição).
* `PUT` - Atualizar o recurso inteiro, todos os dados.
* `PATCH` - Atualiza algo mais específico, atualização parcial.
* `DELETE` - Remover o recurso.

* Request-Response é uma conversa entre aplicações/serviços.

* `Accept: application/json` -> indicamos para o servidor que queremos recerber a resposta nesse formato de `JSON`.
* Retorno do cabeçalho dessa requisição -> `status code: 200` e `Content-Type: application/json`.
* Podemos especificar o formato que esperamos que seja devolvido com o `Accept`.
* Accept: text/html, Accept: text/css, Accept: application/xml, Accept: application/json, Accept:image/jpeg e Accept: image/

* URI + METHOD está ligado a ação que quero representar.
* Requisições `REST` são feitas pelas ações enviadas (POST - insere / PUT - atualiza).
* Podemos trabalhar com as mesmas URLs para ações diferentes.
* http://alurafood.com/api/restaurante via `GET` - Pede todos os restaurantes.
* http://alurafood.com/api/restaurante via `POST` - Adiciona um restaurante.
* http://alurafood.com/api/restaurante/1 via `PUT/PATCH` - Atualiza o restaurante 1.
* http://alurafood.com/api/restaurante/1 via `DELETE` - Remove o restaurante 1.

* REST - REpresentational State Transfer.
* Trabalhar com a WEb da maneira que ela específica.
* Temos um recurso (URI), temos as operações (GET/POST/PUT/DELETE - verbos do HTTP) e temos a representação do que queremos trafegar ou receber (HTML/XML/JSON). Então `REST` é uma maneira como conseguimos lidar com serviços WEB usando da mesma forma que o HTTP foi proposto. Um modelo arquitetural específico para quando criamos um WEBSERVICE.

* Logo podemos perceber que o padrão usado pela equipe do webservice define que uma requisição web tem três tipos de componentes importantes: recursos (URI), operações (GET, POST, PUT, DELETE/...) e representação de dados(XML, JSON, ...).

* Esses três componentes em conjuntos seguindo algumas práticas são a base para o modelo arquitetural REST(Representational State Transfer) ou em português Transferência de Estado Representacional.

* REST é um padrão arquitetural para comunicações entre aplicações.
* Ele aproveita a estrutura do HTTP.
* Recursos são definidos via URI.
* Operações com métodos HTTP(GET/POST/PUT/DELETE).
* Cabeçalhos(Accept/Content-Type) são usados para especificar as representações(JSON,XML,...).

* `$ curl -v www.google.com` - Esse comando é uma maneira de depurarmos uma requisição e entendermos o que acontece.

* No HTTP2 o corpo da resposta foi comprimido com o GZIP.
* O HTTP2 não envia nem recebe mais texto puro e sim conteúdo binário.
* O HTTP2, por padrão, já criptografa as informações.
* HPACK - Comprimi o conteúdo binário ainda mais.

* GET      /
* Host: www.caelum.com.br
* User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:34.0)
* Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
* Accept-Language: pt-BR,pt;q=0.8,en-US;q=0.5,en;q=0.3
* Accept-Encoding: gzip, deflate

* No HTTP2 não precisamos enviar novamente os headers que já foram enviados em requisições anteriores.

* O HTTP2 trabalha com o conceito de `SERVER PUSH`, onde o servidor já envia os arquivos necessários para a equisição antes mesmo da requisição pedir. O servidor pode empurrar para o clientes certos recursos antes mesmo de serem solicitados, pois ele consegue analisar o HTML e ver o que mais é preciso para carregar a página fazendo com que não seja necessário gastar tempo pedindo todos os outros recursos.

* O HTTP2 fica mais a nível de servidor.
