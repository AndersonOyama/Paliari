## Paliari Engenharia de Software - Avaliação para programador PHP
Este projeto é uma classe simples para avaliar programadores PHP. A classe Troco no arquivo Troco.php, possui apenas um método, getQtdeNotas, que retorna a um array contendo a quantidade de notas necessárias de cada cédula, para completar o valor em reais passado no parâmetro.

Leia as informações à seguir com atenção, nelas serão dadas todas as instruções para seguir com o teste.

## Importante
- Não faça forks ou pull requests nesse repositório, faça um clone para a sua máquina e em seguida crie um repositório no seu GitHub.

## Submeter a avaliação
Após finalizar o teste, envie o link para o seu repositório e seus dados de contato para o e-mail `rh@paliari.com.br` para que ele seja avaliado, em seguida aguarde nosso contato.
___

### Caso de uso:
Um cliente pediu uma funcionalidade para seu sistema de troco.

Essa funcionalidade permite que se entre com um valor no sistema e retorne a quantidade de notas e moedas necessária para que se chegue nesse valor.

Por exemplo:

Informei ao sistema que precisso retornar R$ 50,15 de troco, o sistema deve me retornar o mínimo de notas e moedas necessário para chegar nesse valor, ou seja uma nota de $50,00, uma moeda de R$ 0,10 e uma moeda de R$ 0,05.

O sistema deve garantir o funcionamento dessa funcionalidade com um teste unitário para cada função adicionada.

### Explicação técnica:
A estrutura desse projeto segue os padrões de desenvolvimento disponíveis em https://www.php-fig.org/psr.

O código deve funcionar com o **PHP 7**.

Dentro da pasta `app/` devem estar todos os arquivos necessários para o funcionamento do código.

A funçao `getQtdeNotas(float $reais)` que está na classe `Troco` deve retornar a quantidade de notas e moedas em formato de `array` de chave e valor;

Exemplo:
```php
<?php

[
    "100" => 2,
    "50" => 0,
    "20" => 1,
    "10" => 0,
    "5" => 1,
    "2" => 0,
    "1" => 0,
    "0.5" => 1,
    "0.25" => 0,
    "0.1" => 0,
    "0.05" => 0,
    "0.01" => 0,
]; 
// 225.50
```

Os testes devem cobrir as funções necessárias para o funcionamento correto.

### Sobre os testes:
Será um diferencial a escrita de testes para cobrir as funções.

A ferramenta utilizada é o `PHPUnit`, e a documentação está disponível nesse link: https://phpunit.readthedocs.io/pt_BR/latest/

Os testes devem ser criados no namespace `Tests`, dentro da pasta `tests/`

### Sobre a avaliação
Dentre os critérios de avaliação estão: qualidade do código escrito(clareza, manutenibilidade, organização), lógica utilizada para resolver o problema, testes.

Dentre o valor total de 10.0 da nota será distribuída da seguinte maneira:

 | Critério               | Valor         |
 | ---------------------- | ------------- |
 | Resolução do problema  | 4.0           |
 | Lógica                 | 2.0           |
 | Testes                 | 2.0           |
 | Qualidade do código    | 2.0           |
 
 ___
 
 ### Instruções para execução do exame
 #### Clonagem e instalação das dependências
 - Faça um clone do projeto para a sua máquina, e mande na sua conta do GitHub.
 - Para instalar as dependências execute o comando ```composer install```
 
 #### Desenvolvimento
 - Dentro da pasta `app/` existe uma classe chamada `Troco`, nela existe um método incompleto chamado `getQtdeNotas` e ele deve retornar a quantidade de notas.
 - Sinta-se a vontade para implementar a solução da maneira que quiser, mas lembre que esse método deve retornar um array de chave e valor com as quantidades de notas no modelo informado.
 - Na pasta `console/` existe o arquivo `troco.php` e você pode usá-lo para testar no seu console o retorno do método executando `php console/troco.php [valor]`(substitua [valor] pelo valor em reais. Ex: `php console/troco.php 10`)
 
 #### Testes
 - Os testes devem ser criados utilizando a ferramenta `PHPUnit` e colocados na pasta `tests/` no namespace `Tests` como a classe `TrocoTest`, você pode utilizar essa própria classe para testar.
 - A classe `TrocoTest` possui um teste de exemplo, que deverá ser atualizado ao final da prova.
 
 #### Lista de comandos
 - Para instalar as dependências navegue até a pasta do projeto e execute `composer install`
 - Para executar o arquivo pelo console navegue até a pasta do projto e execute `php console/troco.php [valor]`
 - Para executar os testes unitários navegue até a pasta do projeto e execute `./vendor/bin/phpunit`

### Considerações
Os candidatos com melhores avaliações receberão nosso contato marcando uma entrevista onde conheceremos melhor seu perfil.

Então vamos la: **Let's Coding**
