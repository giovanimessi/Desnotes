<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Crud Laravel


# Laravel PHP Framework


## O que é este projeto?
O projeto tem como objetivo aprendizagem.


## Para rodar este projeto
```bash
$ git clone https://github.com/giovanimessi/Desnotes.git
$ cd laravel-Desnotes
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate #antes de rodar este comando verifique sua configuracao com banco em .env
$ php artisan serve
$ php artisan db:seed #para gerar os seeders, dados de teste
```
Acesssar pela url: http://127.0.0.1:8000/api/note



## Pré-requisitos
- PHP >= 7.3.0
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension

Composer:
```bash
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
$ sudo chmod +x /usr/local/bin/composer
$ sudo chmod -R 777 ~/.composer/cache/
$ sudo composer self-update
```

### Instalação Framework
```bash
$ composer global require "laravel/installer"
```

Exportar o path do laravel para Linux reconhecer os comandos (bash):

1. Incluir no final do arquivo ~/.bashrc: export PATH="~/.composer/vendor/bin:$PATH"

2. Depois executar: 
```bash
$ source ~/.bashrc 
```


### Criação de um projeto 
```bash
$ laravel new nome_projeto
$ cd nome_projeto
$ php artisan serve
```

O último comando serve para testar a instalação, se em localhost:8000 aparecer LARAVEL escrito na página, tudo está ok. Ao utilizar o comando laravel new automaticamente a última versão do Laravel será baixada. Até a escrita deste documento o comando configura o Laravel 7.3 Caso deseja instalar laravel como outras versões, substitua aquele primeiro comando por:
```bash
$ composer create-project --prefer-dist laravel/laravel nome-do-projeto versao*
```

### Artisan
- Sistema de comandos do Laravel. Help em:
```bash
$ php artisan
```
- Remover arquivos de cache criado pelo Laravel:
```bash
$ php artisan clear-compiled 
$php artisan route:cache
```

```


### Tinker
- Ferramenta de interação com o projeto, objetos podem ser criados e salvos em banco de dados, ótimo para testes sem ter que criar telas:
```bash
$ php artisan tinker

 
### Banco de dados
Configure o  .env 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=****
DB_DATABASE=******
DB_USERNAME=******
DB_PASSWORD=
```bash
$ php artisan make:migration create_table_post --create=posts
```
- Após criar as migrações necessárias, podemos requisitar a criação das mesmas para o banco de dados executando:
```bash
$ php artisan migrate
```

- MassAssigment: é comum que para criar um registro no banco de dados, setamos todas as informações em um objeto e depois realizamos o insert do mesmo. Por exemplo, para um post de blog, podemos fazer $post->title = "Titulo"; $post->content = "conteúdo do post aqui". O Laravel por padrão de segurança, evita que isso seja possível, deixando habilitado somente a função save(). Assim uma requisição direta de criação de registro, setando os campos, não poderá ser feita. Para habilitar o uso do create() entre outras esquemas de inserção, precisamos codificar no Model quais campos da tabela serão permitidos para MassAssigment. Para isso basta criar um array protegido chamado $fillable e especificar os nomes dos campos (ver model Post.php para exemplo). Fora do $fillable o framework tenta controlar a inserção de dados. Dentro de $fillable ganhamos a liberdade sobre o campo, mas perdemos um esquema de segurança.



Comando para criar controller e model:

- php artisan make:controller PostRequest - comando para criar os controllers
- php artisan make:model Post - comando para criar os Models

### Endpoints:

Route::get('/note',[NoteController::class, 'all']);>br> //pegar todos os dados
Route::get('/notes/{id}',[NoteController::class, 'dados1']); <br>//pegar dados especifico
Route::post('/note',[NoteController::class, 'adicionar']);<br> //rota de adicionar
Route::put('/note/edit/{id}',[NoteController::class, 'edit']);<br> //editar
Route::delete('/note/delete/{id}',[NoteController::class,  'delete']); //deleta







