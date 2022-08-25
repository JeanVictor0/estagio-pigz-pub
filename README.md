# estagio-pigz

## Explicação do projeto

Criação de api rest via resposta json. Tendo 4 endpoints interagindo com entidades client e phone como o [estagio-pigz](https://github.com/orangebr/estagio-pigz) havia mencionado.

## Minha experiencia
  
Vou citando projeto por projeto e seus dias de desenvolvimento. O que aprendi e posso falar sobre!

1. Primeiro projeto (versão v.0.5 gambiarra)
* Composer, symfony php: No começo tava confiante que ia me dar bem, pois era parecido com npm do node js e um pouco do spring boot. Passei segunda inteira so vendo uns videos sobre symfony e lendo documentação. Ai pensei explorar ela. Digamos, que explorei, anotei e pensei como fazer que deixei projeto com monte configuração e coisas que nem fazia ideia do que fazer, o que ficou inviavel de continuar pq tava sem controle e nem dava para fazer debug. Terça teve velorio do meu vô que morreu noite anterior, so tive noite para estudar e entao virei toda e... Digamos que tive que fazer do 0, um novo projeto. E valeu a pena pois destrinchei tudo que podia e aprendi coisa dms

2. Segundo projeto (versão v.1.0)
* debug, service e json: Por ser quarta e ja estar de noite eu não usei algumas coisas como services do pacote composer, pois daria mais trabalho e meu medo era nao ter tempo. Eu so usei symfony new e botei os pacotes necessario e usei console para gerar controller so para nao ter problema. Alem do doctrine que fiz as entity rapido. Usei json decode e pegando request para pegar json e tornar array. Alem de usar migrate e tals. Eu comprei 2 cursos de php e pirateado da alura. No meu tempo livre irei estudar formação php da alura, formação engenheiro php tambem da alura, curso de desenvolvimento web completo da udemy e curso de devops como docker e outras coisas. Eu realmente quero ser bom na empresa

3. Terceiro projeto (versão v.2.0)
* postman, falhas e critica: Eu criei uma versao com sistema melhor de documento, numero e tals. Alem de possiveis falhas. E compartilhei o link dos testes via json do postman que ta abaixo. E pq testar falhas? Eu acredito que alem de testes de se a aplicação ta funcionando, deve ser feito testes para ver falhas e bugs.

### Utilização de testes no postman

1. Entra em file -> import -> API gateway
2. adicionar esse link [v.1.0](https://www.getpostman.com/collections/74f83f22f2ab4d915a61) e [v.2.0](https://www.getpostman.com/collections/1eb40b962f3558da393d)
3. Alem dos teste solicitados, criei alguns de teste de erros.
* Espero que goste!

<hr>

### Versões:

* Versao Gambiarra
  * Um projeto de inicio que testei e que parei, recomecei do zero fazendo o proximo pois estava completamente quebrado. Mas foi bom pq explorei coisa demais da symfony mas perdi noites de sono e dias sem parar de estudar tudo de composer, php e symfony

* Versão 1.0
  * A versão com o minimo pedido, com todos endpoints testados e funcionais. Tive que começar do zero e usar varios debugs e console. Foi sofrido
 
* Versão 2.0
  * Alguns distemas de segurança contra falhas, tendo uma tolerancia pouco maior. Alem de utilização de docker para testes

##### Bibliotecas e programas utilizados nesse projeto
* Postman: Para teste de api
* Composer
  * Symfony: Como framework php
  * orm-pack: Para utilização do postegreSQL via POO
