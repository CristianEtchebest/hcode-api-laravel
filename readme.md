# CRUD Com Laravel Utilizando API [Laravel 5.8]
#### Sistema de CRUD Utilizando API do Laravel, banco PostgreSQL e REST Client Insomnia

Aplicativo Insomnia pode ser baixado nesse link -> https://support.insomnia.rest/article/23-installation


## Comandos Para inicializar o Projeto Local
- mkdir projeto
- cd projeto/
- git clone https://github.com/CristianEtchebest/hcode-api-laravel.git
- cd hcode-api-laravel
- composer install


<pre>Crie o banco de Dados no PSQL


CREATE DATABASE hcodedb
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'pt_BR.UTF-8'
    LC_CTYPE = 'pt_BR.UTF-8'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;
    </pre>

<pre>    
Abra o editor de códigos e informe as credenciais no arquivo .env

DB_CONNECTION = pgsql
DB_HOST = 127.0.0.1
DB_PORT = 5432
DB_DATABASE = hcodedb
DB_USERNAME = usuariodb
DB_PASSWORD = senha
</pre>

- php artisan migrate
- php artinsan db:seed
- php artinsan serve

