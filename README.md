# DOCUMENTATION
You can read all the documentation about the design of this project [here](https://drive.google.com/drive/folders/1AGYgQR7ZG2NIs8AEx5PfgGUJzrnSClTp?usp=share_link)

# HOW TO RUN THIS PROJECT

run this commands, you must have `php`, `composer`, `laravel`, `mysql` already installed.

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan config:cache
php artisan config:clear 
php artisan cache:clear

npm i
npm run dev

php artisan migrate:refresh --seed
```