# Projeto de controle de compras

##### AULA 1 

# Eese é o comando para nos conectarmos no MySQL 
# o -u indica o usuário root, e o -p é porque digitaremos a senha
mysql -u root -p 
mysql -uroot -p

# criar um banco de dados, afinal o MySQL pode tomar conta de vários bancos diferentes
create database controle_compras;

# diz ao MySQL que é o banco que queremos usar
use controle_compras;

# criando a tabela compras, informando colunas e seus tipos (double para números com vírgulas)
create table compras (id int auto_increment primary key, valor double, data date, recebido boolean, observacoes varchar(255));

desc compras; # ver estrutura da tabela

# inserir dados na tabela compras
insert into compras (valor, data, recebido, observacoes) values (1500.0, '2016-02-03', 1, 'geladeira nova');

# consultar a tabela compras
select * from compras;
select data, valor from compras;

# podemos passar expressões para o mysql
select data, valor * 3 from compras;

# filtro, condições
select data, valor, observacoes from compras where valor > 1000;

# inserindo mais campos
insert into compras (valor, data, recebido, observacoes) values (400.0, '2016-01-14', 0, 'hd externo');

# consultando tabela
select * from compras;
select * from compras where valor > 1000;
select * from compras where valor < 1000;
select * from compras where recebido = 0;
select * from compras where recebido = false;

select * from compras where valor > 1000 and data > '2016-02-01'; # and - uma e outra
select * from compras where valor > 1000 or data > '2014-02-01'; # or - uma ou outra
select * from compras where valor <> 400; # where diferente (<>)

# buscar por partes (like hd e qualquer coisa na frente)
select * from compras where observacoes like 'hd%';

# buscar por partes (like er em qualquer lugar)
select * from compras where observacoes like '%er%';

# filtrar todas as compras cujo valor é superior a 1.000,00 reais e inferior a 3.000,00 ou a data seja inferior a 12/02/2010:
SELECT * FROM COMPRAS WHERE (VALOR > 1000 AND VALOR < 3000) OR (DATA < '2010-02-12');

SELECT * FROM COMPRAS WHERE VALOR >= 1000; # Maior-ou-igual:
SELECT * FROM COMPRAS WHERE VALOR <= 1000; # Menor-ou-igual:
SELECT * FROM COMPRAS WHERE VALOR <> 1000; # Diferente:

##### AULA 2

mysql -u root -p # logar no terminal
use controle_compras; # selecionar banco de dados
show tables; # exibe as tabelas do banco

# between - valores entre um e outro, entre 200 incluindo 200 e até 700 incluindo o 700
select * from compras where valor between 200 and 700;

select * from compras where data between '2010-01-01' and '2010-04-01';

# alterar valor
# update nome da tabela set o que deseja alterar e condição
update compras set valor = 900 where id = 20;
update compras set valor = 910, observacoes = 'Festa de niver' where id = 20;

# deletar
delete from compras where id = 44;

# select seleciona
# update atualiza - update não tem from
# delete deleta

# dizer todas menos essa, onde valor não for 108
select * from compras where not valor = 108;

##### AULA 3

# udpdate muda o conteudo
# alter table muda estrutura

desc compras; # estrutura da tabela
insert into compras (valor, data, recebido, observacoes) values (500.0, '2014-04-05', 1, null); # null = vazio

# select null - is null
select * from compras where observacoes is null;

# registros que não são nulos
select * from compras where observacoes is not null;

# modificar estrutura tabela
alter table compras modify observacoes varchar(255) not null;

alter table compras modify recebido tinyint(1) default 0;

# adicionar coluna
# enum defini uma coluna que só aceita valores específicos
alter table compras add column forma_pagt enum('cartao', 'dinheiro', 'boleto');

##### AULA 4

# agregação
#soma
select sum(valor) from compras;
select sum(valor) from compras where data > '2010-01-01';

# contar
select count(valor) from compras;
select count(valor) from compras where data > '2010-01-01';

select sum(valor) as soma, count(valor) as qtde from compras where data > '2010-01-01';

# agrupar, devolver mais de uma linha
# where antes do group by
select recebido, sum(valor) as soma from compras group by recebido;

select month(data), year(data), sum(valor) from compras group by month(data), year(data) order by year(data), month(data);

# media
select month(data), year(data), avg(valor) from compras group by month(data), year(data) order by year(data), month(data);

# sum = soma
# avg = média
# count = conta

##### AULA 5

# compradores
create table compradores (
	id int not null auto_increment primary key,
	nome varchar(100) not null,
	endereco varchar(100) not null,
	telefone varchar(20) not null
);

# inserindo em compradores
insert into compradores (nome, endereco, telefone) values ('raphael', 'sebastiao alves', '999999999');
insert into compradores (nome, endereco, telefone) values ('nachbar', 'rua dois', '11111111');

select * from compradores;

# adicionando coluna, uma chave estrangeira, pq comprador_id aponta para uma outra tabela
alter table compras add column comprador_id int;

desc compras;

update compras set comprador_id = 1 where id <=8;
update compras set comprador_id = 2 where id > 8;

# juntando tabelas
select observacoes, valor, nome from compras join compradores on compras.comprador_id = compradores.id;

# transformando coluna em chave estrangeira
alter table compras add foreign key (comprador_id) references compradores(id);




