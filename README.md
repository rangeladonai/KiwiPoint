# Letrim
Letrim é um projeto em desenvolvimento para estudos &amp; portfólio.
Será um Sistema de ponto, inspirado no sistema "Tangerino".

Neste projeto, irei utilizar tecnologias que tive pouco contato, para que eu possa melhorar minhas habilidades.

<h2> Rodar Projeto em DOCKER </h2>
<ul>
  <li>Baixe OU Clone o projeto no seu ambiente</li>
  <li>Instale Docker & Docker compose de acordo com seu Sistema Operacional https://www.docker.com/</li>
  <li>Abra o terminal na pasta raiz do projeto clonado no seu ambiente</li>
  <li>No terminal rode o comando <i><b> docker-compose up -d </b></i> OU <i><b> docker compose up -d </b></i> </li>
  <li>Divita-se acessando o endereço <b>localhost</b></li>
  <li>Para parar & desfazer o container do projeto digite <i><b> docker-compose down </b></i> OU <i><b> docker compose down </b></i></li>
</ul>

<h2> Rodar Projeto em XAMPP </h2>
<ul>
  <li>Baixe OU Clone o projeto no seu ambiente</li>
  <li>Inicie o XAMPP</li>
   <li>Cole a pasta do projeto na pasta HTDOCS</li>
  <li>No arquivo connection.php, comente a conexão com docker, e descomente a conexão com XAMPP</li>
</ul>

<hr>

<h3>Docker Commands:</h3>
<small>

`docker-compose up -d`  =   inicia containers do projeto

`docker-compose  down`  =   para e remove containers do projeto

`docker exec -it CONTAINER_NAME bash`   =   acessa o shell de um container em execução
por exemplo: docker exec -it php bash (nesse container eu rodo os comandos composer por ex)

</small>
