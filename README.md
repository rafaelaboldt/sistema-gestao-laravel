# Sistema de Gestão com Laravel 10 + Docker + Bootstrap

## Descrição do Projeto

Este projeto consiste no desenvolvimento de um **sistema de gestão** web para controle de informações como **produtos**, **clientes** e **vendas**, seguindo o padrão de arquitetura **MVC** (Model-View-Controller).

Além das operações CRUD completas, o sistema também inclui **envio de e-mail de confirmação de venda**, **paginação**, **validação de formulários**, **máscaras de inputs** e **consumo da API ViaCEP**.

A proposta é aplicar os conhecimentos na prática com **Laravel 10**, utilizando o **Docker** para criar um ambiente padronizado e escalável.

---

## Funcionalidades Implementadas

- CRUD de Produtos (Create, Read, Update, Delete)
- CRUD de Clientes
- CRUD de Vendas com envio de e-mail para o cliente
- Relacionamento de tabelas
- Paginação com filtros de busca
- Máscaras para campos monetários
- Consulta de endereço via API do ViaCEP
- Validação de formulários com feedback visual
- Sistema organizado com rotas nomeadas
- Ambiente Docker com MySQL e NGINX
- Front-end com Bootstrap

---

## Tecnologias Utilizadas

- Laravel 10
- PHP 8.1
- MySQL
- Docker + Docker Compose
- NGINX
- Composer
- Blade
- Bootstrap (Front-end)
- ORM Eloquent
- Form Request
- PhpMyAdmin
- Git e GitFlow
- API ViaCEP
- SMTP (Laravel Mail)

---

## Requisitos do Sistema

- PHP >= 8.1
- Docker e Docker Compose
- Composer
- MySQL

---

## Instalação e Configuração com Docker

### 1. Clone o repositório

`git https://github.com/rafaelaboldt/sistema-gestao-laravel.git `

### 2. Crie o arquivo .env

```
cp .env.example .env
```

### Configure suas variáveis de ambiente no .env

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=sistema_gestao
DB_USERNAME=root
DB_PASSWORD=root
``` 

### Suba os containers com Docker

```
docker-compose up -d
```

### Acesse o container da aplicação

```
docker-compose exec sistema_gestao bash
```

### Instale as dependências

```
composer install
```

### Gere a chave da aplicação

```
php artisan key:generate
```

### (Opcional) Execute as migrations e seeders

```
php artisan migrate --seed
```

---

## Configuração de envio de e-mails (desenvolvimento)

O sistema está configurado para utilizar o MailHog como servidor de e-mail local. Com o MailHog, todos os e-mails enviados pela aplicação são capturados e podem ser visualizados no navegador, sem enviar mensagens reais.

No seu arquivo .env, mantenha a seguinte configuração:

```
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=example@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

Após subir os containers com Docker, acesse a interface do MailHog:
http://localhost:8025/

###  Importante:

Esta configuração é apenas para uso local durante o desenvolvimento. Para produção, será necessário configurar um serviço de e-mail real (SMTP), ajustando as variáveis do arquivo `.env`.

---

## Acesse o projeto

http://localhost:8989/