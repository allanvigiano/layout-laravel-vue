## About Layout-laravel

Este é um projeto inicial para um site em Laravel e Vue.js que necessite de um layout parecido com o disponível no Wordpress. Isso quer dizer que o site terá basicamente 4 sessões:
1. Header
2. Content
3. Sidebar
4. Footer

Além disso, cada sessão será divida em componentes em Vue.js para que o programador possa adequar outros layouts no padrão proposto.

## Bibliotecas utilizadas
Será utilizado Laravel e Vue.js

## Instalação
1. Clone o repositório: 

    `git clone https://github.com/allanvigiano/layout-laravel-vue.git`

2. Entre na pasta do projeto

    `cd layout-laravel-vue`

3. Instale as dependências do Laravel

    `composer update`

4. Instale as dependências do front-end

    `npm install`

## Rodando o projeto
1. Entre na pasta do projeto

    `cd layout-laravel-vue`

2. Rode o servidor do Laravel 

    `php artisan serve:env` ([saiba mais](#serve-env))

3. Em um novo terminal, rode o npm

    `npm run watch-poll`

#
## <a name="serve-env">Artisan serve env</a>
O comando `php artisan serve:env` foi criado para facilitar a execução do servidor Laravel durante o desenvolvimento. Muitas vezes a porta e host padrão do Laravel já está sendo utilizada por outro projeto e você precisa adicionar parâmetros ao servidor (algo como ` php artisan serve --host=0.0.0.0 --port=8081`).

Para alterar os parâmetros do servidor, basta alterar os parâmentros `SERVE_HOST` e `SERVE_PORT` no arquivo `.env` que se encontra na raiz do projeto.