## Steps to run project

- Install PHP
- Mysql
- APache/nginx
- Install composer
- laravel/Installer
- download valet(for mac)

## After installed all of these to start mysql enter following command in terminal

brew services restart mysql

- Take a clone 

To connect to mysql server add your DB name in file
## Filename = .env

where DB_CONNECTION=mysql
DB_DATABASE=laravel_demo

- create a new DB with name laravel_demo
- Import sql file


##Go to project directory and run your server with command:

    php artisan serve

     Server will be running on 
     http://127.0.0.1:8000

     OR

     http://localhost:8000/ 
      

## User can see categories list,product list and also can add product under particular category.