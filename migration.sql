--> Subindo MySQL no terminal Linux --

--> sudo su 
--> apt install mysql-server- -y 
--> systemctl enable mysql
--> systemctl start mysql 
--> systemctl status mysql
--> apt install -y mycli
--> mycli -u root 
--> show database
--> show table
--> create database database_contatos
--> use database_contatos
-->


--> Pesquisa 
--> SElECT * FROM contatos(nome bd) WHERE nome(coluna ex:id) LIKE 'nomequequerpesquisarnobancodedados';
--> % antes do nome e/ou depois para pesquisar
--> or = ou para pesquisar 


--> Aqui a variável txt_pesquisa procura no banco de dados pelo ID ou pelo NOME, caso o campo vá vazio ele mostra todos os dados
--> $sql = "SELECT * FROM contatos WHERE id='{$txt_pesquisa}' or nome LIKE '%($txt_pesquisa)%' ORDER BY nome ASC LIMIT $inicio, $quantidade"" ; 
--> ORDER BY nome ASC Aqui ordena por nome de A-Z
--> LIMIT $inicio, $quantidade paginação