1- Copier le fichier .env.example dans .env
2- ./vendor/bin/sail up ##Pour démarer le docker
3- ./vendor/bin/sail exec -it laravel.test bash ##Pour accéder à l'application laravel
4- composer install
5- npm install
6- php artisan migrate

7- ##command artisan to feed movie_db from api https://api.themoviedb.org/3:
php artisan app:api-data

8- npm run dev
9- L'application est accessible via l'url: http://localhost
10- La base de donnée est accessible via l'url: http://localhost:9001/
