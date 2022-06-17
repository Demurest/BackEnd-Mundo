Instrucciones para el BackEnd

Primero,  hacer git clone del repositorio en la carpeta de Laragon "C:/Laragon/www".

Segundo, Iniciar Laragon.

Tercero, clickear "Database" en el interfaz de Laragon, luego crear una BDD idealmente llamada "test_mundo".

Cuarto, iniciar la terminal de Laragon, navegar a la carpeta clonada(BackEnd-Mundo/Proyecto) y escribir:

"composer install"

Quinto, en la misma carpeta escribir los siguentes comandos:

"cp .env.example .env"
"php artisan config:cache"
"php artisan key:generate"

Sexto, editar las credenciales de la BDD:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_mundo
DB_USERNAME=root
DB_PASSWORD=

Finalmente, se crean las tablas y se rellenan con los siguientes comandos:

"php artisan migrate:fresh"
"php artisan db:seed"



