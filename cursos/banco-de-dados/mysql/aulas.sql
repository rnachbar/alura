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

# ver estrutura da tabela
desc compras;

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

# and - uma e outra
select * from compras where valor > 1000 and data > '2016-02-01';

# or - uma ou outra
select * from compras where valor > 1000 or data > '2014-02-01';

# where diferente (<>)
select * from compras where valor <> 400;

# buscar por partes (like hd e qualquer coisa na frente)
select * from compras where observacoes like 'hd%';

# buscar por partes (like er em qualquer lugar)
select * from compras where observacoes like '%er%';

# filtrar todas as compras cujo valor é superior a 1.000,00 reais e inferior a 3.000,00 ou a data seja inferior a 12/02/2010:
SELECT * FROM COMPRAS WHERE (VALOR > 1000 AND VALOR < 3000) OR (DATA < '2010-02-12');

# Maior-ou-igual:
SELECT * FROM COMPRAS WHERE VALOR >= 1000;

# Menor-ou-igual:
SELECT * FROM COMPRAS WHERE VALOR <= 1000;

# Diferente:
SELECT * FROM COMPRAS WHERE VALOR <> 1000;



