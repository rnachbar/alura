##### AULA 1 

mysql -u root -p # logando no terminal

show databases; # mostra os bancos de dados existentes

create database livraria; # criando banco

#### importanto dump do banco livrarias

use livraria; # iniciando banco, selecionando banco que iremos utilizar
show tables; # mostra as tabelas existentes

select count(id) from livros; # conta quatos registros existem na tabela livros
select count(id) from autores;

desc livros; # descrição da tabela

select *, (select count(l2.data_de_lancamento) from livros as l2 where l2.data_de_lancamento = l.data_de_lancamento) as anteriores from livros as l order by l.data_de_lancamento; # fazendo um sub select

explain select *, (select count(l2.data_de_lancamento) from livros as l2 where l2.data_de_lancamento = l.data_de_lancamento) as anteriores from livros as l order by l.data_de_lancamento; # utilizando o explain na frente da query temos uma explicação dessa query

explain select *, (select count(l2.data_de_lancamento) from livros as l2 where l2.data_de_lancamento = l.data_de_lancamento) as anteriores from livros as l; # explain exibe a explicação da query, agora sabemos o que acontece na query, o pq demora e podemos melhora la

# sem indice a query faz busca linha por linha, percorre a tabela toda para achar o registro
# ordenado (seja por nome) fica mais fácil de achar os registros

create index indice_por_lacamento on livros(data_de_lancamento); # criando índice para resolver problema na busca da query acima

# indices (index) se ganha na busca mas se perde no insert, update, delete pois também é necessário inserir esse indice, na hora de se fazer um insert vai fazer insert na tabela e no index (insere em dois lados, deleta em dois lados e atualiza em dois lados na tabela e no index, vai ocupar um pouco mais de espaço no disco de armazenamento

# exemplo para criar index quando se cria a tabela
create table LIVROS (
	id integer primary key auto_increment not null,
	nome varchar(100) not null,
	data_de_lancamento date not null,
	index indice_por_lacamento (data_de_lancamento)
	autor_id integer not null
);

show index from livros; # mostra os index da tabela



