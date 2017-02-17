# GIT

## Dependências
* [Git](https://git-for-windows.github.io/)

## Aula 1

*Exibe as diferenças entre arquivos*
* `$ git diff`

*Mostra as alterações linha por linha*
* `$ git blame`

*Clonar os arquivos para o seu computador de um repositório (na pasta que deseja ter o repositório)*
* `$ git clone url_do_repositorio_que_o_github_fornece`

*Gerar chave de segurança GIT*

* Através do Git Bash
* `$ ssh-keygen -t rsa -C "seu_email@provedor.com"`

*Baixar projeto inicial da aula*
* `$ git clone https://github.com/jcfonsecagit/repositorio.git`

## Aula 2

* `$ mkdir curso-git`
* `$ cd curso-git`

*Transformar pasta em repositório do git*
* `$ git init`

*Saber quais arquivos o git está controlando*
* `$ git ls-files`

*Mostra o status atual do nosso repositório para o git*
* `$ git status`

*Para o git começar a monitorar os arquivos*
* `$ git add index.html`
* `$ git status`

*Para dar o commit com uma mensagem (-m)*
* `$ git commit -m "criando o projeto"`
* `$ git status`
* `$ git status`
* `$ git add index.html`
* `$ git status`
* `$ git commit -m "titulo da pagina"`

## Aula 3

*Exibe histórioco de commits*
* `$ git log`

*Ver quais arquivos foram alterados*
* `$ git whatchanged`

*Mostrar o que foi alterado nos commits*
* `$ git whatchanged -p`

*Mostra repositórios remotos*
* `$ git remote`

*Adiciona repositórios remotos*
* `$ git remote add origin https://github.com/rnachbar/git-curso.git`
* `$ git remote`

*Subir alterações no repositório remoto*
* `$ git push origin master`

*Baixar repositório remoto*
* `$ git clone URL`

*Atualiza repositório na máquina local*
* `$ git pull`

## Aula 4

*Ver branchs do repositório local (asterisco na branch atual)*
* `$ git branch`

*Criar branch*
* `$ git branch desing`

*Mudar de branch*
* `$ git checkout desing`

*Mandar branch criada para branch principal*
* `$ git push -u origin desing`

*Mostrar branchs remotas*
* `$ git branch -r`

*Criar branch local que existe no repositório*
* `$ git branch -t desing origin/desing`


* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `
* `$ `

## Anotações

* Pasta com controle de alterações = repositório
* commit = gravar alterações no repositório
* git add serve para adicionar arquivos novos e arquivos alterados