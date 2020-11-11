# Projeto INNOUT
## Projeto construído durante o curso "PHP 7 Completo - Curso do Desenvolvedor Web 2020 + Projetos" da COD3R.

Trata-se da implementação de sistema de ponto eletrônico.

O projeto encontra-se dockerizado para facilitar a implantação. As orientações para execução estão listadas abaixo:

Linux:
* Executar o comando "sudo ./scriptsDocker/startContainers.sh" em um terminal na pasta do projeto;
* Para encerrar a execução utiliza-se o comando "sudo ./scriptsDocker/stopContainers.sh";

Windows:
* Executar o comando "./scriptsDocker/startContainers.bat" em um terminal na pasta do projeto;
* Para encerrar a execução utiliza-se o comando "./scriptsDocker/stopContainers.bat";

O servidor estará disponível na URL "localhost".

O phpmyadmin estará disponível na URL "localhost/phpmyadmin".

Os dados de conexão ao banco de dados devem ser inseridos em um arquivo env.ini, tomando-se como modelo o arquivo env.sample.ini.

Antes de se logar na aplicação, deve-ser criar o banco de dados innout utilizando o phpmyadmin. Existe um script sql que realiza a primeira população do banco de dados e criação dos usuários. Ele se encontra em extras/db.sql.

Os usuários criados são:
- 	login: admin@cod3r.com.br, password: a;
- 	login: chaves@cod3r.com.br, password: a;
- 	login: barriga@cod3r.com.br, password: a;
- 	login: madruga@cod3r.com.br, password: a;
- 	login: quico@cod3r.com.br, password: a;