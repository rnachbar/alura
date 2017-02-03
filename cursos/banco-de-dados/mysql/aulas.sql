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









