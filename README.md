# estagio-pigz

## Explicação do projeto

Criação de api rest via resposta json. Tendo 4 endpoints interagindo com entidades client e phone como o [estagio-pigz](https://github.com/orangebr/estagio-pigz) havia mencionado.

### Utilização de testes no postman

1. Entra em file -> import -> API gateway
2. adicionar esse link [v.1.0](https://www.getpostman.com/collections/74f83f22f2ab4d915a61) e [v.2.0](https://www.getpostman.com/collections/1eb40b962f3558da393d)
3. Alem dos teste solicitados, criei alguns de teste de erros.
* Espero que goste!

### Versões:

* Versao Gambiarra
  * Um projeto de inicio que testei e que parei, recomecei do zero fazendo o proximo pois estava completamente quebrado. Mas foi bom pq explorei coisa demais da symfony mas perdi noites de sono e dias sem parar de estudar tudo de composer, php e symfony

* Versão 1.0
  * A versão com o minimo pedido, com todos endpoints testados e funcionais. Tive que começar do zero e usar varios debugs e console. Foi sofrido
 
* Versão 2.0
  * Alguns distemas de segurança contra falhas, tendo uma tolerancia pouco maior. Alem de utilização de docker para testes

##### Bibliotecas e programas utilizados nesse projeto
* Docker: Para criação de container de fins de testes (que no momento nao colocarei no repositorio)
* Postman: Para teste de api
* Composer
  * Symfony: Como framework php
  * orm-pack: Para utilização do postegreSQL via POO
* Nginx: Como servidor do php

Obs: Sim, é possivel usar sem docker mas é so modificar o .env do banco de dados
