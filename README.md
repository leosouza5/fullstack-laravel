# Hub de Cadastro de Vagas (Jobs)

Este projeto foi desenvolvido com o objetivo de aprimorar conhecimentos em Laravel e no desenvolvimento full stack utilizando seu ecossistema. Trata-se de um sistema de cadastro e gestão de vagas, com recursos de autenticação e autorização de usuários, cadastros protegidos e controle de acesso.

### Passos para rodar o projeto

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
npm run dev
```

A aplicação estará disponível em:

```
http://localhost:8000
```

## Funcionalidades

- Cadastro e login de usuários
- Criação, edição e exclusão de vagas (Jobs)
- Controle de acesso aplicado com Policies
- Middleware para proteção de rotas
- Uso de Queues e envio de e-mails
- Estrutura MVC completa (Controllers, Models)
- Migrations e Seeds para estrutura e dados iniciais
- Sistema desenvolvido seguindo boas práticas e recursos nativos do Laravel

## Tecnologias Utilizadas

- Laravel
- PHP
- MySQL
- Blade Templates
- Tailwind
- Vite
- NPM

## Recursos do Framework Aplicados

- Autenticação
- Policies
- Middlewares
- Queues
- Envio de e-mails
- Controllers e Models
- Migrations e Seeders

## Configuração e Execução do Projeto

### Requisitos

- PHP 8+
- Composer
- MySQL
- Node.js e NPM



## Objetivo do Projeto

Este projeto foi desenvolvido exclusivamente para fins de estudo e prática da stack Laravel, com foco no entendimento de uma aplicação completa, integração de banco de dados, autenticação, filas, envio de e-mail e boas práticas no fluxo MVC.

## Status

Projeto concluído para fins de aprendizado e documentação no portfólio.
