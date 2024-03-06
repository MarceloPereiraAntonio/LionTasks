# LionTasks 📝

Projeto de lista de tarefas em Laravel 10 

## Instalação

## Projeto realizado com ambientação docker, para rodar o projeto:


```bash
git clone https://github.com/MarceloPereiraAntonio/LionTasks.git
# acessar pasta
cd LionTasks/
# Crie o Arquivo .env
cp .env.example .env

# Suba os containers do projeto
docker-compose up -d

# Acesse o container
docker-compose exec app bash

# Instale as dependências do projeto
composer install

# Gere a key do projeto Laravel
php artisan key:generate

## Acesse o projeto
http://localhost:9000
