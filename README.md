# laravel-sactum-api

![](https://img.shields.io/badge/php-lightgrey) ![](https://img.shields.io/badge/Laravel-orange)

API Rest com funções de registro, visualização, edição e deletar produtos com rotas protegidas e autenticação de usuário.
Este projeto foi criado com objetivo de estudar a ferramenta Laravel pra o desenvolvimento back-end.

## Instalação
```sh
cd laravel-sanctum-api
composer install
php artisan migrate --seed
php artisan serve
```

## Rotas
- Públicas
```sh
/api/products --> (GET) listar todos os produtos
/api/products/{id} --> (GET) listar um produto
/products/search/{name} --> (GET) listar um produto por nome
/register --> (POST) resgistrar usuário
/login --> (POST) fazer login
```

- Protegidas
```sh
/api/products --> (POST) criar produto
/api/products/{id} --> (PUT) editar dados do produto
/api/products/{id} --> (DELETE) deletar produto
/logout --> (POST) fazer logout
```
