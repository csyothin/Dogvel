#### Install Laravel & Laradock
Go to repository.
```
cd /vagrant/
```
Clone laravel by use github.
```
git clone https://github.com/laravel/laravel.git ./laravel
cd laravel
```
Copy `.env` project.
```
cp env-example .env
```
Clone laradock for control the server.
```
git clone https://github.com/Laradock/laradock.git 
```
Write ignore laradock configurations.
```
nano .gitignore
/laradock  #add in first line
```
Copy `.env` for configure.
```
cp env-example .env
```
Start docker compose (**In first time** this step need **more 30 minutes**, Please check your time before run command).
```
docker-compose up -d nginx mariadb workspace
```
Check the server is ready.
```
docker-compose ps
docker ps
```
Create Databases.
```
docker-compose exec mariadb mysql -uroot -proot
create database {db_project};
```
Go to laradock workspace.
```
docker-compose exec --user laradock workspace bash
```
Update the composer (Danger!!, please understand why, when, where you need to do).
```
composer update
```
Config `.env`
```
nano .env
--------- Connection ----------
DB_CONNECTION=mysql
DB_HOST=mariadb
DB_PORT=3306
DB_DATABASE={db_project}
DB_USERNAME={root_username}
DB_PASSWORD={root_password}
```
Generate Key.
```
php artisan key:generate
```
Database migrate
```
php artisan migrate
```
Path.
```
192.168.33.10
```
