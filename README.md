# CREAR APLICACIÓN
composer create-project --prefer-dist laravel/laravel Laverix

# GENERANDO AGREGANDO BOOTSTRAP 4
composer require laravel/ui
php artisan ui bootstrap --auth 

# INSTALANDO ALPINE
npm install  ("verificando instalación")
npm install alpinejs

# INSTALANDO JQUERY
npm install jquery-ui --save-dev

# MIGRACIONES
php artisan make:migration create_users_table  " comando para migraciones"

# SEEDERS
php artisan make:seeder name "Crear Seders"
php artisan migrate:refresh --seed  -> ejecución actualización

# Generar Controller 
php artisan make:controller nombre-controlador
composer dump-autoload   /*Para actulizar routes*/

# Ejecución de MIGRACIONES y MIGRACIONES

MIGRACIONES
php artisan migrate  /* Para correr la migraciones*/

MIGRACIONES
php artisan db:seed  /*ejecución insertado de datos */

# RUN AND UPDATE

npm install "para build"   -> inicializarlo
npm run dev "para compilar"
php artisan serve
# Limpiara cache
php artisan cache:clear
php artisan config:clear
php artisan config:cache

# RUN PROYECTO
/*Observación verificar la base destino*/
Pasos:
npm install "para build"   -> inicializarlo
php artisan migrate
php artisan db:seed
php artisan serve


# OBSERVACIÓN 
No se implemento el cambio de contraseña
No se termino la funcionalidad de filtrado de datos y ordenamiento
Se agrego un campo unico  llamano email para un mejor identificación de usuarios
Se agrego un usuario por defecto: email: diego@gmail.com , password: 123456789A 

